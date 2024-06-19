@extends('layouts.app')

@section('title', 'Условия приема детей в частный детский садик «Лукоморье»')
@section('description', 'Прием детей в частный сад «Лукоморье» с 2 до 6 лет в Центральном районе Санкт-Петербурга. Узнайте о наличии свободных мест в группе по телефону +7 (929) 109-08-08!')

@section('content')
    <main class="page page_conditions">
        <section class="hero">
            <div class="hero__container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h1 class="hero__title title">
                            Условия приема
                        </h1>
                        <button class="hero__btn button" type="button" data-popup data-form="Уточнить наличие мест">Уточнить наличие мест
                        </button>
                    </div>
                    <div class="hero__img hero-img">
                        <img class="hero-cat" src="{{ Vite::asset('resources/img/hero-cat_conditions.png') }}" alt="Image">
                        <div class="hero-img__main">
                            <div class="hero-img__img -ibg">
                                <img src="{{ Vite::asset('resources/img/pages/hero-img_cats.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="conditions-page section-padding">
            <div class="conditions-page__container">
                <div class="conditions-page__item">
                    <h2 class="conditions-page__title title">
                        Прием ребенка производится при наличии мест в&nbsp;соответствующей возрастной группе. <br>Мы –
                        клубный
                        детский сад,<br>и число наших воспитанников не превышает 25.
                    </h2>
                </div>
                <div class="conditions-page__item">
                    <h2 class="conditions-page__title title">
                        Потребуются следующие документы
                    </h2>
                    <ol start="1">
                        <li>
                            Документ, удостоверяющий личность родителя (законного представителя)
                        </li>
                        <li>
                            Письменное заявление о приеме ребенка в детский сад
                        </li>
                        <li>
                            Справка о состоянии здоровья ребенка
                        </li>
                        <li>
                            Оригинал или копия прививочного сертификата при наличии
                        </li>
                        <li>
                            Оригинал или копия свидетельства о рождении ребенка
                        </li>
                    </ol>
                    <div class="conditions-page__action">
                        <button class="conditions-page__btn button" type="button" data-popup data-form="Оставить заявку">Оставить
                            заявку</button>
                    </div>
                </div>

                <div class="conditions-page__item">
                    <div class="tariffs__free">
                        <h2 class="tariffs__title title">
                            Бесплатный <br> пробный день
                        </h2>
                        <div class="tariffs__text">
                            Мы уверены в своем качестве&nbsp;и хотим, чтобы в нем были уверены и Вы, поэтому приглашаем
                            Вас
                            вместе&nbsp;с ребенком на <span>бесплатный пробный день</span>
                        </div>
                        <div class="tariffs__action">
                            <button class="tariffs__btn button" type="button" data-popup data-form="Записаться на бесплатный пробный день">Записаться</button>
                        </div>
                    </div>
                </div>

                <div class="conditions-page__item">
                    <h2 class="conditions-page__title title">
                        Мягкая адаптация
                    </h2>
                    <div class="conditions-page__adaptation cats-adaptation">
                        <div class="cats-adaptation__img -ibg">
                            <img src="{{ Vite::asset('resources/img/adaptation-img.jpg') }}" alt="Image">
                        </div>
                        <div class="cats-adaptation__content text_xl text">
                            Первые дни <br><span class="title_h3 title">мама может находиться в&nbsp;«Лукоморье»</span>
                            для более комфортной адаптации ребенка.
                        </div>
                    </div>
                </div>


            </div>
        </section>

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
