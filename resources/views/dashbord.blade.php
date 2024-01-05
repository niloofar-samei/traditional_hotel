<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('dist/css/bootstrap.min.css')}}">
	<title></title>
	<script src="{{asset('dist/js/jquery-3.7.1.min.js')}}"></script>
	<script src="{{asset('dist/js/popper.min.js')}}"></script>
	<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>

	<style>
		.dropbtn {
				background-color: #4CAF50;
				color: white;
				padding: 16px;
				font-size: 16px;
				border: none;
				cursor: pointer;
			}
	</style>

</head>
<body>

	{{-- navbar --}}
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding-left: 30px">

		<a class="navbar-brand" href="{{url('/hotel')}}">TRADITONAL HOTEL</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav" style="padding-left: 50px;">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="{{url('/reservation')}}">RESERVATION</a>
				</li>
			</ul>
		</div>

	</nav>

	{{ $new_guest }}

	<div class="container text-center" style="margin-top: 50px">

		<table class="table table-hover table-dark">
			<tr>
				<td>update</td>
				<td>id</td>
				<td>name</td>
				<td>family</td>
				<td>nationality</td>
				<td>idcode</td>
				<td>mobile</td>
				<td>room number</td>
				<td>room type</td>
				<td>created at</td>
				<td>updated at</td>
			</tr>
			<tr>
				<td><a href="{{url('guest/'.$new_guest->id.'/edit')}}">update</a></td>
				<td>{{ $new_guest->id }}</td>
				<td>{{ $new_guest->first_name }}</td>
				<td>{{ $new_guest->last_name }}</td>
				<td>{{ $new_guest->nationality }}</td>
				<td>{{ $new_guest->id_code }}</td>
				<td>{{ $new_guest->mobile }}</td>
				<td>{{ $new_guest->room_number}}</td>
				<td>{{ $new_guest->room_type }}</td>
				<td>{{ $new_guest->created_at }}</td>
				<td>{{ $new_guest->updated_at }}</td>
			</tr>
		</table>

	</div> {{-- end of div container --}}

</body>
</html>