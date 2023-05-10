@extends('layouts')
@section('content')
    <a class="btn btn-primary ms-5" href={{ route('guitars.create') }}>Add Guitars</a>

    <div class="mt-5 py-5 mx-auto">
        @if (count($guitars) < 1)
            <p class="text-center">There is no item to display</p>
        @else
            @foreach ($guitars as $guitar)
                <div class="d-flex justify-content-center">
                    <h3><a href="{{ route('guitars.show', ['guitar' => $guitar['id']]) }}">{{ $guitar['name'] }}</a></h3>
                    <ul class="d-flex">
                        <li class="ms-3">{{ $guitar['brand'] }}</li>
                        <li class="ms-3">{{ $guitar['year_made'] }}</li>
                        <div class="actions ms-5 ">
                            <button class="btn btn-warning mx-2 ">
                                <a href="{{ route('guitars.edit', ['guitar' => $guitar['id']]) }}">Edit</a>
                            </button>
                            <button class="btn btn-danger mx-2">
                                <a href="{{ route('guitars.destroy', ['guitar' => $guitar['id']]) }}">delete</a>
                            </button>
                        </div>
                    </ul>


                </div>
            @endforeach
        @endif
    </div>
@endsection
