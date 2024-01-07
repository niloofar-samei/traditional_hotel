@extends('master')

@section('content')

	<div class="row" style="border: 1px solid black; margin: auto; width: 700px; margin-top: 200px; background-color: rgba(255, 255, 255, 0.8); padding: 20px;">

		<h4>Traditional hotel's current status of rooms availability:</h4>

		<div style="text-align: left; margin-bottom: 30px">

			<ul>
				<li style="color:#99ff99; list-style-type: square; font-size:20px;">
					<i style="color: black; font-size:1em;">Available</i>
				</li>
				<li style="color:#ff704d; list-style-type: square; font-size:20px">
					<i style="color: black">Occupied</i>
				</li>
			</ul>

		</div>
		
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

