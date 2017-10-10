<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>@yield('title','Home') | Blog Ramon</title>
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('css/general.css')}}">
</head>
<body>
  <header>
    @include('front.template.partials.header')
  </header>
  <div class="container">
    @yield('content')
  </div>
	<script src="{{ asset('plugins/jquery/js/jquery-3.2.1.js')}}"></script>
</body>
</html>
