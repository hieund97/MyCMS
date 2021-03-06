<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-minimize">
        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
          <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
          <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
        </button>
      </div>
    <a class="navbar-brand" href="/admin/{{(Request::segment(2))}}">{{(request()->is('admin')) ? 'DashBoard' : getUpperCase(Request::segment(2))}}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">      
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/" target="_blank">
            <i class="material-icons">home</i>
            <span>
              Xem trang web
            </span>
          </a>
        {{-- </li>        
        <li class="nav-item dropdown">
          <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification" style="right:80px;">5</span>
            <span>
              Thống báo
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Mike John responded to your email</a>
            <a class="dropdown-item" href="#">You have 5 new tasks</a>
            <a class="dropdown-item" href="#">You're now friend with Andrew</a>
            <a class="dropdown-item" href="#">Another Notification</a>
            <a class="dropdown-item" href="#">Another One</a>
          </div>
        </li> --}}
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="material-icons">person</i>
            <span>
              Tải khoản
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item" href="/admin/user/{{auth()->user()->id}}/edit">Profile</a>
            <a class="dropdown-item" href="/admin/register">Register</a>
            <div class="dropdown-divider"></div>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
              class="dropdown-item" href="#">Log out</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<form action="/admin/logout" method="POST" id="logout-form">
  @csrf
</form>