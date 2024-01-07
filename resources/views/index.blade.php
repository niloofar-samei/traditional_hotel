@extends('master')

@section('content')

	<div class="row" style="border: 1px solid black; margin: auto; width: 700px; margin-top: 200px; background: white; padding: 20px;">		
		
		@foreach($all_rooms as $room)

			@if($room->id == 1 | $room->id == 11 || $room->id == 21)

				<i class="row" style="border: 1px solid green">{{ $room->room_type}}</i>

			@endif
			
				<div class="col" style="width: 10px; height: 40px; border: 1px solid black; background: {{$room->status == 1 ? '#99ff99' : '#ff704d'}};">
			
					<b>{{ $room->room_number }}</b>
			
				</div>

		@endforeach

	</div>
	
@endsection