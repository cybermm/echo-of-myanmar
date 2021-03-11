<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Mazer Admin Dashboard</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">

  <link rel="stylesheet" href="{{ asset('admin/vendors/iconly/bold.css')}}">

  <link rel="stylesheet" href="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/css/app.css')}}">
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.svg')}}" type="image/x-icon">
</head>
<body>
  <div id="app">
    @include('layouts.admin.sidebar')
    <div id="main">
      @yield('content')
      <footer>
        <div class="footer clearfix mb-0 text-muted">
          <div class="float-start">
            <p>
              2021 &copy; Echo Of Myanmar
            </p>
          </div>
          <div class="float-end">
            <p>
              Developed by
              ❤️
              with <a
                href="https://www.facebook.com/aungmyatmoe834">Aung Myat Moe</a>
            </p>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- Core Script -->
  <script src="{{ asset('admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('js/app.js')}}"></script>
  <script src="{{ asset('admin/vendors/apexcharts/apexcharts.js')}}"></script>
  <script src="{{ asset('admin/js/pages/dashboard.js')}}"></script>


  <!--  Main Script -->
  <script src="{{ asset('admin/js/main.js')}}"></script>
</body>

</html>