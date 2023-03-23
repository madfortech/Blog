<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>App Name - @yield('title')</title>
    <meta name="theme-color" content="rgb(238,241,255)">
    <meta name="author" content="himanshu nishad">
    <meta name="twitter:description" content="write description here">
    <meta name="twitter:card" content="summary">
    <meta property="og:description" content="write description here">
    <meta property="og:type" content="website">
    <meta property="og:title" content="AdminPanel">
    <meta name="twitter:title" content="AdminPanel">
    <meta name="description" content="write description here">
    <link rel="stylesheet" href="{{asset('styles/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/css/styles.min.css')}}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body id="page-top">
    <div id="wrapper">

        @include('admin.sidebar.nav')
        <!--End Navbar Comment-->

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                @include('admin.topnav')
                <div class="container-fluid">
                    @yield('content')
                </div> <!-- end container fluid -->
            </div>
            <!-- end content -->

            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright">
                        <span>Copyright © AdminPanel 2022</span>
                    </div>
                </div>
            </footer>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
<script src="{{ mix('js/app.js') }}" defer></script>
<script src="{{asset('styles/js/jquery.min.js')}}"></script>
<script src="{{asset('styles/js/bootstrap.min.js')}}"></script>
<script src="{{asset('styles/js/script.min.js')}}"></script>
</body>

</html>