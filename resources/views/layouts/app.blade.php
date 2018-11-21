<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>School App</title>

    <!-- Scripts -->

    <script src="{{ asset('js/framework7.min.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->


    <!-- Styles -->
    <link href="{{ asset('css/framework7-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/f7.colo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/f7.material.css') }}" rel="stylesheet">

</head>
<body>
<div id="app" style=' height: 86%;'>
    <div class="navbar">
        <div class="navbar-inner">
            <div class="left">
                <a href="#" class="link">
                    <i class="icon icon-bars"></i>
                    <span>Menu</span>
                </a>
            </div>
            <div class="center"><a href="{{url ('/index') }}" class="link"> School APP</a></div>
            <div class="right">
                <a href="{{ url('/home') }}" class="link">
                    <i class="icon f7-icons">add</i>
                </a>
            </div>
        </div>
    </div>
    <div class="page-content hide-bars-on-scroll">
        @yield('content')
    </div>


    <div class="toolbar toolbar-bottom">
        <div class="toolbar-inner">
            <a href="#" class="link"></a>
            <a class="link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
           </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>


</div>
</body>
</html>
