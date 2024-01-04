@extends('master')

@section('content')

	<div style="border: 1px solid black; margin: auto; width: 500px; margin-top: 200px">

		<i>Available rooms:</i>
		
		<div class="row">
		
			@foreach($available_rooms as $room)

				@if($room->id == 11 || $room->id == 21)
					<div class="w-100"></div>
				@endif
		
				<div class="col" style="width: 25px; height: 35px; background: {{$room->status == 1 ? 'green' : 'red'}};  border: 1px solid red; text-align: center; margin: 5px; padding-top: 2px">
				
					{{ $room->room_number }}
				
				</div>
		
			@endforeach
		
		</div>

	</div>
	
@endsection