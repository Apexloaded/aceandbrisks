<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    @yield('title')
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ url('/images/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @livewireStyles
</head>
<body>
    <x-header />
    @yield('content')
    <x-footer />
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('aos/aos.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
    @livewireScripts
</body>
</html>
