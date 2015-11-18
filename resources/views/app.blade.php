<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tasks List</title>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Syncopate:700,400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,500italic' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid" id="border">
			<div class="navbar-header">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
	
					<a class="navbar-brand" href="{{ url('home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
					@if(Auth::guest())
						<a class="navbar-brand" href="{{ url('/auth/login') }}"><span class="glyphicon glyphicon-log-in"></span> Sign in</a>
					@else
						<a class="navbar-brand" href="{{ action('TasksController@index') }}"><span class="glyphicon glyphicon-th-list"></span> Tasks</a>
					@endif
					@if (Auth::guest())
						<a class="navbar-brand" href="{{ url('/auth/register') }}"><span class="glyphicon glyphicon-user"></span> Register</a>
					@else 
						<a class="navbar-brand" href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Sign out</a>
					@endif
			</div>
		</div>
	</nav>

	<div class="container">
		@yield('content')
	</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
