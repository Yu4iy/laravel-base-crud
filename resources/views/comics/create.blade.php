@extends('layouts.main')

@section('content')
<section class="d-flex justify-content-center">
	<div class="col-6 m-4">
		<form action="{{ route('comics.store') }}" method="POST">
			@csrf


			<div class="mb-3">
				<label for="title" class="form-label">Title</label>
				<input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
			</div>

			<div class="mb-3">
				<label for="description" class="form-label">Dscription</label>
				<textarea type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp"></textarea>
			</div>

			<div class="mb-3">
				<label for="thumb" class="form-label">Thumb</label>
				<input type="text" class="form-control" id="thumb" name="thumb" aria-describedby="emailHelp">
			</div>
			
			<div class="mb-3">
				<label for="price" class="form-label">Price</label>
				<input type="number" class="form-control" id="price" name="price" aria-describedby="emailHelp">
			</div>


			<div class="mb-3">
				<label for="series" class="form-label">Series</label>
				<input type="text" class="form-control" id="series" name="series" aria-describedby="emailHelp">
			</div>


			<div class="mb-3">
				<label for="sale_date" class="form-label">Date</label>
				<input type="text" class="form-control" id="sale_date" name="sale_date" aria-describedby="emailHelp">
			</div>

			<div class="mb-3">
				<label for="type" class="form-label">Type</label>
				<input type="text" class="form-control" id="type" name="type" aria-describedby="emailHelp">
			</div>

			<button class="btn btn-primary col-2" type="submit">CREATE</button>
		</form>
	</div>
</section>
@endsection