

    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar">
        <div class="container">
            <a class="navbar-brand" href="{{('/')}}">
                {{ __('Podcast app') }}
            </a>
            <button data-bs-toggle="collapse" 
                class="navbar-toggler rounded-0 border-0" 
                data-bs-target="#navcol">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol">
           
                <ul class="navbar-nav ms-auto ps-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{('')}}">
                        {{ __('Support') }}
                        </a>
                    </li>
                    @if (Route::has('login'))
                 
                        @auth 
                        @role('Super-Admin')
                        <li class="nav-item">
                            <a class="nav-link" href=" {{route('admin.home')}}">
                            {{ __('Home') }}
                            </a>
                        </li>
                        @endrole
                       
                        <!-- Account -->
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu mt-5 border-0 rounded-0">
                                
                                @if(file_exists(app_path('Http/Controllers/User/SettingController.php')))
                                    <a class="dropdown-item" href="{{ route('user.settings.index') }}">
                                        <i class="fas fa-cog"></i>
                                        {{ __('Settings') }}
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
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('login')}}">
                            {{ __('Login') }}
                            </a>
                        </li>
                        @endauth
                    @endif
                </ul>
           
            </div>
        </div>
    </nav>