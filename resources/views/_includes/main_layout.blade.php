<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar" style="background:#690B59;color:#fff">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{asset('img/logo-dashboard.png')}}" alt="#" width="120" height="60">
          </a>
          <div class="box-logout">
            <p>Olá, seja bem-vindo {{Auth::user()->name}}</p>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();" style="text-decoration:none;color:#fff;">
                    <span>Sair <i class="bi bi-box-arrow-right "></i></span>
            </a>
            </form>
        </div>
        </div>
      </nav>

    @yield('content')

    <footer>
        <p>E-cultura © All Rights Reserved. 2022</p>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
