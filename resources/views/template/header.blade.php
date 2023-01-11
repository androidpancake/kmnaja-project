<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{ url('node_modules/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('node_modules/bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ url('css/styles/custom.css')}}">
    <link rel="stylesheet" href="{{ url('css/styles/main.css')}}">
    <link rel="stylesheet" href="{{ url('css/styles/detail.css')}}">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">  
  </head>
  <body>
    <header>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-white fixed-top navbar-scrolled">
        <ul class="nav container navbar-nav justify-content-between">
            <li class="nav-item">
              <a class="navbar-brand fw-bold" href="/" aria-current="page">KMNAJA.ID</a>
            </li>
            <li class="nav-item d-flex align-items-center gap-5">
              <a class="nav-link" href="#">Home</a>
              <a class="nav-link" href="#">Atraksi</a>
              <a class="nav-link" href="#">Inspirasi</a>
              <a class="nav-link" href="#">Kuliner</a>
              <a class="nav-link" href="#">Aktivitas</a>
            </li>
            <li class="nav-item text-white">
              <div class="row flex-row align-items-center g-2">
                @Auth
                <!-- authenticated -->
                <div class="col">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            @if(Auth::user()->roles == 'ADMIN')
                            <li><a class="dropdown-item" href="/admin">Admin page</a></li>
                            @endif
                            <form action="{{ url('logout') }}" method="POST">
                                @csrf
                                <li><button class="dropdown-item" type="submit" href="/logout">Logout</button></li>
                            </form>
                        </ul>
                    </div>
                </div>
                <div class="col">
                  <div class="fs-6 fw-light">
                    <img src="{{ url('assets/image/bali.png')}}" class="rounded-circle" style="width: 48px;" alt="">
                  </div>
                </div>
                @Endauth
                @guest
                <div class="col">
                  <a href="/login" class="btn btn-primary" type="button">Login</a>
                </div>
                <div class="col">
                  <a href="/register" class="btn btn-outline-primary" type="button">Sign Up</a>
                </div>
                @endguest
              </div>
              
            </li>
        </ul>
    </nav>
    <!-- end navbar -->
    </header>
    <!-- content -->
    @yield('content')
    <!-- end content -->

    <script src="{{ url('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script>
      const navE1 = document.querySelector('.navbar');

      window.addEventListener('scroll', () => {
        if (window.scrollY >= 56) {
          navE1.classList.add('.navbar-scrolled');
          navE1.classList.remove('.bg-transparent');
        } else if (window.scrollY < 56) {
          navE1.classList.remove('.navbar-scrolled');
        }
      });
    </script>
  </body>
</html>