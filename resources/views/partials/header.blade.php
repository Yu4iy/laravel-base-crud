<header class="header">
	<div class="header__container container">
		<img class="header__logo" src=" {{ asset('images/dc-logo.png') }} " alt="">

		<ul>
			<li>
				<a   href="{{ route('home') }}">
				{{-- @if (Request::route()->getName() === 'comics') class= "active" @endif  --}}
				{{-- > --}}
					COMICS
				</a>
			</li>
			<li>
				<a href="{{ route('comics.index') }}">
					SHOP
				</a>
			</li>

		</ul>

	</div>
</header>