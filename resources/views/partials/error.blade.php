@if($errors->any())

	<div class="alert alert-warning" role="alert" style="width: 600px; margin: auto; margin-bottom: 20px;">

		@foreach($errors->all() as $item)

			{{ $item }} <br>
	
		@endforeach

	</div>

@endif