@extends('layouts')

@section('content')
    <form class="p-5 form-container" method="POST" action={{ route('guitars.update', ['guitar' => $guitars['id']]) }}>
        @csrf
        @method('PUT')
        <h2 class="text-center py-3">Add Guitars</h2>
        <div class="form-input">
            <input class="py-2 my-3" value="{{ $guitars['name'] }}" name="name" type="text" placeholder="Name of guitar">
            @error('name')
                <div class="text-danger text-sm"><small>{{ $message }}</small></div>
            @enderror
            <input class="py-2 my-3" value="{{ $guitars['brand'] }}" name="brand" type="text"
                placeholder="Brand of guitar">
            @error('brand')
                <div class="text-danger text-sm"><small>{{ $message }}</small></div>
            @enderror
            <input class="py-2 my-3" value="{{ $guitars['year_made'] }}" name="year_made" type="text"
                placeholder="Year made">

            @error('year_made')
                <div class="text-danger text-sm"><small>{{ $message }}</small></div>
            @enderror

        </div>
        <button class="btn btn-secondary mt-3">Add Guitar</button>
    </form>
@endsection
