@extends('layouts.app')

@section('title', 'О нас')

@section('content')
    <main class="page page_about">
        <section class="hero">
            <div class="hero__container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h1 class="hero__title title">
                            <span>Частный детский сад</span>
                            «Лукоморье»
                        </h1>
                        <div class="hero__text">
                            Мягкое и бережное развитие Вашего ребенка
                        </div>
                        <ul class="hero__list">
                            <li>Имеем образовательную лицензию.</li>
                            <li>Всестороннее развитие вместе с нами.</li>
                            <li>Принимаем материнский капитал.</li>
                        </ul>
                        <button class="hero__btn button" type="button" data-popup data-form="Узнать наличие мест">Узнать наличие мест
                        </button>
                    </div>
                    <div class="hero__img hero-img">
                        <img class="hero-cat" src="{{ Vite::asset('resources/img/hero-cat.png') }}" alt="Image">
                        <div class="hero-img__main">
                            <div class="hero-img__img -ibg">
                                <img src="{{ Vite::asset('resources/img/pages/hero-img_about.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about section-padding">
            <div class="about__container">
                <div class="about__item">
                    <h2 class="about__title title">
                        Детский сад «ЛУКОМОРЬЕ»
                    </h2>
                    <div class="about__text text text_xl">
                        Это не только присмотр, безопасность и всестороннее развитие. Это комфортное, увлекательное
                        пространство для детей, с особым подходом к гармоничному развитию, с бережным и уважительным
                        отношением к детству! Мы следуем за интересами ребёнка.
                    </div>
                </div>
                <div class="about__item">
                    <h2 class="about__title title">
                        Наша главная цель
                    </h2>
                    <div class="about__text text text_xl">
                        Помогать детям расти счастливыми, самостоятельными и адаптированными к жизни. Открытыми к
                        знаниям и с правильной мотивацией к обучению. Понимающих себя и свои желания. Уважающих свои и
                        чужие личные границы.
                    </div>
                </div>
                <div class="about__item">
                    <h2 class="about__title title">
                        Для этого мы открыли Лукоморье!
                    </h2>
                    <button class="about__btn button" data-popup data-form="Записаться на экскурсию">
                        Записаться на экскурсию
                    </button>
                </div>
            </div>
        </section>

        @include('partials.classes')
        
		@include('partials.safe')
        
        @include('partials.support')

        @include('partials.gallary')

        <section class="video-gallery section-bottom">
            <div class="video-gallery__container">
                <h2 class="video-gallery__title title">Видеогалерея</h2>
                <div class="video-gallery__items">
                    <div class="video-block">
                        <div class="video-block__value">
                            <div class="video-block__inner">
                                <picture>
                                    <source srcset='https:\\img.youtube.com/vi_webp/IilmExnNBoc/maxresdefault.webp'
                                        type="image/webp">
                                    <img src="https:\\img.youtube.com/vi/IilmExnNBoc/maxresdefault.jpg" alt="Image">
                                </picture>
                                <button class="video-btn" type="button" data-video-id="IilmExnNBoc">
                                    <svg width="100%" height="100%" viewBox="0 0 70 75" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M64.1614 28.0483C65.9247 28.9965 67.3996 30.412 68.4281 32.1431C69.4566 33.8741 70 35.8556 70 37.875C70 39.8945 69.4566 41.876 68.4281 43.607C67.3996 45.3381 65.9247 46.7535 64.1614 47.7017L17.1264 73.5659C9.55275 77.735 0.25 72.3149 0.25 63.743V12.0108C0.25 3.4352 9.55275 -1.98118 17.1264 2.18041L64.1614 28.0483Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="video-block">
                        <div class="video-block__value">
                            <div class="video-block__inner">
                                <picture>
                                    <source srcset='https:\\img.youtube.com/vi_webp/UBS_njtSkeg/maxresdefault.webp'
                                        type="image/webp">
                                    <img src="https:\\img.youtube.com/vi/UBS_njtSkeg/maxresdefault.jpg" alt="Image">
                                </picture>
                                <button class="video-btn" type="button" data-video-id="UBS_njtSkeg">
                                    <svg width="100%" height="100%" viewBox="0 0 70 75" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M64.1614 28.0483C65.9247 28.9965 67.3996 30.412 68.4281 32.1431C69.4566 33.8741 70 35.8556 70 37.875C70 39.8945 69.4566 41.876 68.4281 43.607C67.3996 45.3381 65.9247 46.7535 64.1614 47.7017L17.1264 73.5659C9.55275 77.735 0.25 72.3149 0.25 63.743V12.0108C0.25 3.4352 9.55275 -1.98118 17.1264 2.18041L64.1614 28.0483Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        @include('partials.bottom-section')
		
        @include('partials.contacts')
    </main>
@endsection
