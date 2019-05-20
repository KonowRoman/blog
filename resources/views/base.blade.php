<!doctype html>
<html lang="ru-luna1918">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    @include('partials.bootstrap')
    @stack('styles')
  </head>
  <body>
  	<div class="container-fluid">
  		<header class="row bg-success">
  			<h1>Блог разработчика</h1>
  		</header>
  		<div class="row bg-warning">
  			<nav class="col-xs-12 col-md-5 col-lg-3 bg-primary">Меню</nav>
  			<main class="col-xs-12 col-md-7 col-lg-9">@yield('content')</main>
  		</div>
  		<footer class="row bg-secondary">Караваев С.В., 2019</footer>
  	</div>
  </body>
</html>