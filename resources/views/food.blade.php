@extends('layouts.app')

@section('title', 'Питание')

@section('content')
    <main class="page page_food">
        <section class="hero">
            <div class="hero__container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h1 class="hero__title title _no-span">
                            Питание
                        </h1>
                        <ul class="hero__list" data-da=".food-about__container, 479.98,first">
                            <li>Сбалансированное 4-х разовое питание: завтрак, обед, полдник, ужин.</li>
                            <li>Только свежие мясо, фрукты и овощи.</li>
                            <li>Каждый день мы сами готовим супчики, котлетки, запеканки и даже выпечку.</li>
                        </ul>
                        <button class="hero__btn button" type="button" data-popup data-form="Уточнить наличие мест">Уточнить наличие мест
                        </button>
                    </div>
                    <div class="hero__img hero-img _no-before">
                        <div class="hero-img__main">
                            <div class="dec">
                                <img class="dec__01" src="{{ Vite::asset('resources/img/dec/apple-02.svg') }}" alt="Image">
                                <img class="dec__02" src="{{ Vite::asset('resources/img/dec/apple-01.svg') }}" alt="Image">
                                <img class="dec__03" src="{{ Vite::asset('resources/img/dec/apple-01.svg') }}" alt="Image">
                            </div>
                            <div class="hero-img__img -ibg--contain">
                                <img src="{{ Vite::asset('resources/img/pages/hero-img_food.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="food-about section-padding">
            <div class="food-about__container">
                <div class="food-about__text text text_xl">
                    <p>
                        <span class="title title_h3">Правильное питание</span> – залог гармоничного здоровья и энергии.
                    </p>
                    <p>
                        <span class="title title_h3">Кроме обычного сбалансированного меню</span>,
                        мы
                        предлагаем полноценное альтернативное меню для детей с
                        аллергией, а также учитываем индивидуальные особенности предпочтения блюд.
                    </p>
                    <p>
                        Блюда готовятся <span class="title title_h3">по сезону года</span>, давая максимум пользы нашим
                        деткам.
                    </p>
                </div>
                <h2 class="food-about__title title">Пример детского меню на&nbsp;1&nbsp;день</h2>
                <div class="food-about__items">
                    <div class="item-food">
                        <div class="item-food__title title title_h3">
                            Завтрак
                        </div>
                        <ul>
                            <li>Овсяная каша</li>
                            <li>Бутерброд с сыром и маслом</li>
                            <li>Фруктовый чай</li>
                        </ul>
                    </div>
                    <div class="item-food">
                        <div class="item-food__title title title_h3">
                            Обед
                        </div>
                        <ul>
                            <li>Суп с нежными куриными фрикадельками</li>
                            <li>Рубленые котлеты из индейки с рисом + овощной салат</li>
                            <li>Компот из сухофруктов</li>
                        </ul>
                    </div>
                    <div class="item-food">
                        <div class="item-food__title title title_h3">
                            Полдник
                        </div>
                        <ul>
                            <li>Яблоко или другой сезонный фрукт</li>
                            <li>Кекс творожный</li>
                            <li>Напиток кисломолочный</li>
                        </ul>
                    </div>
                    <div class="item-food">
                        <div class="item-food__title title title_h3">
                            Ужин
                        </div>
                        <ul>
                            <li>Кнели куриные с картофельным пюре </li>
                            <li>Свежие овощи</li>
                            <li>Ягодный морс</li>
                        </ul>
                    </div>
                </div>
                <div class="food-about__accent text text_xl">
                    <span class="title_h3 title">На протяжении дня</span> дети пьют чистую бутилированную воду
                </div>
                <div class="food-about__action">
                    <button class="food-about__btn button" type="button" data-popup data-form="Уточнить наличие мест">Уточнить наличие мест
                    </button>
                </div>
            </div>
        </section>

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
