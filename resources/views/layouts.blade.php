<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap css --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/style.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <nav>
        <div class="navbar">
            <ul class="justify-content-between d-flex mx-auto">
                <li class="mx-3"><a href="{{ route('guitars.index') }}">Home</a></li>
                <li class="mx-3"><a href="/about-us">About Us</a></li>
                <li class="mx-3"><a href="/contact-us">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
    <footer>
        <div class="footer text-center">
            <h1>This is footer</h1>
        </div>
    </footer>
    {{-- bootstrap popper js --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
