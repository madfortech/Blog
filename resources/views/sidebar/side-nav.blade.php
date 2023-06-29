        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-text mx-3">
                        <span>{{ __(' Admin Panel') }}</span>
                    </div>
                </a>
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>{{ __('Dashboard ') }}</span>
                        </a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <i class="fas fa-edit"></i>{{ __('Add new post ') }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('admin.posts.create')}}"> 
                            {{ __('Create post ') }}
                            </a>
                            <a class="dropdown-item" href="{{route('admin.posts.index')}}">
                            {{ __('view all posts ') }}
                            </a>
                        </div>
                    </li>
                    <!-- End Post -->

                  
                    <li class="nav-item dropdown">
                        <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <i class="fas fa-cog"></i>{{ __('settings ') }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">{{ __(' general') }}</a>
                        </div>
                    </li>
                </ul>
                <div class="text-center d-none d-md-inline">
                    <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                </div>
            </div>
        </nav>
        <!--End Navbar Comment-->