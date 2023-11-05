@extends('master')

@section('content')
	{{--
	<div style="background-color: white; opacity: 0.5; border: 1px solid yellow; width: 800px; height: 500px; margin: auto; margin-top: 100px;"></div>
	--}}

	<div style="border: 1px solid black; margin: auto; width: auto; margin-top: 200px">
		{!! Form::open(['route' => 'hotel.store', 'method' => 'post']) !!}

			{{ Form::text('search', null, ['placeholder'=>'Search for room availability', 'style'=>'width: 315px; height: 47px; padding-left: 10px; ']) }}

			{!! Form::select('room', ['single bed'=>'Single bed',
										'twin bed'=>'Twin bed',
										'three beds'=>'Three beds']) !!}

			{!! Form::submit('Go') !!}

		{!! Form::close() !!}
	</div>


@endsection