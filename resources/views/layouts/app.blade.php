<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>App Name - @yield('title')</title>
        <meta name="theme-color" content="rgb(52,179,241)">
        <meta name="twitter:description" content="write description here">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary">
        <meta property="og:title" content="VideoApp">
        <meta name="Description" content="best social app">
        <meta name="Keywords" content="social app , sharing post">
        <meta name="Author" content="Himanshu Nishad">
        <meta name="twitter:title" content="VideoApp">
        <meta property="og:description" content="write description here">
        <meta name="description" content="write description here">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="manifest" href="{{asset('manifest.json')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;display=swap">
        <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/styles.min.css')}}">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body>
        @include('layouts.nav')
        <main class="main py-5">     
            @yield('content')
        </main>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/script.min.js')}}"></script>
    </body>
</html>
