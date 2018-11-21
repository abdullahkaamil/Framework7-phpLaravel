<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>School WebSite</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/framework7-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/f7.colo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/f7.material.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('#') }}">
                School App

            </a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</div>

<!-- Scripts -->

<script src="{{ asset('js/framework7.min.js') }}" ></script>
<script src="{{ asset('js/script.js') }}" ></script>
<script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
