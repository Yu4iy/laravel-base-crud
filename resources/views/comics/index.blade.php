@extends('layouts.main')

@section('content')
<div class="container">
	<a class="btn btn-success m-2" href="{{route('comics.create')}}" role="button"><i class="fas fa-plus"></i> ADD</a>

	<table class="table">
		<thead>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">Name</th>
			<th scope="col">Control</th>
		</tr>
		</thead>
		<tbody>
		@foreach ($comics as $comic)	
		<tr>
			<th>{{ $comic['id'] }}</th>
			<td>{{ $comic['title'] }}</td>
			<td class="d-flex justify-content-center">
				<a class="btn btn-primary m-2"  href="{{route('comics.show',$comic['id'])}}" role="button"><i class="fas fa-eye"></i></a>
				<a class="btn btn-secondary m-2"  href="{{route('comics.edit',$comic['id'])}}" role="button"><i class="fas fa-edit"></i></a>
				<form method="POST" action="{{ route('comics.destroy',$comic) }}">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger m-2"><i class="fas fa-trash-alt"></i></button>

				</form>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
</div>

</div>

@endsection