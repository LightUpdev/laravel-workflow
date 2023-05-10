@extends('layouts')
@section('content')
    <div class="mt-5 py-5 mx-auto">
        <h3>{{ $guitar['name'] }}</h3>
        <ul class="d-flex">
            <li class="ms-3">{{ $guitar['brand'] }}</li>
            <li class="ms-3">{{ $guitar['year_made'] }}</li>
        </ul>
    </div>
@endsection
