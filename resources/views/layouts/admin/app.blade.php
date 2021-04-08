<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Echo Of Myanmar - Administrator Panel</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{ asset('admin/vendors/iconly/bold.css')}}">

  <link rel="stylesheet" href="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
  
  <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-icons/bootstrap-icons.css')}}">
  
  <link rel="stylesheet" href="{{ asset('admin/css/app.css')}}">
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.svg')}}" type="image/x-icon">
  <!-- Data Table CSS -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/simple-datatables/style.css') }}">
  <!-- Toastify -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/toastify/toastify.css') }}">
  <!-- Custom Style -->
  @stack('style')

  <!-- Eruda JS -->
  <script src="{{ asset('js/eruda.js')}}"></script>
  <script>
    eruda.init();
  </script>
</head>
<body>

  <div id="app">
    <!-- Admin Sidebar -->
    @include('layouts.admin.sidebar')

    <div id="main" class="layout-navbar mb-0">
      <header>
        <nav class="navbar navbar-expand navbar-light ">
          <div class="container-fluid">

            <a href="" class="burger-btn d-block d-xl-none select-none" onclick="event.preventDefault()">
              <i class="bi bi-justify fs-3"></i>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="ms-auto dropdown">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="user-menu d-flex">
                    <div class="user-name text-end me-3">
                      <h6 class="mb-0 text-gray-600">
                        {{ auth()->user()->name}}
                      </h6>
                      <p class="mb-0 text-sm text-gray-600">
                        Administrator
                      </p>
                    </div>
                    <div class="user-img d-flex align-items-center">
                      <div class="avatar avatar-md">
                        <img src="{{asset('admin/images/faces/'.auth()->user()->image)}}">
                      </div>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                  <li>
                    <a class="dropdown-item" href="{{ route('admin.post.create')}}"><i class="icon-mid bi bi-plus-circle-fill me-2 text-primary"></i> New Post</a></li>
                  <li>
                    <a class="dropdown-item" href="{{ route('admin.home')}}"><i class="icon-mid bi bi-grid me-2"></i> Dashboard</a></li>
                  <li class="divider divider-left-center">
                    <div class="divider-text">
                      <i class="bi bi-gear-fill"></i>
                      <span>
                        Settings
                      </span>
                    </div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ route('admin.profile.edit',auth()->id())}}"><i class="icon-mid bi bi-person me-2"></i> Profile</a></li>
                  @if(Route::has('logout'))
                  <li><a class="dropdown-item" href="{{ route('logout')}}"
                    onclick="event.preventDefault();
                    document.querySelector('#logout-form').submit();
                    "><i
                      class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <!-- Logout Form -->
        <form action="{{ route('logout') }}" id="logout-form" method="post">
          @csrf
        </form>
      </header>
      <div id="main-content">

        @yield('content')

        @include('layouts.admin.footer')

      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="{{ asset('js/app.js')}}"></script>

  <!-- Extra Script -->
  <script src="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('admin/vendors/apexcharts/apexcharts.js')}}"></script>
  <script src="{{ asset('admin/js/pages/dashboard.js')}}"></script>
  <!-- Data Table -->
  <script src="{{ asset('admin/vendors/simple-datatables/simple-datatables.js')}}">
  </script>
  <script src="{{ asset('admin/vendors/toastify/toastify.js')}}">
  </script>


  <!--  Main Script -->
  <script src="{{ asset('admin/js/main.js')}}"></script>
  
  @stack('script')
</body>

</html>