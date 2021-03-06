<div id="sidebar" class="active">
  <div class="sidebar-wrapper active">
    <div class="sidebar-header">
      <div class="d-flex justify-content-between">
        <div class="logo">
<!--          <img src="{{ asset('admin/images/logo/logo.png')}}" alt="Logo" >
-->        </div>
        <div class="toggler">
          <a href="" class="sidebar-hide d-xl-none d-block" onclick="event.preventDefault()"><i class="bi bi-x bi-middle"></i></a>
        </div>
      </div>
    </div>
    <div class="sidebar-menu">
      <ul class="menu">

        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item ">
          <a href="{{ route('admin.home')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
          </a>
        </li>
        
        <li class="sidebar-item">
          <a href="/" class='sidebar-link'>
            <i class="bi bi-eye-fill"></i>
            <span>View as User</span>
          </a>
        </li>

        <li class="sidebar-item ">
          <a href="{{ route('admin.post.index')}}" class='sidebar-link'>
            <i class="bi bi-pen-fill"></i>
            <span>Manage Posts</span>
          </a>
        </li>

        <!--<li class="sidebar-item  has-sub">-->
        <!--  <a href="#" class='sidebar-link'>-->
        <!--    <i class="bi bi-pen-fill"></i>-->
        <!--    <span>Manage Posts</span>-->
        <!--  </a>-->
        <!--  <ul class="submenu ">-->
        <!--    <li class="submenu-item ">-->
        <!--      <a href="component-alert.html">Alert</a>-->
        <!--    </li>-->
        <!--  </ul>-->
        <!--</li>-->


        <li class="sidebar-item ">
          <a href="{{route('admin.role.index')}}" class="sidebar-link">
            <i class="bi bi-person-fill"></i>
            <span>Manage Role</span>
          </a>
        </li>

        <li class="sidebar-title">
          Settings
        </li>
        <li class="sidebar-item ">
          <a href="{{route('admin.profile.edit',auth()->id())}}" class="sidebar-link">
            <i class="bi bi-person-fill"></i>
            <span>Profile</span>
          </a>
        </li>
                          @if(Route::has('logout'))

        <li class="sidebar-item ">
          <a href="{{ route('logout')}}" class="sidebar-link" onclick="event.preventDefault();
                    document.querySelector('#logout-form').submit();
                    ">
<i
                      class="icon-mid bi bi-box-arrow-left me-2"></i>
            <span>Logout</span>
          </a>
        </li>
@endif
      </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
  </div>
</div>

<!-- Logout Form -->
<form action="{{ route('logout') }}" id="logout-form" method="post">
  @csrf
</form>