<!DOCTYPE html>
<html>
<head>
	<title>Wersja edukacyjna</title>
	<meta charset="utf-8" />
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" />
</head>
<body>	
<header>
	<a href="/"><img id="logo" src="/images/logo.png" alt="alt" /></a>
	<nav>
		<ul>
			<li><a href="/videos">Filmy</a></li>
			<li><a href="/videos/create">Dodaj</a></li>
		</ul>
	</nav>
	<form>
		<input type="text" placeholder="Szukaj">
	</form>
</header>
<div class="container">
	@yield('content')
</div>
</body>
</html>