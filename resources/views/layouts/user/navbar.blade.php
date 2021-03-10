<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold py-0" href="#">
      <img
      src="{{ asset('imgs/static/logo.jpg')}}"
      alt="logo"
      width="50px"
      height="50px"
      class="rounded-circle"
      />
      Echo Of <span class="text-light-danger">Myanmar</span>
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
      >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-0 ms-lg-4">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#whatwedo">What We Do</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#news">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <!-- Auth -->
        <div class="dropdown">
          <button class="btn btn-danger btn-language dropdown-toggle me-3" id="language" data-bs-toggle="dropdown" aria-expanded="false" type="submit">
            @guest
            Account
            @endguest
            @auth
            {{ auth()->user()->name }}
            @endauth
          </button>
          <ul class="dropdown-menu" aria-labelledby="language">
            @guest
            @if(Route::has('register'))
            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
            @endif
            @if(Route::has('register'))
            <li><a class="dropdown-item" href="{{ route('login')}}">Login</a></li>
            @endif
            @endguest
            
            @auth
            @if(Route::has('logout'))
            <li><a class="dropdown-item" href="{{ route('logout')}}" 
            onclick="event.preventDefault();
            document.querySelector('#logout-form').submit();
            "
            >Logout</a></li>
          @endif
          @endauth
          </ul>
        </div>
        <!-- Locale Language -->
        <div class="dropdown">
          <button class="btn btn-outline-danger btn-language dropdown-toggle" id="language" data-bs-toggle="dropdown" aria-expanded="false" type="submit">
            English
          </button>
          <ul class="dropdown-menu" aria-labelledby="language">
            <li><a class="dropdown-item" href="#">မြန်မာ</a></li>
            <li><a class="dropdown-item" href="#">English</a></li>

          </ul>
        </div>
      </form>
    </div>
  </div>
</nav>

<form action="{{ route('logout') }}" id="logout-form" method="post">
  @csrf
</form>