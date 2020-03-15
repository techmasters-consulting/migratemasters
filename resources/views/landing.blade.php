<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Migration Masters</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}" type="text/css" charset="utf-8" />
    <link media="all" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link media="all" href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="pt-70 bg-gray">



<div id="app">

    <app name="{{$success['name']}}" token="{{$success['token']}}"></app>
</div>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.main.js') }}" defer></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
