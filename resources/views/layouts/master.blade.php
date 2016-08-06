<!doctype html>
<html>
	
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/main.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/bootstrap.css') }}">
		@yield('styles')
	</head>

	<body>

		@include('includes.header')
		<div class="main container">
			@yield('content')
		</div>
	</body>

</html>