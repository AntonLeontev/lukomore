@extends('layouts.app')

@section('title', 'Вопросы и ответы')

@section('content')
    <main class="page page_faq">
        <section class="hero">
            <div class="hero__container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h1 class="hero__title title">
                            Вопросы и&nbsp;ответы
                        </h1>
                        <button class="hero__btn button" type="button" data-popup data-form="Уточнить наличие мест">Уточнить наличие мест
                        </button>
                    </div>
                    <div class="hero__img hero-img _no-before">
                        <div class="hero-img__main">
                            <div class="hero-img__img -ibg--contain">
                                <img src="{{ Vite::asset('resources/img/pages/hero-img_faq.png') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<section class="section-bottom">
			<div class="support__container">
				<div data-spollers class="support__spollers spollers">
					@foreach (questions() as $question)
						<details class="spollers__item">
							<summary class="spollers__title">{{ $question->question }}</summary>
							<div class="spollers__body">{{ $question->answer }}</div>
						</details>
					@endforeach
                </div>
			</div>
		</section>

        @include('partials.support')

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
