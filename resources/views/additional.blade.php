@extends('layouts.app')

@section('title', 'Дополнительные занятия')

@section('content')
    <main class="page page_dop">
        <section class="hero">
            <div class="hero__container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h1 class="hero__title title _no-span">
                            Дополнительные занятия
                        </h1>
                        <button class="hero__btn button" type="button" data-goto=".feedback">Уточнить наличие мест
                        </button>
                    </div>
                    <div class="hero__img hero-img _no-before">
                        <div class="hero-img__main">
                            <div class="dec">
                                <img class="dec__01" src="{{ Vite::asset('resources/img/dec/stars-broken.svg') }}" alt="Image">
                                <img class="dec__02" src="{{ Vite::asset('resources/img/dec/stars-broken.svg') }}" alt="Image">
                                <img class="dec__03" src="{{ Vite::asset('resources/img/dec/stars-broken.svg') }}" alt="Image">
                            </div>
                            <div class="hero-img__img -ibg--contain">
                                <img src="{{ Vite::asset('resources/img/pages/hero-img_dop.png') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dop-classes section-padding">
            <div class="dop-classes__container">
                <div class="dop-classes__items">
					@foreach (additional_classes() as $class)
						<div class="dop-classes-item">
							<div class="dop-classes-item__img -ibg">
								<img src="{{ $class->image_url }}" alt="{{ $class->title }}">
							</div>
							<div class="dop-classes-item__body">
								<h3 class="dop-classes-item__title title">
									{{ $class->title }}
								</h3>
								<div data-showmore class="dop-classes-text">
									<div class="text_l text">
										{{ $class->preview_text }}
									</div>
									<div data-showmore-content="0" class="dop-classes-text__content text_l text">
										{{ $class->text }}
									</div>
									<button hidden data-showmore-button type="button"
										class="dop-classes-text__more"><span>Развернуть</span><span>Свернуть</span>
									</button>
								</div>
							</div>
						</div>
					@endforeach
                </div>
            </div>
        </section>

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
