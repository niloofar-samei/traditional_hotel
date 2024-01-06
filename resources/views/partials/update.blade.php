@if(Session::has('update'))

	<div class="alert alert-success" role="alert" style="width: 600px; margin: auto; margin-bottom: 20px; margin-top: 20px">

		{{ Session::get('update') }}

	</div>

@endif