@extends('layouts.app')

@section('content')
<main class="page page_cats">
	<section class="hero">
            <div class="hero__container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h1 class="hero__title title _no-span">
                            Страница не найдена
                        </h1>
                        <a class="hero__btn button" href="{{ route('home') }}">Перейти на главную страницу</a>
                    </div>
                    <div class="hero__img hero-img _no-before">
                        <div class="hero-img__main">
                            <div class="hero-img__img -ibg--contain">
                                <img src="{{ Vite::asset('resources/img/pages/hero-img_price.png') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>
@endsection
