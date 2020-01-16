<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 09/03/2019
 * Time: 19:45
 */
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>@yield('title', config('app.name'))</title>
</head>
<body>
    @yield('main_content')
</body>
</html>
