<header class="header header-sticky mb-4">
    <div class="container-fluid">
      <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
        <i class="fas fa-bars"></i>
      </button><a class="header-brand d-md-none" href="#">
        NSUK</a>
      <ul class="header-nav d-none d-md-flex">
        <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
      </ul>
      <ul class="header-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="far fa-bell"></i></a>
        </li>

      <ul class="header-nav ms-3">
        <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('admin/assets/img/avatars/8.jpg')}}" alt="user@email.com"></div>
          </a>
          <div class="dropdown-menu dropdown-menu-end pt-0">
            <div class="dropdown-header bg-light py-2">
              <div class="fw-semibold">Account</div>
            </div>
            <a class="dropdown-item" href="#">
                <i class="fas fa-user me-2"></i> Profile
            </a>

            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs me-2"></i> Settings
            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#">
                <i class="fas fa-sign-out-alt me-2"></i> Logout</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="header-divider"></div>
    <div class="container-fluid">
      <small>(Yield Breadcrumb Here)</small>
      @yield('breadcrumb')

    </div>
  </header>
