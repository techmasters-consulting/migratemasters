<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>..:: @yield('title') - {{ config('app.name', 'Migration Masters') }} ::.. </title>


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}" type="text/css" charset="utf-8" />
    <link media="all" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link media="all" href="{{ asset('css/main.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/red.css') }}" rel="stylesheet">--}}


</head>
<body class="no-pad">
<div class="login-main-container">
    <div class="login-container">
        <div class="login-header">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo-black.png') }}" alt="Migration Masters">
                </a>
            </div>

            <h4>@yield('auth-header')</h4>
        </div>

        @yield('content')

    </div>
</div>
{{--<script src="{{ asset('js/togg.js') }}" defer></script>--}}
</body>
</html>
