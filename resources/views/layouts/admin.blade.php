<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - AdminPanel</title>
    <meta name="theme-color" content="rgb(238,241,255)">
    <meta name="author" content="himanshu nishad">
    <meta name="twitter:description" content="write description here">
    <meta name="twitter:card" content="summary">
    <meta property="og:description" content="write description here">
    <meta property="og:type" content="website">
    <meta property="og:title" content="AdminPanel">
    <meta name="twitter:title" content="AdminPanel">
    <meta name="description" content="write description here">
    <link rel="stylesheet" href="{{asset('admin-styles/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{asset('admin-styles/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-styles/css/styles.min.css')}}">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body id="page-top">
    <div id="wrapper">
        @include('sidebar.side-nav')

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/'}}" target="_blank">
                                    <i class="fas fa-eye fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;
                                </a>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                        <span class="d-none d-lg-inline me-2 text-gray-600 small">
                                            {{ Auth::user()->name }}
                                        </span>
                                    </a>
                                  
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                       
                                        <a class="dropdown-item" href="{{route('user.settings.index')}}">
                                            <i class="fas fa-cog fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;
                                            {{ __('Settings') }}
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>
                                            &nbsp;
                                            {{ __('Logout') }}
                                        </a>
                                        <form 
                                            id="logout-form" 
                                            action="{{ route('logout') }}" 
                                            method="POST" 
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Navbar -->
                @yield('content')
            </div>
        </div>
    </div>

    <!-- <script src="{{ mix('js/app.js') }}" defer></script> -->
    <script src="{{asset('admin-styles/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin-styles/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin-styles/js/script.min.js')}}"></script>
</body>

</html>