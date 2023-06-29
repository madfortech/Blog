<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>App Name - @yield('title')</title>
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
        <link rel="stylesheet" href="{{asset('css/styles.min.css')}}">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body>
        @include('layouts.nav')
        <main class="main py-5">     
            @yield('content')
        </main>

        <!--Start Footer Comment-->
        <footer class="footer fixed-bottom">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-9">
                        <ul class="list-inline text-capitalize text-light mt-3 text-center text-md-start">
                            <li class="list-inline-item">
                                2024 all right reserved
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center text-md-start mt-3">
                            @auth 
                            <a class="btn btn-sm text-capitalize" role="button">
                                {{ Auth::user()->email }}
                            </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer Comment-->

        <!-- <script src="{{ mix('js/app.js') }}" defer></script> -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/script.min.js')}}"></script>
    </body>
</html>
