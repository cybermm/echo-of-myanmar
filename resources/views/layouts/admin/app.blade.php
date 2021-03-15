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
                        <img src="assets/images/faces/1.jpg">
                      </div>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                  <li>
                    <h6 class="dropdown-header">
                     Mingalarpar! {{ auth()->user()->name}}

                    </h6>
                  </li>
                  <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                    Profile</a></li>
                  <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                    Settings</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
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


  <!-- Core Script -->
  <script src="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('js/app.js')}}"></script>
  <script src="{{ asset('admin/vendors/apexcharts/apexcharts.js')}}"></script>
  <script src="{{ asset('admin/js/pages/dashboard.js')}}"></script>

  <!--  Main Script -->
  <script src="{{ asset('admin/js/main.js')}}"></script>

  @stack('script')
</body>

</html>