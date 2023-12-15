<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('dist/css/bootstrap.min.css')}}">
	<title></title>
	<script src="{{asset('dist/js/jquery-3.7.1.min.js')}}"></script>
	<script src="{{asset('dist/js/popper.min.js')}}"></script>
	<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>

	<style>
		.dropbtn {
			  background-color: #4CAF50;
			  color: white;
			  padding: 16px;
			  font-size: 16px;
			  border: none;
			  cursor: pointer;
			}
	</style>
<script>

{{--
$(document).ready(function() {
  $('#q').click(function() {
    $("#more-form").toggle(100);
  });
});
--}}
</script>

</head>
<body>

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


	<div class="container text-center" style="margin-top: 50px">

		@if($errors->any())

			<div class="alert alert-primary" role="alert" style="width: 600px; margin: auto">

				@foreach($errors->all() as $item)

					{{ $item }} <br>
			
				@endforeach

			</div>

		@endif

		<div style="margin: auto; width: 600px; background-image: linear-gradient(to right, #f46b45, #eea849); padding-top: 50px; padding-bottom: 20px; border-radius: 20px;">

			<h3 style="border: 1px solid black">Please reserve your room!</h3>
			{{-- <p id="q" style="border: 1px solid black">More Guests?</p> --}}

			<div style="border: 1px solid green" id="single-form">
				{!! Form::open(['route'=>'hotel.store', 'method'=>'POST']) !!}

				<div class="form-group" style="padding: 10px;">
					{{ Form::text('first_name', null, ['placeholder'=>'First Name', 'style'=>'width: 315px; height: 47px; padding-left: 10px;']) }}
				</div>

				<div class="form-group" style="padding: 10px;">
					{{ Form::text('last_name', null, ['placeholder'=>'Last Name', 'style'=>'width: 315px; height: 47px; padding-left: 10px;']) }}
				</div>

				<div class="form-group" style="padding: 10px;">
					{{ Form::text('nationality', null, ['placeholder'=>'Nationality', 'style'=>'width: 315px; height: 47px; padding-left: 10px;']) }}
				</div>

				<div class="form-group" style="padding: 10px;">
					{{ Form::text('id_code', null, ['placeholder'=>'ID Code', 'style'=>'width: 315px; height: 47px; padding-left: 10px;']) }}
				</div>

				<div class="form-group" style="padding: 10px;">
					{{ Form::text('mobile', null, ['placeholder'=>'Mobile Number', 'style'=>'width: 315px; height: 47px; padding-left: 10px;']) }}
				</div>

				<div class="form-group" style="padding: 10px;">
					{{ Form::text('room_number', null, ['placeholder'=>'Room Number', 'style'=>'width: 315px; height: 47px; padding-left: 10px;']) }}
				</div>
				
				<div class="form-group" style="padding: 10px;">
					<label style="padding-left: 15px;">{!! Form::radio('room_type', 'Single_bed', true, ['id'=>'1']) !!} Single bed</label>
					<label style="padding-left: 15px;">{!! Form::radio('room_type', 'Twin_bed', true, ['id'=>'2']) !!} Twin bed</label>
					<label style="padding-left: 15px;">{!! Form::radio('room_type', 'Three_beds', true, ['id'=>'3']) !!} Three beds</label>
				</div>

				<div class="form-group" style="padding: 10px">
					{!! Form::submit('Reserv My Room', ['class'=>'form-control btn btn-success btn-block', 'style'=>'width: 200px; height: 50px']) !!}
				</div>

				{!! Form::close() !!}
			</div> {{-- end of div single-form --}}

		</div>
	</div>

</body>
</html>