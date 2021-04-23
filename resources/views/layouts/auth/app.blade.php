<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Echo Of Myanmar</title>


  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/staticapp.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">

  <!-- Console For Developemnt -->
  <!--<script src="{{ asset('js/eruda.js')}}"></script>-->
  <!--<script>-->
  <!--  eruda.init();-->
  <!--</script>-->

</head>
<body>

  <!-- Navbar -->
  @include('layouts.user.navbar')

  <main class="mt-3">
    @yield('content')
  </main>


  <!-- Core Script -->
  <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>