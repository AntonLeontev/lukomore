@extends('layouts.app')

@section('title', 'Материнский капитал')

@section('content')
    <main class="page page_mat">
        <section class="hero">
            <div class="hero__container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h1 class="hero__title title">
                            Материнский <br> капитал
                        </h1>
                        <button class="hero__btn button" type="button" data-popup data-form="">Уточнить наличие мест
                        </button>
                    </div>
                    <div class="hero__img hero-img">
                        <img class="hero-cat" src="{{ Vite::asset('resources/img/hero-cat_mat.png') }}" alt="Image">
                        <div class="hero-img__main">
                            <div class="hero-img__img -ibg">
                                <img src="{{ Vite::asset('resources/img/one-day-img_price.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<section class="feedback section-bottom" style="padding-bottom: 0">
			<div class="feedback__container">
				<div class="feedback__capital mat-capital section-padding">
					<div class="mat-capital__title text text_xl">
						Подписан закон об использовании <span class="title title_h3">средств материнского капитала</span> на оплату образования детей. При
						этом средства можно использовать на <span class="title title_h3">любого ребенка </span> в семье.
					</div>
					<ul>
						<li>Услуги нашего детского сада можно оплатить средствами материнского капитала;</li>
						<li>Материнский капитал можно направить на оплату содержания ребенка в детском саду любого из
							детей. Даже если сертификат был получен на младшего ребенка, а в детский сад идет его
							старший брат и сестра;
						</li>
						<li>Сертификат на материнский капитал можно использовать сразу после получения, не дожидаясь
							трехлетия ребенка;
						</li>
						<li>Необходимо подать заявление о распоряжении материнским капиталом в управление Пенсионного
							фонда или в многофункциональный центр «Мои документы»;
						</li>
						<li>Одновременно с заявлением нужно представить паспорт, заключенный с нами договор по уходу и
							присмотру за ребенком.
						</li>
					</ul>
				</div>
			</div>
		</section>

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
