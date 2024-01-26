<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Traditional Hotel</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


	<!--
	<script>
		jQuery(document).ready(function() {
			var foo = jQuery('#foo');
  
			function updateTime() {
				var now =  new Date();
				foo.val(now.toUTCString());    
			}
  
			updateTime();
			setInterval(updateTime, 1000);
		});
	</script>
	-->

</head>
<body style="background-image: url({{asset('dist/img/index.jpg')}}); background-size: 100% auto;">

	{{-- navbar --}}
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding-left: 30px">

		<a class="navbar-brand" href="{{url('/hotel')}}">TRADITONAL HOTEL</a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="navbar-nav">
				<li class="nav-item">
					<!-- <a class="nav-link" href="{{url('/reservation')}}">RESERVATION</a> -->
				</li>
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ms-auto">

				<!-- Authentication Links -->
				@guest
					@if (Route::has('login'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
					@endif

					@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li>
					@endif
				@else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
				@endguest

			</ul>

		</div>

<!-- 								{!! Form::open(['route'=>'logout', 'method'=>'POST']) !!}
									{!! Form::submit('logout') !!}
								{!! Form::close() !!}
 -->
		<!--
		<div>
			<input id="foo" name="foo" type="text" value="" size="25" style="border: none; background-color: transparent; color: black">
		</div>
		-->

	</nav>

	{{-- container --}}
	<div class="container text-center" style="margin-top: 50px">
	
		@yield('content')

	</div>

</body>
</html>