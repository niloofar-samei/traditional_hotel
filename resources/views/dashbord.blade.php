@extends('dashbord.master')

@section('content')

	@include('partials.update')

	{{-- guest information table --}}
	<table class="table table-hover table-dark">
		<tr>
			<td>delete</td>
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
			<td>
				{!! Form::open(['route'=>['guest.destroy', $new_guest->id], 'method'=>'delete']) !!}

					{!! Form::submit('delete') !!}

				{!! Form::close() !!}
			</td>
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

@endsection