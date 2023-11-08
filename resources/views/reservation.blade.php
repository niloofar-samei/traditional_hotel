<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('dist/css/bootstrap.min.css')}}">
	<title></title>

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

</head>
<body>

	<div class="container text-center" style="margin-top: 50px">
		<div style="margin: auto; width: 600px; background-image: linear-gradient(to right, #f46b45, #eea849); padding-top: 50px; padding-bottom: 20px; border-radius: 20px;">

			<h3>Please reserve your room!</h3>

			{!! Form::open(['route'=>'hotel.store', 'method'=>'post']) !!}

			<div class="form-group" style="padding: 10px;">
				{{ Form::text('firstname', null, ['placeholder'=>'First Name', 'style'=>'width: 315px; height: 47px; padding-left: 10px;']) }}
			</div>

			<div class="form-group" style="padding: 10px;">
				{{ Form::text('lastname', null, ['placeholder'=>'Last Name', 'style'=>'width: 315px; height: 47px; padding-left: 10px;']) }}
			</div>

			<div class="form-group" style="padding: 10px;">
				{{ Form::text('idcode', null, ['placeholder'=>'ID Code', 'style'=>'width: 315px; height: 47px; padding-left: 10px;']) }}
			</div>
			
			<div class="form-group" style="padding: 10px;">
				<label style="padding-left: 15px;">{!! Form::radio('room', 'Single bed', true, ['id'=>'1']) !!} Single bed</label>
				<label style="padding-left: 15px;">{!! Form::radio('room', 'Twin bed', true, ['id'=>'2']) !!} Twin bed</label>
				<label style="padding-left: 15px;">{!! Form::radio('room', 'Three beds', true, ['id'=>'3']) !!} Three beds</label>
			</div>

			<div class="form-group" style="padding: 10px">
				{!! Form::submit('Reserv My Room', ['class'=>'form-control btn btn-success btn-block', 'style'=>'width: 200px; height: 50px']) !!}
			</div>

			{!! Form::close() !!}
		</div>
	</div>


	<script src="{{asset('dist/js/jquery-3.7.1.min.js')}}"></script>
	<script src="{{asset('dist/js/popper.min.js')}}"></script>
	<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
</body>
</html>