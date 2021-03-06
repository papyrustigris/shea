<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
	html, body {
		height: 100%;
	}
	body {
		background: url( {{ asset('/images/home-bg.jpg') }}) top left no-repeat fixed;
	}
	nav.navbar.navbar-default {
		margin-bottom: 0px;
		background-color: rgba(0,0,0,0);
		border:none;
	}
	h1,h2,h3,h4,h5,h6,p,a,label {
		color:white !important;
	}
	.container {
		background-color: rgba(0,0,0,0.8);
	}
	#content-wrapper {
		position:static;
		top:50px;
		bottom:0;
		overflow-y:scroll;
	}
	footer {
		padding:40px 0px;
		background:rgba(0,0,0,1);
	}

	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container" style="background-color:rgba(0,0,0,1);border-bottom:2px solid white;">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/home">Live @ Shea Stadium BK</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/shows">Shows</a></li>
					<li><a href="/bands/archive">Bands</a></li>
					<li><a href="/contact">Contact</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/studio">Studio</a></li>
					<li><a href="/merch">Merch</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
					<form class="navbar-form pull-left visible-lg" role="search">
				        <div class="form-group">
				        <label>Mailing List&nbsp;
				          <input type="text" class="form-control" placeholder="Email Address">
				        </label>
				        </div>
			          	<button type="submit" class="btn btn-default">Subscribe</button>
			        </form>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<div class="container" style="border-top: 2px solid white;background:rgba(0,0,0,1);">
		<footer>
			<div class="row">
				<div class="col-md-4">
					<p>Live @ Shea Stadium BK<br>
					20 Meadow St.<br>
					Brooklyn, NY, 11206<br>                  
					<a>Map It</a>
					</p>
					<p>
					Shea Stadium BK is a recording studio/space dedicated to documenting live performances. <br>
					Check out our tracks, recorded live and uploaded to soundcloud</p>
				</div>
				<div class="col-md-4">
					<div class="page-header" style="margin-top:0;">
						<p>Tweets</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row text-center">
						<div class="col-md-6">
							<h6><a href="">Home</a></h6>
							<h6><a href="">Dates</a></h6>
							<h6><a href="">Bands</a></h6>
							<h6><a href="">Contact</a></h6>
							<h6><a href="">About</a></h6>
						</div>
						<div class="col-md-6">
							<h6><a href="">Shea Du Jour</a></h6>
							<h6><a href="">Guest Lists</a></h6>
							<h6><a href="">Facebook</a></h6>
							<h6><a href="">Twitter</a></h6>
							<h6><a href="">Tumblr</a></h6>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
