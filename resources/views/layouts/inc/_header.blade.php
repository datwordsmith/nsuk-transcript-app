<header class="header header-sticky mb-4">
    <div class="container-fluid">
      <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
        <i class="fas fa-bars"></i>
      </button><a class="header-brand d-md-none" href="#">
        NSUK</a>

      <ul class="header-nav ms-auto">

      <ul class="header-nav ms-3">
        <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('admin/assets/img/avatars/8.jpg')}}" alt="user@email.com"></div>
          </a>
          <div class="dropdown-menu dropdown-menu-end pt-0">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user me-2"></i> Profile
            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt me-2"></i>{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
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
