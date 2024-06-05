@if(gallary()->isNotEmpty()) 
	<section class="gallery section-bottom">
		<div class="gallery__container">
			<h2 class="gallery__title title">Фотогалерея</h2>
			<div class="gallery__body swiper">
				<div class="gallery__wrapper swiper-wrapper" data-gallery>
					@foreach (gallary() as $photo)
						<a class="gallery__slide swiper-slide gallery-slide -ibg" href="{{ $photo->url }}">
							<img src="{{ $photo->url }}" alt="{{ $photo->title ?? 'Фотография' }}">
						</a>
					@endforeach
				</div>
				<div class="swiper-pagination"></div>
				<div class="swiper-controls">
					<button type="button" class="gallery-btn swiper-button swiper-button-prev">
						<img src="{{ Vite::asset('resources/img/icons/ar-slider.svg') }}" alt="Image">
					</button>
					<button type="button" class="gallery-btn swiper-button swiper-button-next">
						<img src="{{ Vite::asset('resources/img/icons/ar-slider.svg') }}" alt="Image">
					</button>
				</div>
			</div>
		</div>
	</section>
@endif
