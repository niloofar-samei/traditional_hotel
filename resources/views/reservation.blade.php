@extends('master')

@section('content')

	<a href="{{url('/dashbord')}}">your dashbord</a>

	@if($errors->any())

		<div class="alert alert-warning" role="alert" style="width: 600px; margin: auto; margin-bottom: 20px;">

			@foreach($errors->all() as $item)

				{{ $item }} <br>
		
			@endforeach

		</div>

	@endif


	@if(Session::has('status'))

		<div class="alert alert-success" role="alert" style="width: 600px; margin: auto; margin-bottom: 20px;">

			{{ Session::get('status') }}
		</div>

	@endif

	<i>Available rooms:</i>
	@foreach($available_rooms as $room)
		<b>{{ $room->room_number }}, </b>
	@endforeach


	{{-- reservation form --}}
	<div style="margin: auto; width: 600px; background-image: linear-gradient(to right, #f46b45, #eea849); padding-top: 50px; padding-bottom: 20px; border-radius: 20px;">

		<h3 style="border: 1px solid black">Please reserve your room!</h3>
		{{-- <p id="q" style="border: 1px solid black">More Guests?</p> --}}

		<div style="border: 1px solid green" id="single-form">
			{!! Form::open(['route'=>'guest.store', 'method'=>'POST']) !!}

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
		</div>

	</div>

@endsection