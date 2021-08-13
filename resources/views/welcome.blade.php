<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>SOIS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100;300;400&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>

        <!-- CSS -->
        <link href="/css/welcome.css" rel="stylesheet">

        <!-- JS -->
        <script src="{{ asset('js/home.js')}}"></script>
        <script src="https://kit.fontawesome.com/17005ae465.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body id="body">
        <!-- START PARALLAX -->
        <div class="parallax">
            <!-- FIRST PAGE PARALLAX (HEADER) -->
            <!-- NAVIGATION -->
            <nav class="navbar navbar-expand-lg navbar-inverse sticky-top navbar-trans">
                <a class="navbar-brand" href="#">
                    <img id="pup-logo" src="{{ asset('image/svg/pup.svg') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-right" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i>Home <span class="sr-only">(current)</span></a>
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
            <!-- END NAVIGATION -->
            <hr id="heading-divider">
            <!-- HEADER BODY -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4">
                        <p id="sys-title">STUDENT</p>
                        <p id="sys-title">ORGANIZATION</p>
                        <p id="sys-title">INFORMATION</p>
                        <p id="sys-title">SYSTEM</p>
                    </div>
                    <div class="col-sm-1"></div>
                    <!-- CAROUSEL -->
                    <div class="col-sm-3">
                        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img id="carousel-image"class="d-block w-100" src="{{ asset('image/svg/csc.svg') }}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img id="carousel-image" class="d-block w-100" src="{{ asset('image/svg/cs.svg') }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img id="carousel-image" class="d-block w-100" src="{{ asset('image/svg/aeces.svg') }}" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img id="carousel-image" class="d-block w-100" src="{{ asset('image/svg/chronicler.svg') }}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- END CAROUSEL -->
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <!-- END HEADER -->
            </div>
            <!-- END PARALLAX FIRST PAGE -->
            <!-- PARALLAX SSECOND PAGE -->
            <!-- PARALLAX SECOND PAGE HEADER -->
            <div class="event-header">
                <h1 id="titles">EVENTS</h1>
                <hr>
            </div>
            <!-- END PARALLAX SECOND PAGE HEADER -->
            <!-- PRALLAX SECOND PAGE BODY -->
            <div class="bg2">
                <div class="container-fluid d-flex">
                    <div class="row justify-content-center">
                        <!-- CARD START -->
                        <div id="card-whole" class="card card-custom mx-2 mb-3">
                            
                                <img id="card-img" src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/256/Netflix.png" alt="" class="card-img">
                            
                            <div id="card-body" class="card-body">
                                <h5 id="card-title" class="card-title">Event Title</h5>
                                <hr>
                                <p id="card-text" class="card-text text-wrap"><strong>Event Description: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <hr>
                                <!-- BUTTON MODAL -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                Read More
                                </button>
                                <!-- MODAL -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Event Title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid d-flex">
                                                    <div class="row"  style="position: center;">
                                                        <div id="image-container">  
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/csc.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="pl-3">Event Description</p>
                                                <p class="pl-3">Event Date</p>
                                                <p class="pl-3">Event Organization</p>
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CARD FOOTER -->
                            <div id="card-footer" class="card-footer">
                                <small id="card-footer-text" class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <!-- CARD ENDING -->
                        <!-- CARD START -->
                        <div id="card-whole" class="card card-custom mx-2 mb-3">
                            
                                <img id="card-img" src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/256/Netflix.png" alt="" class="card-img">
                            
                            <div id="card-body" class="card-body">
                                <h5 id="card-title" class="card-title">Event Title</h5>
                                <hr>
                                <p id="card-text" class="card-text text-wrap"><strong>Event Description: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <hr>
                                <!-- BUTTON MODAL -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                Read More
                                </button>
                                <!-- MODAL -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Event Title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid d-flex">
                                                    <div class="row"  style="position: center;">
                                                        <div id="image-container">  
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/csc.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="pl-3">Event Description</p>
                                                <p class="pl-3">Event Date</p>
                                                <p class="pl-3">Event Organization</p>
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CARD FOOTER -->
                            <div id="card-footer" class="card-footer">
                                <small id="card-footer-text" class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <!-- CARD ENDING -->
                        <!-- CARD START -->
                        <div id="card-whole" class="card card-custom mx-2 mb-3">
                            
                                <img id="card-img" src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/256/Netflix.png" alt="" class="card-img">
                            
                            <div id="card-body" class="card-body">
                                <h5 id="card-title" class="card-title">Event Title</h5>
                                <hr>
                                <p id="card-text" class="card-text text-wrap"><strong>Event Description: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <hr>
                                <!-- BUTTON MODAL -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                Read More
                                </button>
                                <!-- MODAL -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Event Title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid d-flex">
                                                    <div class="row"  style="position: center;">
                                                        <div id="image-container">  
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/csc.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="pl-3">Event Description</p>
                                                <p class="pl-3">Event Date</p>
                                                <p class="pl-3">Event Organization</p>
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CARD FOOTER -->
                            <div id="card-footer" class="card-footer">
                                <small id="card-footer-text" class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <!-- CARD ENDING -->
                        <!-- CARD START -->
                        <div id="card-whole" class="card card-custom mx-2 mb-3">
                            
                                <img id="card-img" src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/256/Netflix.png" alt="" class="card-img">
                            
                            <div id="card-body" class="card-body">
                                <h5 id="card-title" class="card-title">Event Title</h5>
                                <hr>
                                <p id="card-text" class="card-text text-wrap"><strong>Event Description: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <hr>
                                <!-- BUTTON MODAL -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                Read More
                                </button>
                                <!-- MODAL -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Event Title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid d-flex">
                                                    <div class="row"  style="position: center;">
                                                        <div id="image-container">  
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/csc.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="pl-3">Event Description</p>
                                                <p class="pl-3">Event Date</p>
                                                <p class="pl-3">Event Organization</p>
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CARD FOOTER -->
                            <div id="card-footer" class="card-footer">
                                <small id="card-footer-text" class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <!-- CARD ENDING -->
                        <!-- CARD START -->
                        <div id="card-whole" class="card card-custom mx-2 mb-3">
                            
                                <img id="card-img" src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/256/Netflix.png" alt="" class="card-img">
                            
                            <div id="card-body" class="card-body">
                                <h5 id="card-title" class="card-title">Event Title</h5>
                                <hr>
                                <p id="card-text" class="card-text text-wrap"><strong>Event Description: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <hr>
                                <!-- BUTTON MODAL -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                Read More
                                </button>
                                <!-- MODAL -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Event Title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid d-flex">
                                                    <div class="row"  style="position: center;">
                                                        <div id="image-container">  
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/csc.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="pl-3">Event Description</p>
                                                <p class="pl-3">Event Date</p>
                                                <p class="pl-3">Event Organization</p>
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CARD FOOTER -->
                            <div id="card-footer" class="card-footer">
                                <small id="card-footer-text" class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <!-- CARD ENDING -->
                        <!-- CARD START -->
                        <div id="card-whole" class="card card-custom mx-2 mb-3">
                            
                                <img id="card-img" src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/256/Netflix.png" alt="" class="card-img">
                            
                            <div id="card-body" class="card-body">
                                <h5 id="card-title" class="card-title">Event Title</h5>
                                <hr>
                                <p id="card-text" class="card-text text-wrap"><strong>Event Description: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <hr>
                                <!-- BUTTON MODAL -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                Read More
                                </button>
                                <!-- MODAL -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Event Title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid d-flex">
                                                    <div class="row"  style="position: center;">
                                                        <div id="image-container">  
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/csc.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="pl-3">Event Description</p>
                                                <p class="pl-3">Event Date</p>
                                                <p class="pl-3">Event Organization</p>
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CARD FOOTER -->
                            <div id="card-footer" class="card-footer">
                                <small id="card-footer-text" class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <!-- CARD ENDING -->    
                        <!-- CARD START -->
                        <div id="card-whole" class="card card-custom mx-2 mb-3">
                            
                                <img id="card-img" src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/256/Netflix.png" alt="" class="card-img">
                            
                            <div id="card-body" class="card-body">
                                <h5 id="card-title" class="card-title">Event Title</h5>
                                <hr>
                                <p id="card-text" class="card-text text-wrap"><strong>Event Description: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <hr>
                                <!-- BUTTON MODAL -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                Read More
                                </button>
                                <!-- MODAL -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Event Title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid d-flex">
                                                    <div class="row"  style="position: center;">
                                                        <div id="image-container">  
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/csc.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="pl-3">Event Description</p>
                                                <p class="pl-3">Event Date</p>
                                                <p class="pl-3">Event Organization</p>
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CARD FOOTER -->
                            <div id="card-footer" class="card-footer">
                                <small id="card-footer-text" class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <!-- CARD ENDING -->
                        <!-- CARD START -->
                        <div id="card-whole" class="card card-custom mx-2 mb-3">
                            
                                <img id="card-img" src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/256/Netflix.png" alt="" class="card-img">
                            
                            <div id="card-body" class="card-body">
                                <h5 id="card-title" class="card-title">Event Title</h5>
                                <hr>
                                <p id="card-text" class="card-text text-wrap"><strong>Event Description: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <hr>
                                <!-- BUTTON MODAL -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                Read More
                                </button>
                                <!-- MODAL -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Event Title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid d-flex">
                                                    <div class="row"  style="position: center;">
                                                        <div id="image-container">  
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/csc.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                            <button class="imgLink">
                                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="pl-3">Event Description</p>
                                                <p class="pl-3">Event Date</p>
                                                <p class="pl-3">Event Organization</p>
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CARD FOOTER -->
                            <div id="card-footer" class="card-footer">
                                <small id="card-footer-text" class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <!-- CARD ENDING -->
                    </div>
                </div>
            </div>

            <!-- END PARALLAX SECOND PAGE -->
            <!-- PARALLAX THIRD PAGE -->
            <!-- PARALLAX THIRD PAGE HEADER -->

            <hr id="bulletin-divider">
            <div class="bulletin-header">
                <h1 id="titles">BULLETIN BOARD</h1>
            </div>
            <!-- END PARALLAX THIRD PAGE HEADER -->
            <!-- PRALLAX THIRD PAGE BODY -->
            <div class="bg3">
                <!-- START JUMBOTRON -->
                <!-- JUMBOTRON CONTRAINER -->
                <hr>
                <div id="jumbotron-container" class="container-fluid">
                    <!-- JUMBOTRON BODY -->
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container-fluid">
                            <div class="row">
                                <hr>
                                <div class="col-sm-4">
                                    <!-- BUTTON MODAL -->
                                    <button id="news-thumbnail" data-toggle="modal" data-target="#exampleModalLong">
                                        <img id="bulletin-image" src="{{asset('image/carousel2.jpg')}}" style="max-width: 100%;" alt="News Thumbnail">
                                    </button>
                                    <!-- MODAL BODY -->
                                    <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">News Header Title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid d-flex">
                                                        <div class="row"  style="position: center;">
                                                            <div id="image-container">  
                                                                <button class="imgLink">
                                                                    <img id="modal-image" src="{{ asset('image/svg/csc.svg') }}">
                                                                </button>
                                                                <button class="imgLink">
                                                                    <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                                </button>
                                                                <button class="imgLink">
                                                                    <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                                </button>
                                                                <button class="imgLink">
                                                                    <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                                </button>
                                                                <button class="imgLink">
                                                                    <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <!-- MODAL FOOTER -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL -->
                                </div>
                                <div class="col-sm-6">
                                    <p id="news-header"><strong>News Header Title</strong></p>
                                    <hr>
                                    <p id="news-body">News - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <hr>
                                    <p id="news-footer">Last Updated 5 hours ago</p>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END JUMBOTRON -->
                <!-- START JUMBOTRON -->
                <!-- JUMBOTRON CONTRAINER -->
                <hr>
                <div id="jumbotron-container" class="container-fluid">
                    <!-- JUMBOTRON BODY -->
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container-fluid">
                            <div class="row">
                                <hr>
                                <div class="col-sm-4">
                                    <!-- BUTTON MODAL -->
                                    <button id="news-thumbnail" data-toggle="modal" data-target="#exampleModalLong">
                                        <img id="bulletin-image" src="{{asset('image/carousel2.jpg')}}" style="max-width: 100%;" alt="News Thumbnail">
                                    </button>
                                    <!-- MODAL BODY -->
                                    <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">News Header Title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid d-flex">
                                                        <div class="row"  style="position: center;">
                                                            <div id="image-container">  
                                                                <button class="imgLink">
                                                                    <img id="modal-image" src="{{ asset('image/svg/csc.svg') }}">
                                                                </button>
                                                                <button class="imgLink">
                                                                    <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                                </button>
                                                                <button class="imgLink">
                                                                    <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                                </button>
                                                                <button class="imgLink">
                                                                    <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                                </button>
                                                                <button class="imgLink">
                                                                    <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <!-- MODAL FOOTER -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL -->
                                </div>
                                <div class="col-sm-6">
                                    <p id="news-header"><strong>News Header Title</strong></p>
                                    <hr>
                                    <p id="news-body">News - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <hr>
                                    <p id="news-footer">Last Updated 5 hours ago</p>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END JUMBOTRON -->
            </div>

    </body>
</html>

