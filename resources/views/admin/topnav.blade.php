                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <button class="btn btn-link d-md-none rounded-circle me-3" 
                            id="sidebarToggleTop" 
                            type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                             <li class="nav-item">
                                <a class="nav-link" href="{{route('user.dashboard')}}">
                                    <i class="fas fa-eye"></i>
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
                                        
                                        <a class="dropdown-item" href="{{('')}}">
                                            <i class="fas fa-edit"></i>&nbsp;
                                            Edit Profile
                                        </a>
                                        <a class="dropdown-item" href="{{route('user.loginactivity.index') }}">
                                            <i class="fas fa-edit"></i>&nbsp;
                                            Login activity
                                        </a>
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
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>