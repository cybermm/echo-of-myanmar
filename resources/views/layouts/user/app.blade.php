<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Echo Of Myanmar</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/staticapp.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">

  <!-- Console For Developemnt -->
  <script src="{{ asset('js/eruda.js')}}"></script>
  <script>
    eruda.init();
  </script>

</head>
<body>

  <!-- Navbar -->
  @include('layouts.user.navbar')

  <main class="mt-3">
    @yield('content')
  </main>

  <!--Footer -->
  <footer>
    <div class="container">
      <div class="d-flex justify-content-between align-items-center py-4">
        <div class="d-flex align-items-center">
          <img
          src="{{ asset('imgs/static/logo.jpg')}}"
          alt="logo"
          width="50px"
          height="50px"
          class="rounded-circle"
          />
          <h5 class="text-white mb-0 ms-2">Echo Of <span class="text-light-danger">Myanmar</span></h5>
        </div>
        <p class="text-white mb-0">
          Powered by ❤️ with MCY
        </p>
      </div>
    </div>
  </footer>

  <!-- Core Script -->
  <script src="{{ asset('js/app.js')}}"></script>
  @stack('script')
</body>
</html>