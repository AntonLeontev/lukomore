@extends('layouts.app')

@section('title', 'Цены на частный детский сад в Санкт-Петербурге, сколько стоит платный детский садик «Лукоморье» в месяц')
@section('description', 'Стоимость частного детского сада «Лукоморье» в Санкт-Петербурге. Цены на полный и неполный день, дополнительные развивающие занятия в месяц. Звоните +7 (929) 109-08-08!')

@section('content')
    <main class="page page_price">
        <section class="hero">
            <div class="hero__container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h1 class="hero__title title">
                            Стоимость пребывания в частном саду «Лукоморье» в {{ date('Y') }}
                        </h1>
                        <button class="hero__btn button" type="button" data-popup data-form="Уточнить наличие мест">Уточнить наличие мест</button>
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

        <section class="tariffs section-bottom">
            <div class="tariffs__container">
                <h2 class="tariffs__title title">
                    Абонемент
                </h2>
                <div class="tariffs__body swiper">
                    <div class="tariffs__wrapper swiper-wrapper">
                        <div class="tariffs__slide swiper-slide">
                            <div class="tariff tariff_01">
                                <div class="tariff__header">
                                    <div class="tariff__title">{{ price('full_day')->title }}</div>
                                    <div class="tariff__price">
                                        {{ price('full_day')->amount }} <small>₽/мес</small>
                                    </div>
                                </div>
                                <div class="tariff__body body-tariffs">
                                    <div class="body-tariffs__header">
                                        <img src="{{ Vite::asset('resources/img/icons/time.svg') }}" alt="Image">
                                        <div class="time-tariff">
                                            <div class="time-tariff__label">
                                                Пн-Пт:
                                            </div>
                                            <div class="time-tariff__value">
                                                8:00 - 19:00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body-tariffs__content">
                                        <div class="body-tariffs__title">Входит в стоимость</div>
                                        <ul>
                                            <li>4х разовое питание</li>
                                            <li>2 прогулки</li>
                                            <li>дневной отдых</li>
                                            <li>игровая деятельность</li>
                                            <li>интегрированные и комплексные занятия в группе по возрасту ребёнка</li>
                                            <li>дополнительные занятия</li>
                                        </ul>
                                    </div>
                                    <div class="body-tariffs__footer">
                                        <button class="button body-tariffs__btn" type="button" data-popup data-form="Тариф {{ price('full_day')->title }}">
                                            Оставить заявку
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tariffs__slide swiper-slide">
                            <div class="tariff tariff_02">
                                <div class="tariff__header">
                                    <div class="tariff__title">{{ price('half_full_day')->title }}</div>
                                    <div class="tariff__price">
                                        {{ price('half_full_day')->amount }} <small>₽/мес</small>
                                    </div>
                                </div>
                                <div class="tariff__body body-tariffs">
                                    <div class="body-tariffs__header">
                                        <img src="{{ Vite::asset('resources/img/icons/time.svg') }}" alt="Image">
                                        <div class="time-tariff">
                                            <div class="time-tariff__label">
                                                Пн-Пт:
                                            </div>
                                            <div class="time-tariff__value">
                                                8:00 - 13:00
                                            </div>
                                            <div class="time-tariff__label">
                                                или
                                            </div>
                                            <div class="time-tariff__value">
                                                14:00 - 19:00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body-tariffs__content">
                                        <div class="body-tariffs__title">Входит в стоимость</div>
                                        <ul>
                                            <li>2х разовое питание</li>
                                            <li>1 прогулка</li>
                                            <li>игровая деятельность</li>
                                            <li>интегрированные и комплексные занятия в группе по возрасту ребёнка</li>
                                        </ul>
                                    </div>
                                    <div class="body-tariffs__footer">
                                        <button class="button body-tariffs__btn" type="button" data-popup data-form="Тариф {{ price('half_full_day')->title }}">
                                            Оставить заявку
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tariffs__slide swiper-slide">
                            <div class="tariff tariff_03">
                                <div class="tariff__header">
                                    <div class="tariff__title">{{ price('12_visits')->title }}</div>
                                    <div class="tariff__price">
                                        {{ price('12_visits')->amount }} <small>₽/мес</small>
                                    </div>
                                </div>
                                <div class="tariff__body body-tariffs">
                                    <div class="body-tariffs__header">
                                        <img src="{{ Vite::asset('resources/img/icons/time.svg') }}" alt="Image">
                                        <div class="time-tariff">
                                            <div class="time-tariff__label">
                                                Пн-Пт:
                                            </div>
                                            <div class="time-tariff__value">
                                                8:00 - 19:00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body-tariffs__content">
                                        <div class="body-tariffs__title">Входит в стоимость</div>
                                        <ul>
                                            <li>4х разовое питание</li>
                                            <li>2 прогулки</li>
                                            <li>дневной отдых</li>
                                            <li>игровая деятельность</li>
                                            <li>интегрированные и комплексные занятия в группе по возрасту ребёнка</li>
                                            <li>дополнительные занятия</li>
                                        </ul>
                                    </div>
                                    <div class="body-tariffs__footer">
                                        <button class="button body-tariffs__btn" type="button" data-popup data-form="Тариф {{ price('12_visits')->title }}">
                                            Оставить заявку
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tariffs__slide swiper-slide">
                            <div class="tariff tariff_04">
                                <div class="tariff__header">
                                    <div class="tariff__title">{{ price('3_visits')->title }}</div>
                                    <div class="tariff__price">
                                        {{ price('3_visits')->amount }} <small>₽/мес</small>
                                    </div>
                                </div>
                                <div class="tariff__body body-tariffs">
                                    <div class="body-tariffs__header">
                                        <img src="{{ Vite::asset('resources/img/icons/time.svg') }}" alt="Image">
                                        <div class="time-tariff">
                                            <div class="time-tariff__label">
                                                Пн-Пт:
                                            </div>
                                            <div class="time-tariff__value">
                                                8:00 - 19:00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body-tariffs__content">
                                        <div class="body-tariffs__title">Входит в стоимость</div>
                                        <ul>
                                            <li>4х разовое питание</li>
                                            <li>2 прогулки</li>
                                            <li>дневной отдых</li>
                                            <li>игровая деятельность</li>
                                            <li>интегрированные и комплексные занятия в группе по возрасту ребёнка</li>
                                            <li>дополнительные занятия</li>
                                        </ul>
                                    </div>
                                    <div class="body-tariffs__footer">
                                        <button class="button body-tariffs__btn" type="button" data-popup data-form="Тариф {{ price('3_visits')->title }}">
                                            Оставить заявку
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tariffs__slide swiper-slide">
                            <div class="tariff tariff_05">
                                <div class="tariff__header">
                                    <div class="tariff__title">{{ price('day')->title }}</div>
                                    <div class="tariff__price">
                                        {{ price('day')->amount }} <small>₽</small>
                                    </div>
                                </div>
                                <div class="tariff__body body-tariffs">
                                    <div class="body-tariffs__header">
                                        <img src="{{ Vite::asset('resources/img/icons/time.svg') }}" alt="Image">
                                        <div class="time-tariff">
                                            <div class="time-tariff__label">
                                                Пн-Пт:
                                            </div>
                                            <div class="time-tariff__value">
                                                8:00 - 19:00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body-tariffs__content">
                                        <div class="body-tariffs__title">Входит в стоимость</div>
                                        <ul>
                                            <li>4х разовое питание</li>
                                            <li>2 прогулки</li>
                                            <li>дневной отдых</li>
                                            <li>игровая деятельность</li>
                                            <li>интегрированные и комплексные занятия в группе по возрасту ребёнка</li>
                                            <li>дополнительные занятия</li>
                                        </ul>
                                    </div>
                                    <div class="body-tariffs__footer">
                                        <button class="button body-tariffs__btn" type="button" data-popup data-form="Тариф {{ price('day')->title }}">
                                            Оставить заявку
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tariffs__slide swiper-slide">
                            <div class="tariff tariff_06">
                                <div class="tariff__header">
                                    <div class="tariff__title">{{ price('half')->title }}</div>
                                    <div class="tariff__price">
                                        {{ price('half')->amount }} <small>₽</small>
                                    </div>
                                </div>
                                <div class="tariff__body body-tariffs">
                                    <div class="body-tariffs__header">
                                        <img src="{{ Vite::asset('resources/img/icons/time.svg') }}" alt="Image">
                                        <div class="time-tariff">
                                            <div class="time-tariff__label">
                                                Пн-Пт:
                                            </div>
                                            <div class="time-tariff__value">
                                                8:00 - 13:00
                                            </div>
                                            <div class="time-tariff__label">
                                                или
                                            </div>
                                            <div class="time-tariff__value">
                                                14:00 - 19:00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body-tariffs__content">
                                        <div class="body-tariffs__title">Входит в стоимость</div>
                                        <ul>
                                            <li>2х разовое питание</li>
                                            <li>1 прогулка</li>
                                            <li>игровая деятельность</li>
                                            <li>интегрированные и комплексные занятия в группе по возрасту ребёнка</li>

                                        </ul>
                                    </div>
                                    <div class="body-tariffs__footer">
                                        <button class="button body-tariffs__btn" type="button" data-popup data-form="Тариф {{ price('half')->title }}">
                                            Оставить заявку
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-controls">
                        <button type="button" class="tariffs-btn swiper-button swiper-button-prev">
                            <img src="{{ Vite::asset('resources/img/icons/ar-slider.svg') }}" alt="Image">
                        </button>
                        <button type="button" class="tariffs-btn swiper-button swiper-button-next">
                            <img src="{{ Vite::asset('resources/img/icons/ar-slider.svg') }}" alt="Image">
                        </button>
                    </div>
                </div>
                <div class="tariffs__sale sale-block">
                    <div class="sale-block__title title">Акции и&nbsp;специальные предложения</div>
                    <ul class="sale-block__items">
                        <li>
                            Всё включено в&nbsp;стоимость абонемента
                        </li>
                        <li>
                            Скидка 20% приведи друга
                        </li>
                        <li>
                            Нет вступительных взносов и&nbsp;скрытых платежей
                        </li>
                        <li>
                            Перерасчёт оплаты по&nbsp;болезни ребёнка
                        </li>
                        <li>
                            Скидка 50% на&nbsp;второго ребёнка
                        </li>
                        <li>
                            Специальные условия для многодетных семей
                        </li>
                        <li>
                            Скидка 30% при переходе из&nbsp;другого частного детского сада
                        </li>
                        <li>
                            Принимаем оплату материнским капиталом
                        </li>
                    </ul>
                    <div class="sale-block__actions">
                        <a href="" class="sale-block__btn button">Подробнее</a>
                    </div>
                </div>
                <div class="tariffs__free section-bottom">
                    <h2 class="tariffs__title title">
                        Бесплатный <br> пробный день
                    </h2>
                    <div class="tariffs__text">
                        Мы уверены в своем качестве&nbsp;и хотим, чтобы в нем были уверены и Вы, поэтому приглашаем Вас
                        вместе&nbsp;с ребенком на <span>бесплатный пробный день</span>
                    </div>
                    <div class="tariffs__action">
                        <button class="tariffs__btn button" type="button" data-popup data-form="Записаться на бесплатный пробный день">Записаться</button>
                    </div>
                </div>
                <div class="one-day">
                    <h2 class="one-day__title title">Принимается оплата материнским капиталом</h2>
                    <div class="one-day__img -ibg">
                        <img src="{{ Vite::asset('resources/img/one-day-img_price.jpg') }}" alt="Image">
                    </div>
                    <a href="{{ route('mothers-cap') }}" class="one-day__btn button">Подробнее</a>
                </div>
            </div>
        </section>

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
