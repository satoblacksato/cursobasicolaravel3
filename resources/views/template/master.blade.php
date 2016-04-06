<!DOCTYPE html>
<html>
<head>
	<title>@yield('masterTitle','Default')| Taller</title>
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</head>
<body>
		
		<header>
			<h1>@yield('masterHeader','Cabecera')</h1>
		</header>
		<center>
			@yield('masterContent','Contenido')
		</center>
		<footer>
			<h1>@yield('masterFooter','Pie de PAgina')</h1>
		</footer>
</body>
</html>