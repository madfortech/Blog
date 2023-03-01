    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar">
        <div class="container">
            <a class="navbar-brand" href="{{('/')}}">
                SharingApp
            </a>
            <button 
                data-bs-toggle="collapse" 
                class="navbar-toggler rounded-0 border-0" 
                data-bs-target="#navcol">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol">
          
                @if (Route::has('login'))
 
                <ul class="navbar-nav ms-auto ps-3">

                    @auth 
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.dashboard')}}">
                                <i class="fas fa-home text-white" style="font-size: 18px;"></i>
                                home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.posts.create')}}">
                                <i class="fas fa-upload text-white" style="font-size: 18px;"></i>
                            </a>
                        </li>
                       
                        <!-- Account -->
                        <li class="nav-item dropdown pe-3">
                            <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu mt-3">

                                @if(file_exists(app_path('Http/Controllers/User/SettingController.php')))
                                <a class="dropdown-item" href="{{ route('user.settings.index') }}">
                                    <i class="fas fa-cog"></i>
                                    Settings
                                </a>
                                @endif
 
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fas fa-lock"></i>
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
                        </li>
                    
                   
                        <!-- Login -->
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">
                                Login
                            </a>
                        </li>
                    @endauth
                </ul>
                
                @endif   
               
           
            </div>
        </div>
    </nav>
    <!--End Navbar Comment-->