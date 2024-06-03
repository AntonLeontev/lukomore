@extends('layouts.app')

@section('title', 'Статья')

@section('content')
    <main class="page">
        <section class="template section-bottom">
            <div class="template__container">
                <div class="template__item">
                    <h1 class="title">Один день в садике</h1>
                    <div class="template__img -ibg">
                        <img src="{{ Vite::asset('resources/img/blog/02-big.jpg') }}" alt="Image">
                    </div>
                    <div class="text-block text text_l">
                        <p>Детский садик — это маленькая страна, в которой каждый день состоит из новых познаний,
                            приятных
                            эмоций, интересных событий и приключений.</p>
                        <p>Все начинается утром, во время приема детей. Воспитатели не просто здороваются, а стараются
                            обнять каждого ребенка, подержать за ручку. Одного возили к бабушке, другого в парк
                            аттракционов, третьему купили новую игрушку. В течение дня рассказы обрастают новыми
                            подробностями. Ребята делятся впечатлениями, доверяют нам свои переживания.</p>
                    </div>
                </div>
                <div class="template__item">
                    <h2 class="title">Утренние занятия</h2>
                    <div class="text-block">
                        <div class="text text_l">
                            После завтрака наступает время для «мозгового штурма» и познавательных игр. В детском садике
                            «Лукоморье» предусмотрены программы, развивающие:
                        </div>
                        <ul class="text text_l">
                            <li>логику — «Математическая игралочка»;</li>
                            <li>коммуникативные навыки — «Кулинарный мастер-класс», «Азбука общения»;</li>
                            <li>творческие способности и познавательную деятельность — «Конструирование Lego»,
                                «Рисование, аппликация, лепка», «Экспериментирование»;
                            </li>
                            <li>речь, воображение — «Энциклопедия в сказках», «Грамотейка».</li>
                        </ul>
                    </div>

                </div>
                <div class="template__item">
                    <h2 class="title">Вторая половина дня</h2>
                    <div class="template__block">
                        <div data-showmore class="text text_l">
                            Послеобеденный тихий час начинается с интересного рассказа воспитателя или чтения сказки.
                            Дневной сон полезен для растущего организма, но некоторым детям бывает сложно уснуть в
                            садике, поэтому мы не настаиваем. Можно просто полежать, отдохнуть, послушать волшебную
                            историю.
                            <div data-showmore-content="0" class="template__content text_l text">
                                Послеобеденный тихий час начинается с интересного рассказа воспитателя или чтения
                                сказки. Дневной сон полезен для растущего организма, но некоторым детям бывает сложно
                                уснуть в садике, поэтому мы не настаиваем. Можно просто полежать, отдохнуть, послушать
                                волшебную историю.
                            </div>
                            <button hidden data-showmore-button type="button">
                                <span>Читать дальше</span><span>Свернуть</span>
                            </button>
                        </div>
                        <div class="template__statistic statistic-template">
                            <div class="statistic-template__item">
                                <img src="{{ Vite::asset('resources/img/icons/pen.svg') }}" alt="Image">
                                Свиридова Е.
                            </div>
                            <div class="statistic-template__item">
                                <img src="{{ Vite::asset('resources/img/icons/calendar.svg') }}" alt="Image">
                                21.03.2021
                            </div>
                            <div class="statistic-template__item">
                                <img src="{{ Vite::asset('resources/img/icons/eye.svg') }}" alt="Image">
                                777
                            </div>
                        </div>
                    </div>
                </div>
                <div class="template__item">
                    <h2 class="title">Статьи, которые могут вас заинтересовать</h2>
                    <div class="template__body swiper">
                        <div class="template__wrapper swiper-wrapper">
                            <div class="template__slide swiper-slide">
                                <div class="blog-content">
                                    <a class="stretched-link" href=""></a>
                                    <div class="blog-content__img -ibg">
                                        <img src="{{ Vite::asset('resources/img/blog/01.jpg') }}" alt="Image">
                                    </div>
                                    <div class="blog-content__body">
                                        <h3 class="blog-content__title title title_h3">2Один день в садике</h3>
                                        <div class="blog-content__text text text_l">
                                            Детский садик — это маленькая страна, в которой каждый день состоит из новых
                                            познаний, приятных эмоций Детский садик — это маленькая страна, в которой каждый
                                            день состоит из новых познаний, приятных эмоций...
                                        </div>
                                    </div>
                                    <div class="blog-content__footer footer-blog">
                                        <div class="footer-blog__item">
                                            <img src="{{ Vite::asset('resources/img/icons/pen.svg') }}" alt="Image">
                                            СвиридоваCD Е.
                                        </div>
                                        <div class="footer-blog__item">
                                            <img src="{{ Vite::asset('resources/img/icons/calendar.svg') }}" alt="Image">
                                            21.03.2021
                                        </div>
                                        <div class="footer-blog__item">
                                            <img src="{{ Vite::asset('resources/img/icons/eye.svg') }}" alt="Image">
                                            1000
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="template__slide swiper-slide">
                                <div class="blog-content">
                                    <a class="stretched-link" href=""></a>
                                    <div class="blog-content__img -ibg">
                                        <img src="{{ Vite::asset('resources/img/blog/01.jpg') }}" alt="Image">
                                    </div>
                                    <div class="blog-content__body">
                                        <h3 class="blog-content__title title title_h3">2Один день в садике</h3>
                                        <div class="blog-content__text text text_l">
                                            Детский садик — это маленькая страна, в которой каждый день состоит из новых
                                            познаний, приятных эмоций Детский садик — это маленькая страна, в которой каждый
                                            день состоит из новых познаний, приятных эмоций...
                                        </div>
                                    </div>
                                    <div class="blog-content__footer footer-blog">
                                        <div class="footer-blog__item">
                                            <img src="{{ Vite::asset('resources/img/icons/pen.svg') }}" alt="Image">
                                            СвиридоваCD Е.
                                        </div>
                                        <div class="footer-blog__item">
                                            <img src="{{ Vite::asset('resources/img/icons/calendar.svg') }}" alt="Image">
                                            21.03.2021
                                        </div>
                                        <div class="footer-blog__item">
                                            <img src="{{ Vite::asset('resources/img/icons/eye.svg') }}" alt="Image">
                                            1000
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="template__slide swiper-slide">
                                <div class="blog-content">
                                    <a class="stretched-link" href=""></a>
                                    <div class="blog-content__img -ibg">
                                        <img src="{{ Vite::asset('resources/img/blog/01.jpg') }}" alt="Image">
                                    </div>
                                    <div class="blog-content__body">
                                        <h3 class="blog-content__title title title_h3">2Один день в садике</h3>
                                        <div class="blog-content__text text text_l">
                                            Детский садик — это маленькая страна, в которой каждый день состоит из новых
                                            познаний, приятных эмоций Детский садик — это маленькая страна, в которой каждый
                                            день состоит из новых познаний, приятных эмоций...
                                        </div>
                                    </div>
                                    <div class="blog-content__footer footer-blog">
                                        <div class="footer-blog__item">
                                            <img src="{{ Vite::asset('resources/img/icons/pen.svg') }}" alt="Image">
                                            СвиридоваCD Е.
                                        </div>
                                        <div class="footer-blog__item">
                                            <img src="{{ Vite::asset('resources/img/icons/calendar.svg') }}" alt="Image">
                                            21.03.2021
                                        </div>
                                        <div class="footer-blog__item">
                                            <img src="{{ Vite::asset('resources/img/icons/eye.svg') }}" alt="Image">
                                            1000
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="template__slide swiper-slide">
                                <div class="blog-content">
                                    <a class="stretched-link" href=""></a>
                                    <div class="blog-content__img -ibg">
                                        <img src="{{ Vite::asset('resources/img/blog/01.jpg') }}" alt="Image">
                                    </div>
                                    <div class="blog-content__body">
                                        <h3 class="blog-content__title title title_h3">2Один день в садике</h3>
                                        <div class="blog-content__text text text_l">
                                            Детский садик — это маленькая страна, в которой каждый день состоит из новых
                                            познаний, приятных эмоций Детский садик — это маленькая страна, в которой каждый
                                            день состоит из новых познаний, приятных эмоций...
                                        </div>
                                    </div>
                                    <div class="blog-content__footer footer-blog">
                                        <div class="footer-blog__item">
                                            <img src="{{ Vite::asset('resources/img/icons/pen.svg') }}" alt="Image">
                                            СвиридоваCD Е.
                                        </div>
                                        <div class="footer-blog__item">
                                            <img src="{{ Vite::asset('resources/img/icons/calendar.svg') }}" alt="Image">
                                            21.03.2021
                                        </div>
                                        <div class="footer-blog__item">
                                            <img src="{{ Vite::asset('resources/img/icons/eye.svg') }}" alt="Image">
                                            1000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-controls">
                            <button type="button" class="swiper-button swiper-button-prev">
                                <img src="{{ Vite::asset('resources/img/icons/ar-slider.svg') }}" alt="Image">
                            </button>
                            <button type="button" class="swiper-button swiper-button-next">
                                <img src="{{ Vite::asset('resources/img/icons/ar-slider.svg') }}" alt="Image">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
