<!DOCTYPE html>
<html>
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
        <link href="/css/about.css" rel="stylesheet">

        <!-- JS -->
        <script src="{{ asset('js/home.js')}}"></script>
        <script src="https://kit.fontawesome.com/17005ae465.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<title>
		hello
	</title>
</head>
<body id="body">
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
	            </li>
	        <li class="nav-item">
	                    @if (Route::has('register'))
	                        <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-check"></i>Register</a>
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

	<div id="center" class="container-fluid" >
		<div class="row">
			<div id="jumbo-column" class="col-sm-1"></div>
			<div id="jumbo-column" class="col-sm-10">
				<div id="jumbotron" class="jumbotron">
				 	<h1 class="display-4">Hello, world!</h1>
				 	<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
				 	<hr class="my-4">
				 	<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
				 	<p class="lead">
				 	  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
				 	</p>
				</div>
			</div>
			<div id="jumbo-column" class="col-sm-1"></div>
		</div>
	</div>







</body>
</html>