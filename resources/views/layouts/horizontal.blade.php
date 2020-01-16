<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 19/12/2019
 * Time: 19:03
 */
?>
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
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminto/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('adminto/css/icons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('adminto/css/app.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-vue.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/placeholder-loading.min.css')}}">
    <!-- JS-->
    <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-vue.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pjax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app-custom.js')}}"></script>
</head>
<body class="drop-menu-dark">
<!-- Pre-loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner-grow text-success m-2" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>
<!-- End Preloader-->
<!-- Navigation Bar-->
<header id="topnav">
    @include('partials.topnavbar')
    @include('partials.topmenu')
</header>
<!-- End Navigation Bar-->
    @yield('main_content')
    <!-- paceholder -->
    <div class="wrapper">
        <div class="container-fluid">
            @include('partials.placeholder')
        </div>
    </div>
    @include('partials.footer')
    @include('partials.rightsidebar')
    <script type="text/javascript" src="{{asset('adminto/js/vendor.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('adminto/js/app.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/vee-validate/id.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.serializeToJSON.min.js')}}"></script>
</body>
</html>
