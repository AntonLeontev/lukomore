@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <main class="page">
        <section class="hero">
            <div class="hero__container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h1 class="hero__title title">
                            <span>Частный детский сад</span>
                            «Лукоморье»
                        </h1>
                        <div class="hero__text">
                            Мягкое и бережное развитие Вашего ребенка
                        </div>
                        <ul class="hero__list">
                            <li>Имеем образовательную лицензию.</li>
                            <li>Всестороннее развитие вместе с нами.</li>
                            <li>Принимаем материнский капитал.</li>
                        </ul>
                        <button class="hero__btn button" type="button" data-goto=".feedback">Узнать наличие мест
                        </button>
                    </div>
                    <div class="hero__img hero-img">
                        <div class="leaves-left">
                            <img class="leaves-left-item leaves-left-item_01" src="{{ Vite::asset('resources/img/leaves/01-small.png') }}" alt="Image">
                            <img class="leaves-left-item leaves-left-item_02" src="{{ Vite::asset('resources/img/leaves/02-small.png') }}" alt="Image">
                            <img class="leaves-left-item leaves-left-item_03" src="{{ Vite::asset('resources/img/leaves/03-small.png') }}" alt="Image">
                        </div>
                        <img class="hero-cat" src="{{ Vite::asset('resources/img/hero-cat.png') }}" alt="Image">
                        <div class="leaves-right">
                            <img class="leaves-right-item leaves-right-item_01" src="{{ Vite::asset('resources/img/leaves/01-small.png') }}"
                                alt="Image">
                            <img class="leaves-right-item leaves-right-item_02" src="{{ Vite::asset('resources/img/leaves/02-small.png') }}"
                                alt="Image">
                            <img class="leaves-right-item leaves-right-item_03" src="{{ Vite::asset('resources/img/leaves/03-small.png') }}"
                                alt="Image">
                        </div>
                        <div class="hero-img__main">
                            <div class="hero-img__img -ibg">
                                <img src="{{ Vite::asset('resources/img/pages/hero-img.jpg') }}" alt="Image">
                            </div>
                            <img src="{{ Vite::asset('resources/img/butterfly-hero.png') }}" alt="Image" class="butterfly">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about section-padding">
            <div class="about__container">
                <div class="about__item">
                    <h2 class="about__title title">
                        Детский сад «ЛУКОМОРЬЕ»
                    </h2>
                    <div class="about__text text text_xl">
                        Это не только присмотр, безопасность и всестороннее развитие. Это комфортное, увлекательное
                        пространство для детей, с особым подходом к гармоничному развитию, с бережным и уважительным
                        отношением к детству! Мы следуем за интересами ребёнка.
                    </div>
                </div>
                <div class="about__item">
                    <h2 class="about__title title">
                        Наша главная цель
                    </h2>
                    <div class="about__text text text_xl">
                        Помогать детям расти счастливыми, самостоятельными и адаптированными к жизни. Открытыми к
                        знаниям и с правильной мотивацией к обучению. Понимающих себя и свои желания. Уважающих свои и
                        чужие личные границы.
                    </div>
                </div>
                <div class="about__item">
                    <h2 class="about__title title">
                        Для этого мы открыли Лукоморье!
                    </h2>
                    <button class="about__btn button" data-goto=".feedback">
                        Записаться на экскурсию
                    </button>
                </div>
            </div>
        </section>
        <section class="why section-bottom">
            <div class="why__container">
                <h2 class="why__title title">
                    10 причин выбрать Лукоморье
                </h2>
                <div class="why__text text text_xl">Причин намного больше, но эти 10 отвечают на&nbsp;самые частые
                    вопросы
                    родителя
                </div>
                <div class="why__body swiper">
                    <div class="why__wrapper swiper-wrapper">
                        <div class="why__slide swiper-slide">
                            <div class="why-slide">
                                <div class="why-slide__header">
                                    <img src="{{ Vite::asset('resources/img/slider/why/01.png') }}" alt="Image">
                                    <strong>В нашем пространстве есть всё самое необходимое</strong>
                                </div>
                                <div class="why-slide__text">
                                    Отдельно стоящее здание, с охраняемой территорией и детской площадкой. Светлое и
                                    комфортное помещение. Отдельная спальня, уютная игровая и обеденная зоны, а также
                                    центры активностей: конструирования, мелкой моторики, математики, грамотности и
                                    письма, науки и природы, творчества и другие.
                                </div>
                            </div>
                        </div>
                        <div class="why__slide swiper-slide">
                            <div class="why-slide">
                                <div class="why-slide__header">
                                    <img src="{{ Vite::asset('resources/img/slider/why/02.png') }}" alt="Image">
                                    <strong>Мы заботимся о том, что бы каждому ребенку было вкусно</strong>
                                </div>
                                <div class="why-slide__text">
                                    Специально разработанное меню, питание с учетом возрастных особенностей и личных
                                    предпочтений ребенка. Сбалансированная и здоровая еда, приготовленная на
                                    собственной современно оборудованной кухне.
                                </div>
                            </div>
                        </div>
                        <div class="why__slide swiper-slide">
                            <div class="why-slide">
                                <div class="why-slide__header">
                                    <img src="{{ Vite::asset('resources/img/slider/why/03.png') }}" alt="Image">
                                    <strong>Мягкая адаптация</strong>
                                </div>
                                <div class="why-slide__text">
                                    В первые дни мама может находиться в «ЛУКОМОРЬЕ», для более комфортной адаптации
                                    ребенка.
                                </div>
                            </div>
                        </div>
                        <div class="why__slide swiper-slide">
                            <div class="why-slide">
                                <div class="why-slide__header">
                                    <img src="{{ Vite::asset('resources/img/slider/why/04.png') }}" alt="Image">
                                    <strong>Можно не спать днем</strong>
                                </div>
                                <div class="why-slide__text">
                                    Если малыш не хочет спать, мы организуем тихую и спокойную деятельность: он может
                                    послушать сказку, просто полежать и отдохнуть, рисовать или собирать пазлы.
                                </div>
                            </div>
                        </div>
                        <div class="why__slide swiper-slide">
                            <div class="why-slide">
                                <div class="why-slide__header">
                                    <img class="_big" src="{{ Vite::asset('resources/img/slider/why/05.png') }}" alt="Image">
                                    <strong>Каждый день мы отправляем фотоотчет</strong>
                                </div>
                                <div class="why-slide__text">
                                    О том, как дети проводят свое время в&nbsp;«ЛУКОМОРЬЕ», воспитатели делятся фото и
                                    видео.
                                </div>
                            </div>
                        </div>
                        <div class="why__slide swiper-slide">
                            <div class="why-slide">
                                <div class="why-slide__header">
                                    <img src="{{ Vite::asset('resources/img/slider/why/06.png') }}" alt="Image">
                                    <strong>Комфортная и доброжелательная атмосфера</strong>
                                </div>
                                <div class="why-slide__text">
                                    За каждой группой закреплены 2 воспитателя, а также педагоги для проведения
                                    обучающих и творческих занятий. В атмосфере доверия и уважения дети в «ЛУКОМОРЬЕ»
                                    проявляют свой природный потенциал.
                                </div>
                            </div>
                        </div>
                        <div class="why__slide swiper-slide">
                            <div class="why-slide">
                                <div class="why-slide__header">
                                    <img src="{{ Vite::asset('resources/img/slider/why/07.png') }}" alt="Image">
                                    <strong>Развитие в&nbsp;индивидуальном темпе</strong>
                                </div>
                                <div class="why-slide__text">
                                    В наших группах до 10 человек индивидуальный подход к каждому ребенку, с уважением к
                                    его <br> интересам.
                                </div>
                            </div>
                        </div>
                        <div class="why__slide swiper-slide">
                            <div class="why-slide">
                                <div class="why-slide__header">
                                    <img src="{{ Vite::asset('resources/img/slider/why/08.png') }}" alt="Image">
                                    <strong>Мы предлагаем <br> широкий спектр занятий</strong>
                                </div>
                                <div class="why-slide__text">
                                    Мы используем образовательную программу дошкольного образования, а&nbsp;также
                                    авторские
                                    программы «ЛУКОМОРЬЯ».
                                </div>
                            </div>
                        </div>
                        <div class="why__slide swiper-slide">
                            <div class="why-slide">
                                <div class="why-slide__header">
                                    <img src="{{ Vite::asset('resources/img/slider/why/09.png') }}" alt="Image">
                                    <strong>Мы уделяем внимание навыкам культуры поведения</strong>
                                </div>
                                <div class="why-slide__text">
                                    Мы соблюдаем правила, которые проговариваем с детьми для безопасного нахождения, как
                                    в садике, так и на площадке. Беседуем о чужих и личных границах, обсуждаем, всё, что
                                    беспокоит детей.
                                </div>
                            </div>
                        </div>
                        <div class="why__slide swiper-slide">
                            <div class="why-slide">
                                <div class="why-slide__header _long">
                                    <img src="{{ Vite::asset('resources/img/slider/why/10.png') }}" alt="Image">
                                    <strong>Креативно и наглядно знакомимся с&nbsp;окружающим миром</strong>
                                </div>
                                <div class="why-slide__text">
                                    Для расширения кругозора, знакомства с культурой и историей города дети посещают
                                    музеи, экскурсии, театры и библиотеки.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-controls">
                        <button type="button" class="why-btn swiper-button swiper-button-prev">
                            <img src="{{ Vite::asset('resources/img/icons/ar-slider.svg') }}" alt="Image">
                        </button>
                        <button type="button" class="why-btn swiper-button swiper-button-next">
                            <img src="{{ Vite::asset('resources/img/icons/ar-slider.svg') }}" alt="Image">
                        </button>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.safe')

        @include('partials.classes')

        <section class="tariffs section-bottom">
            <div class="tariffs__container">
                <h2 class="tariffs__title title">
                    Абонемент
                </h2>
                <div class="tariffs__body _main swiper">
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
                                        <button class="button body-tariffs__btn" type="button" data-goto=".feedback">
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
                                        <button class="button body-tariffs__btn" type="button" data-goto=".feedback">
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
                                        <button class="button body-tariffs__btn" type="button" data-goto=".feedback">
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
                                        <button class="button body-tariffs__btn" type="button" data-goto=".feedback">
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
                                        <button class="button body-tariffs__btn" type="button" data-goto=".feedback">
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
                                        <button class="button body-tariffs__btn" type="button" data-goto=".feedback">
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
                        <a href="{{ route('sale') }}" class="sale-block__btn button">Подробнее</a>
                    </div>
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
            </div>
        </section>
        
		@include('partials.gallary')

        <section class="team section-bottom">
            <div class="team__container">
                <h2 class="team__title title">Наша команда</h2>
                <div class="team__body swiper">
                    <div class="team__wrapper swiper-wrapper">
						@foreach (team() as $worker)
							<div class="team__slide swiper-slide">
								<div class="team-slide">
									<div class="team-slide__img -ibg">
										<img src="{{ $worker->url }}" alt="{{ $worker->name }}">
									</div>
									<div class="team-slide__body">
										<div class="team-slide__title title title_h3">{{ $worker->name }}</div>
										<div class="team-slide__category">
											{{ $worker->profession }}
										</div>
										<div data-showmore class="text-team">
											<div data-showmore-content="0" class="text-team__content">
												{!! $worker->description !!}
											</div>
											<button hidden data-showmore-button type="button"
												class="text-team__more"><span>Развернуть</span><span>Свернуть</span>
											</button>
										</div>
									</div>
								</div>
							</div>
						@endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        @include('partials.support')

        <section class="reviews section-bottom" id="reviews">
            <div class="reviews__container">
                <h2 class="reviews__title title">Отзывы</h2>
                <div class="reviews__body swiper">
                    <div class="reviews__wrapper swiper-wrapper">
						@foreach (reviews() as $review)
							<div class="reviews__slide swiper-slide">
								<div class="review-slide">
									<div class="review-slide__header">
										<div class="review-slide__user">
											<strong>{{ $review->name }}</strong>
											<time>{{ $review->created_at->format('d.m.Y') }}</time>
										</div>
										<div class="review-slide__rating rating">
											@foreach (range(1, $review->rating) as $time)
												<img src="{{ Vite::asset('resources/img/icons/star-full.svg') }}" alt="Image">
											@endforeach
											
											@foreach (range(0, 5 - $review->rating) as $time)
												@if ($loop->last)
													@continue
												@endif
												<img src="{{ Vite::asset('resources/img/icons/star-null.svg') }}" alt="Image">
											@endforeach
										</div>
									</div>
									<div class="review-slide__body">
										{!! $review->text !!}
									</div>
								</div>
							</div>
						@endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-controls">
                        <button type="button" class="reviews-btn swiper-button swiper-button-prev">
                            <img src="{{ Vite::asset('resources/img/icons/ar-slider.svg') }}" alt="Image">
                        </button>
                        <button type="button" class="reviews-btn swiper-button swiper-button-next">
                            <img src="{{ Vite::asset('resources/img/icons/ar-slider.svg') }}" alt="Image">
                        </button>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
