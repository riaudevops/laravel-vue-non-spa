<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta name="description" content="{{config('app.name_long')}}">
    <meta name="keywords" content="{{config('app.keywords')}}">
    <meta name="author" content="{{config('app.author')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title', config('app.name'))</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}">
    <script type="text/javascript" src="{{asset('js/uikit.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/vue.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/vuikit.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/vuikit-icons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
</head>
<body>
    @yield('content')
    <script type="text/javascript" src="{{asset('js/uikit-icons.min.js')}}"></script>
</body>
</html>
