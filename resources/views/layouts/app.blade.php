<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sabudhdhi.com</title>
    {{-- favicon icon title tab --}}
    <link rel="shortcut icon" type="image/png" href="/img/1.png"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{asset('/css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('/css/jquery-ui.css') }}" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

        .pane {
            color: #2b2b2b;
            overflow-y: scroll;
            border: none !important;
        }
        .scroller {
            scrollbar-color: #2b2b2b;
            scrollbar-width: thin;
        }
        .scroller::-webkit-scrollbar {
            width: 10px;
            border: none !important;
        }
        .scroller::-webkit-scrollbar-track {
            background: #9E9E9E;
            border: none !important;
        }
        .scroller::-webkit-scrollbar-thumb {
            background: #2b2b2b;
            border: none !important;
        }
    </style>

<script>
    window.Laravel = '{!! json_encode([
    'csrfToken' => csrf_token(),
    'user' => Auth::user(),  ]) !!}';
    window.setLogout = function () {
        document.getElementById('logout-form').submit();
    };
</script>
</head>
<body>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    
    <v-app id="app">
        @yield('content')
    </v-app>

    {{-- <script src="{{asset('/js/jquery.js')}}"></script>
    <script src="{{asset('/js/jquery-ui.js')}}"></script>
    <script src="{{asset('/js/jquery.ui.touch-punch.js')}}"></script>
    <script src="{{asset('/js/app.js')}}"></script> --}}
</body>
</html>
