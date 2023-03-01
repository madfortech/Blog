        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" 
                    href="{{route('admin.home')}}">
                    <div class="sidebar-brand-text mx-3">
                        <span>AdminPanel</span>
                    </div>
                </a>
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('admin.home')}}">
                            <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <i class="fas fa-user"></i>Users
                        </a>
                        <div class="dropdown-menu">
                             
                            <a class="dropdown-item" href="{{route('admin.users.index')}}">
                                View all users 
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                       
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View all users</a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <i class="fas fa-tools"></i>Tools
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Export data</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            <i class="fas fa-cog"></i>Settings
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">General</a>
                        </div>
                    </li>
                </ul>
                <div class="text-center d-none d-md-inline">
                    <button class="btn rounded-circle border-0" id="sidebarToggle" type="button">

                    </button>
                </div>
            </div>
        </nav>
       