<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('assets/dist/img/logo.png')}}" alt="ICMS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ICMS </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               {{-- .menu-open --}}
          <li class="nav-item">
            <a href="/" class="nav-link {{'/' == request()->path() ? 'active': ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="/add-case" class="nav-link {{'add-case' == request()->path() ? 'active': ''}}">
              <p>
                <i class="bi bi-bookmark-plus-fill"></i> Add new case
              </p>
            </a>
          </li>

          <li class="nav-header">RECORDS & REPORTS</li>
          <li class="nav-item">
            <a href="/case-reports" class="nav-link {{'case-reports' == request()->path() ? 'active': ''}}">
              <p>
                <i class="bi bi-flag-fill"></i> Case reports
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link {{'generate-reports' == request()->path() ? 'active': ''}}">
              <p>
                <i class="nav-icon far fa-image"></i> Generate reports
              </p>
            </a>
          </li>
          
          <li class="nav-header">User management</li>
          <li class="nav-item">
            <a href="/" class="nav-link">
              <p>
                <i class="bi bi-person-fill"></i> User
              </p>
            </a>
          </li>             
          <li class="nav-header">SYSTEM</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="bi bi-gear"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/" class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Logout') }}</p>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </a>
              </li>
            </ul>
          </li>          
        </ul>
      </nav>      
    </div>    
  </aside>