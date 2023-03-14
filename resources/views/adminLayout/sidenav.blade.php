<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <br>
    <a href="{{ url('dashboard') }}" class="brand-link">
        <img src="https://via.placeholder.com/100" alt="S-GUIDE LOGO" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">S-GUIDE Dashboard</span>
    </a>
    <br>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                {{-- .menu-open --}}


                <li class="nav-header">MENU</li>
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}"
                        class="nav-link {{ 'dashboard' == request()->path() ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">CASE REPORTS</li>
                <li class="nav-item">
                    <a href="{{ url('dashboard/reports/list') }}"
                        class="nav-link {{ 'dashboard/reports/list' == request()->path() ? 'bg-primary' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Record and Reports
                        </p>
                    </a>
                </li>

                <li class="nav-header">User management</li>
                <li class="nav-item">
                    <a href="{{ url('dashboard/user/list') }}"
                        class="nav-link {{ 'dashboard/user/list' == request()->path() ? 'active' : '' }}">
                        <i class="nav-icon bi bi-person-fill"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="nav-icon bi bi-box-arrow-right"></i>
                        <p>
                            Logout
                        </p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>
                {{-- <li class="nav-header">SYSTEM</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-gear"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/" class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>{{ __('Logout') }}</p>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
    </div>
</aside>
