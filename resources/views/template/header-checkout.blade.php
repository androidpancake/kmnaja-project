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
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-white fixed-top navbar-scrolled">
        <ul class="nav container navbar-nav justify-content-between">
            <li class="nav-item">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}" aria-current="page">KMNAJA.ID</a>
            <li class="nav-item text-white">
            <div class="row flex-row align-items-center">
              @auth
                <div class="col">
                <div class="fs-6 fw-light text-black">Holla, </div>
                <div class="fs-6 fw-semibold text-black">{{ Auth::user()->name }}</div>
                </div>
                <div class="col">
                <div class="fs-6 fw-light">
                    <img src="{{ url('assets/image/bali.png')}}" class="rounded-circle" style="width: 48px;" alt="">
                </div>
                </div>
                @endauth
                @guest
                <div class="col">
                <button class="btn btn-primary" type="button">Login</button>
                </div>
                <div class="col">
                <button class="btn btn-outline-primary" type="button">Sign Up</button>
                </div>
                @endguest
            </div>
            </li>
        </ul>
    </nav>
    <!-- end navbar -->

    <!-- content -->
    @yield('content')
    <!-- end content -->

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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