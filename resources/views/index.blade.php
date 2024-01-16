@extends('master')

@section('content')

	<div class="row" style="border: 1px solid black; margin: auto; width: 700px; margin-top: 150px; background-color: rgba(255, 255, 255, 0.8); padding: 20px; box-shadow: 0px 0px 30px 5px black;">

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

			@if($room->id == 1 | $room->id == 6 || $room->id == 11)

				<i class="row" style="font-size: 18px; padding-top: 5px; padding-bottom: 5px">

					<?php
						$a = explode('_', $room->room_type);
						echo "$a[0] $a[1]";
					?>
				
				</i>

			@endif
			
			<div class="col" style="width: 10px; height: 40px; border: 1px solid black; background: {{$room->status == 1 ? '#99ff99' : 'repeating-linear-gradient(-55deg, #222, #222 5px, #333 5px, #333 10px)'}};">

				@if($room->status == 0)

					<a href="{{url('/reservation/'.$room->id)}}" style="text-decoration: none; color: black">

						<b>{{ $room->id }}</b>
				
					</a>

				@elseif($room->status == 1)

					<b style="color:black">{{ $room->id}}</b>

				@endif

			</div>

		@endforeach

	</div>
	
@endsection

