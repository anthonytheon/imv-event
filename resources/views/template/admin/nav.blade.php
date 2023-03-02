<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 fixed">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="\assets\imv\assets\img\logo\logo-imv.png" alt="Indo Mega Vision" height="60" width="auto" class="mt-2 mb-2">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
        <div class="form-inline mt-5 pb-3 mb-3 d-flex">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin" class="nav-link @if (request()->segment(count(request()->segments())) == 'admin') {{'active'}} @endif">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-header">USERS CMS</li>
                <li class="nav-item">
                    <a href="/admin/users" class="nav-link @if (Request::segment(2) == 'users') {{'active'}} @endif">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li> --}}
                <li class="nav-header">LANDING PAGE CMS</li>
                <li class="nav-item">
                    <a href="/admin/pages" class="nav-link @if (Request::segment(2) == 'pages') {{'active'}} @endif">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Landing Page
                        </p>
                    </a>
                </li>
                <li class="nav-header">EVENTS CMS</li>
                <li class="nav-item">
                    <a href="{{ route('event.index') }}" class="nav-link @if (Request::segment(2) == 'event') {{'active'}} @endif">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Events
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('item.index') }}" class="nav-link @if (Request::segment(2) == 'items') {{'active'}} @endif">
                        <i class="nav-icon fas fa-box-open"></i>
                        <p>
                            Items
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/guest" class="nav-link @if (Request::segment(2) == 'guest') {{'active'}} @endif">
                        <i class="nav-icon fas fa-box-open"></i>
                        <p>
                            Guests
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
