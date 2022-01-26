@extends('layouts.main')

@section('content')
<section class="comics-page">
	<div class="comics-page__banner ">
		<div class="page-container">
			<div class="comics-page__poster">
				<img src="{{$comic->thumb}}" alt="">
				<span>comic book</span>
				<a href="">View Gallery</a>
			</div>
		</div>
	</div>
	<div class="page-info page-container">
		<div class="page-info__items">
			<h1 class="page-info__title"></h1>
			<div class="info-bar page-info__bar">
				<div class="info-bar__price">
					<div>
						<span>U.S. Price: </span>{{$comic->price}}$
					</div>
					
					<span>Available</span>
				</div>

				<div class="info-bar__modal">
					Chek Availability <i class="fas fa-caret-down"></i>
				</div>

			</div>
			<p class="page-info__text">{{$comic->description}}</p>	
		</div>
		

		<div class="page-info__prom">
			<img src="{{ asset('images/adv.jpg ') }}" alt="">
			<span>Advertisment</span>
		</div>
	</div>
</section>
@endsection