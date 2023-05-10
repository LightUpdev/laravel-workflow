<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;
use Illuminate\Contracts\Session\Session;

class GuitarsController extends Controller
{
    // private static function getData()
    // {
    //     return [
    //         ['id' => 1, 'name' => 'American standard strat', 'brand' => 'fender'],
    //         ['id' => 2, 'name' => 'Starla S2', 'brand' => 'PRS'],
    //         ['id' => 3, 'name' => 'Explorer', 'brand' => 'Gibson'],
    //     ];
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guitars.index', [
            'guitars' => Guitar::all(),
            'userInput' => '<script>alert("hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'year_made' => ['required', 'integer'],
        ]);

        $guitars = new Guitar();
        $guitars->name = $request->input("name");
        $guitars->brand = $request->input("brand");
        $guitars->year_made = $request->input("year_made");
        $guitars->save();

        return redirect()->route("guitars.index");
    }

    /**
     * Display the specified resource.
     */
    public function show($guitar)
    {
        //
        return view("guitars.show", [
            'guitar' => Guitar::findOrFail($guitar)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($guitar)
    {
        return view("guitars.edit", [
            'guitars' => Guitar::findOrFail($guitar)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $guitar)
    {
        //
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'year_made' => ['required', 'integer'],
        ]);

        $guitars = Guitar::findOrFail($guitar);
        $guitars->name = $request->input("name");
        $guitars->brand = $request->input("brand");
        $guitars->year_made = $request->input("year_made");
        $guitars->update();

        return redirect()->route("guitars.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $guitar)
    {
        //
        $guitars = Guitar::findOrFail($guitar);
        $guitars->delete();

        $request->session()->$request->flash('message', 'Guitar deleted');
    }
}
