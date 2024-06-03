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
                        <button class="hero__btn button" type="button" data-goto=".feedback">Уточнить наличие мест
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

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
