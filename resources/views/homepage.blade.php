<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        slider
    </title>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100;300;400&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>

    <!-- slick carousel -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <!-- CSS -->
        <link href="/css/home.css" rel="stylesheet">


    <!-- JS -->
        <script src="{{ asset('js/hp.js')}}"></script>

    <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/17005ae465.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script> -->

    <!-- BOOTSTRAP -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- ADDIITONANL SCRIPTS -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>
<body id="body">
        <!-- START PARALLAX -->
        <div class="parallax">
            <!-- FIRST PAGE PARALLAX (HEADER) -->
            <!-- NAVIGATION -->
            <div id="navcontainer" class="container-fluids">
                <nav class="navbar navbar-expand-lg navbar-inverse sticky-top navbar-trans">
                <a class="navbar-brand" href="#">
                    <img id="pup-logo" src="{{ asset('image/svg/pup.svg') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i id="hamburger" class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse navbar-right" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i>Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}"><i class="fas fa-question-circle"></i>About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-friends"></i>Organization
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">CSC</a>
                                <a class="dropdown-item" href="#">PUPUKAW</a>
                                <a class="dropdown-item" href="#">CS</a>
                                <a class="dropdown-item" href="#">MENTORS</a>
                                <a class="dropdown-item" href="#">AECES</a>
                            </div>
                        </li>


                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/') }}" class="nav-link" style="float: right;"><i class="fas fa-house-user"></i>Home</a>
                            @else
                                <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>Login</a>
                                <!-- <a href="{{ route('login') }}" class="nav-link">Log in</a> -->
                        </li>
                    <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-check"></i>Register</a>
                                    <!-- <a href="{{ route('register') }}" class="nav-link" style="float: right;">Register</a> -->
                                @endif
                            @endauth
                        @endif


                        <li class="nav-item">
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                </div>
            </nav>
            </div>
            <!-- END NAVIGATION -->
            <hr id="heading-divider">
<div class="container">
  <h2>Our  Partners</h2>
   <section class="logo-slider slider">
      <div><img class="item" src="{{ asset('image/svg/csc.svg') }}"></div>
      <div><img class="item" src="{{ asset('image/svg/cs.svg') }}"></div>
      <div><img class="item" src="{{ asset('image/svg/aeces.svg') }}"></div>
      <div><img class="item" src="{{ asset('image/svg/chronicler.svg') }}"></div>
      <div><img class="item" src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
      <div><img class="item" src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
      <div><img class="item" src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
      <div><img class="item" src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
   </section>
</div>
<br>

</body>
</html>