@extends('master')

@section('content')
	
	<div style="background-color: white; opacity: 0.5; border: 1px solid yellow; width: 800px; height: 500px; margin: auto; margin-top: 100px;">
		
		{!! Form::open(['route' => 'hotel.store', 'method' => 'post']) !!}

			{{ Form::text('search', null, ['placeholder'=>'Search for room availability']) }}

		{!! Form::close() !!}

	</div>

@endsection