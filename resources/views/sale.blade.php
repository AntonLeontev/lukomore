@extends('layouts.app')

@section('title', 'Акции и спецпредложения')

@section('content')
    <main class="page page_sale">
        <section class="hero">
            <div class="hero__container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h1 class="hero__title title">
                            Акции <span>и&nbsp;специальные предложения</span>
                        </h1>
                        <button class="hero__btn button" type="button" data-goto=".feedback">Уточнить наличие мест</button>
                    </div>
                    <div class="hero__img hero-img _no-before">
                        <div class="hero-img__main">
                            <div class="hero-img__img -ibg--contain">
                                <img src="{{ Vite::asset('resources/img/pages/hero-img_sale.png') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sale-page section-padding">
            <div class="sale-page__container">
                <div class="sale-page__sale sale-block _no-bg">
                    <ul class="sale-block__items">
						@foreach (promotions() as $promo)
							<li>
								{{ $promo->title }}
							</li>
						@endforeach
                    </ul>
                    {{-- <div class="sale-block__actions">
                        <a href="" class="sale-block__btn button" data-goto=".feedback">Подробнее</a>
                    </div> --}}
                </div>
                <div class="tariffs__free">
                    <h2 class="tariffs__title title">
                        Бесплатный <br> пробный день
                    </h2>
                    <div class="tariffs__text">
                        Мы уверены в своем качестве&nbsp;и хотим, чтобы в нем были уверены и Вы, поэтому приглашаем Вас
                        вместе&nbsp;с ребенком на <span>бесплатный пробный день</span>
                    </div>
                    <div class="tariffs__action">
                        <button class="tariffs__btn button" type="button" data-goto=".feedback">Записаться</button>
                    </div>
                </div>
                <div class="one-day">
                    <h2 class="one-day__title title">Принимается оплату материнским капиталом</h2>
                    <div class="one-day__img -ibg">
                        <img src="{{ Vite::asset('resources/img/one-day-img_price.jpg') }}" alt="Image">
                    </div>
                    <a href="{{ route('mothers-cap') }}" class="one-day__btn button">Подробнее</a>
                </div>
                <div class="sale-page__adaptation">
                    <h2 class="sale-page__title title">
                        Мягкая адаптация
                    </h2>
                    <div class="group-cats__adaptation cats-adaptation">
                        <div class="cats-adaptation__img -ibg">
                            <img src="{{ Vite::asset('resources/img/adaptation-img.jpg') }}" alt="Image">
                        </div>
                        <div class="cats-adaptation__content text_xl text">
                            Первые дни <br><span class="title_h3 title">мама может находиться в&nbsp;«Лукоморье»</span> для
                            более комфортной адаптации ребенка.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
