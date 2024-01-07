<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('dist/css/bootstrap.min.css')}}">
	<title>Traditional Hotel</title>

	<script src="{{asset('dist/js/jquery-3.7.1.min.js')}}"></script>
	<script src="{{asset('dist/js/popper.min.js')}}"></script>
	<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>

</head>
<body style="background-image: url({{asset('dist/img/index.jpg')}}); background-size: 100% auto;">

	{{-- navbar --}}
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding-left: 30px">

	  <a class="navbar-brand" href="{{url('/hotel')}}">TRADITONAL HOTEL</a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarNav" style="padding-left: 50px;">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="{{url('/reservation')}}">RESERVATION</a>
	      </li>
	    </ul>
	  </div>

	</nav>

	{{-- container --}}
	<div class="container text-center" style="margin-top: 50px">
	
		@yield('content')

	</div>

</body>
</html>