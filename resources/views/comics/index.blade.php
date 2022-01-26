@extends('layouts.main')

@section('content')

	
<section class="comics">
	<div class="container">
		<ul class="comics__items-list">
			@foreach ($comics as $comic)

				<li  class=" comics__item">

						
						<div class="comics__poster">
							<img src="{{ $comic['thumb'] }}" alt="">  
							<span>Read more</span>
						</div>
						<h2 class="comics__title">{{ $comic['title'] }}</h2>
				</li>
			@endforeach

		</ul>
		<a class="comics__btn" href="">Load More</a>
	</div>
</section>
@endsection