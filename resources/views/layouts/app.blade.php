<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- css  -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/4925793b17.js" crossorigin="rohitmaharjan"></script>

    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- bootstrap solder plugin  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>
<body>
    <div id="app">
            <nav>
        <div class="logo">
            <img src="{{ asset('image/vinylyard lg.png') }}" class="vlogo">
        </div>
        <ul class="navlink">
            <li><a href="#home">Home</a></li>
            <li><a href="#event">Events</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Contact Us</a></li>

            <li>|</li>
             <li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="nav-link" href="#accounts">Dashboard</a>
                                       <a class="nav-link " href="#accounts">Sign Up</a><br>
                                       <a class="nav-link " href="#accounts">Log In </a>
                                        @if(Auth::user())<div class="dropdown-divider"> </div>
                                        <a class="nav-link" href="#"><a class="b" href="{{ url('/logout') }}"> logout </a></a>@endif
                                    </div>
            </li>

            <li><a href="https://www.instagram.com/rohit.maharzan/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/mhrz.rohit" target="_blank"><i class="fab fa-facebook"></i></a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div> 
    </nav>
       

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>