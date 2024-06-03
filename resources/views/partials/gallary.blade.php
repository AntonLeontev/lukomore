<section class="gallery section-bottom">
    <div class="gallery__container">
        <h2 class="gallery__title title">Фотогалерея</h2>
        <div class="gallery__body swiper">
            <div class="gallery__wrapper swiper-wrapper" data-gallery>
                <a class="gallery__slide swiper-slide gallery-slide -ibg" href="{{ Vite::asset('resources/img/slider/gallery/01.jpg') }}">
                    <img src="{{ Vite::asset('resources/img/slider/gallery/01.jpg') }}" alt="Image">
                </a>
                <a class="gallery__slide swiper-slide gallery-slide -ibg" href="{{ Vite::asset('resources/img/slider/gallery/02.jpg') }}">
                    <img src="{{ Vite::asset('resources/img/slider/gallery/02.jpg') }}" alt="Image">
                </a>
                <a class="gallery__slide swiper-slide gallery-slide -ibg" href="{{ Vite::asset('resources/img/slider/gallery/03.jpg') }}">
                    <img src="{{ Vite::asset('resources/img/slider/gallery/03.jpg') }}" alt="Image">
                </a>
                <a class="gallery__slide swiper-slide gallery-slide -ibg" href="{{ Vite::asset('resources/img/slider/gallery/04.jpg') }}">
                    <img src="{{ Vite::asset('resources/img/slider/gallery/04.jpg') }}" alt="Image">
                </a>
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
