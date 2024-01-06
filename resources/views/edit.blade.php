@extends('dashbord.master')

@section('content')

		@if($errors->any())

			<div class="alert alert-warning" role="alert" style="width: 600px; margin: auto; margin-bottom: 20px;">

				@foreach($errors->all() as $item)

					{{ $item }} <br>
			
				@endforeach

			</div>

		@endif

		<div style="margin: auto; width: 600px; background-image: linear-gradient(to right, #f46b45, #eea849); padding-top: 50px; padding-bottom: 20px; border-radius: 20px;">

			<h3 style="border: 1px solid black">Edit your information here:</h3>
			{{-- <p id="q" style="border: 1px solid black">More Guests?</p> --}}

			<div style="border: 1px solid green" id="single-form">
				{!! Form::Model($guest,['route'=>['guest.update',$guest->id], 'method'=>'PUT']) !!}

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

				<div class="form-group" style="padding: 10px">
					{!! Form::submit('Reserv My Room', ['class'=>'form-control btn btn-success btn-block', 'style'=>'width: 200px; height: 50px']) !!}
				</div>

				{!! Form::close() !!}
			</div> {{-- end of div single-form --}}

		</div>

@endsection