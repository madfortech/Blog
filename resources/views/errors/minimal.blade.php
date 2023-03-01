<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="rgb(52,179,241)">
    <meta name="twitter:description" content="write description here">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta property="og:title" content="VideoApp">
    <meta name="Description" content="best social app">
    <meta name="Keywords" content="social app , sharing post">
    <meta name="Author" content="Himanshu Nishad">
    <meta name="twitter:title" content="VideoApp">
    <meta name="description" content="write description here">
    <meta property="og:description" content="write description here">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css?h=f1a8fe9e98944b9d682ec5c3efac8f17')}}">
    <link rel="manifest" href="{{asset('manifest.json?h=29a6486343215f8ad69d6602200160dd')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;display=swap">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css?h=1ebaba3465f39106375be623a0ebab45')}}">
    <link rel="stylesheet" href="{{asset('css/styles.min.css?h=4c3d1e3c9a93bef004287008eb2c8538')}}">
</head>
<body style="font-family: 'Noto Sans JP', sans-serif;">
    <main class="main py-5">
        @yield('message')
    </main>
        <!-- @yield('code') -->
 
    <script src="{{asset('js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638')}}"></script>
    <script src="{{asset('js/bootstrap.min.js?h=01bb7ae0c0b11509558f2aa83f244399')}}"></script>
    <script src="{{asset('js/script.min.js?h=6dac8d294ec5d11ebfbcf6a98f7a20a5')}}"></script>
</body>
</html>