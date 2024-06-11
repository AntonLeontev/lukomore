<header class="header" data-scroll="500" data-scroll-show="1000">
    <div class="header__container">
        <div class="header-top">
            <div class="header-top__col">
                <a href="/" class="header-top__logo logo"><img src="{{ Vite::asset('resources/img/logo.svg') }}" alt="Logo"></a>
            </div>
            <div class="header-top__col">
                <div class="text">
                    г. Санкт-Петербург, ул. Маяковского, 37 В, <br> м. “Чернышевская”, м. “Площадь Восстания”, м.
                    “Маяковская”
                </div>
            </div>
            <div class="header-top__col">
                <a class="text text_lg" href="tel:+79291090808">+7 (929) 109-08-08</a>
                <a class="text" href="mailto:lukomoredeti@mail.ru">lukomoredeti@mail.ru</a>
            </div>
            <div class="header-top__col">
                <button class="button button_outline" type="button" data-popup data-form="Обратный звонок в шапке">Обратный звонок</button>
            </div>
            <div class="header-top__col">
                <button type="button" class="menu__icon icon-menu"><span></span></button>
            </div>
        </div>
        <div class="header-bottom">
            <div class="header-bottom__menu menu">
                <nav class="menu__body">
                    <ul class="menu__list">
						@if (Route::has('home'))
                        	<li class="menu__item @if(Route::currentRouteName() === 'home') _active @endif">
								<a href="{{ route('home') }}" class="menu__link">Главная</a>
							</li>
						@endif
						@if (Route::has('about'))
                        	<li class="menu__item @if(Route::currentRouteName() === 'about') _active @endif">
								<a href="{{ route('about') }}" class="menu__link">О нас</a>
							</li>
						@endif
						@if (Route::has('schedule'))
                        	<li class="menu__item @if(Route::currentRouteName() === 'schedule') _active @endif">
								<a href="{{ route('schedule') }}" class="menu__link">Режим дня</a>
							</li>
						@endif
						@if (Route::has('price'))
                        	<li class="menu__item @if(Route::currentRouteName() === 'price') _active @endif">
								<a href="{{ route('price') }}" class="menu__link">Стоимость</a>
							</li>
						@endif
						@if (Route::has('conditions'))
                        	<li class="menu__item @if(Route::currentRouteName() === 'conditions') _active @endif">
								<a href="{{ route('conditions') }}" class="menu__link">Условия приема</a>
							</li>
						@endif
						@if (Route::has('faq'))
                        	<li class="menu__item @if(Route::currentRouteName() === 'faq') _active @endif">
								<a href="{{ route('faq') }}" class="menu__link">Вопросы и ответы</a>
							</li>
						@endif
						@if (Route::has('posts.index'))
                        	<li class="menu__item @if(Route::currentRouteName() === 'posts.index') _active @endif">
								<a href="{{ route('posts.index') }}" class="menu__link">Полезные статьи</a>
							</li>
						@endif
                        <li class="menu__item"><a href="#" class="menu__link" data-goto=".contacts">Контакты</a></li>
                    </ul>
                    <div class="menu__mobile mobile-menu">
                        <div class="mobile-menu__item">
                            <a class="text text_lg" href="tel:+79291090808">+7 (929) 109-08-08</a>
                            <a class="text" href="mailto:lukomoredeti@mail.ru">lukomoredeti@mail.ru</a>
                        </div>
                        <div class="mobile-menu__item">
                            <ul>
                                <li>г. Санкт-Петербург, <br>ул. Маяковского, 37 В,</li>
                                <li>м. “Чернышевская”, </li>
                                <li>м. “Площадь Восстания”,</li>
                                <li>м. “Маяковская”</li>
                            </ul>
                        </div>
                        <img src="{{ Vite::asset('resources/img/header-img.png') }}" alt="Image" class="header-bottom__img">
                    </div>
                </nav>
            </div>
            <div class="header-bottom__social social" data-da=".menu__mobile, 991.98,last">
                <a href="https://t.me/lukomoriesad" target="_blank" class="social__item">
                    <img src="{{ Vite::asset('resources/img/icons/social/telegram.svg') }}" alt="telegram logo">
                </a>
                <a href="https://vk.com/lukomorisad" target="_blank" class="social__item">
                    <img src="{{ Vite::asset('resources/img/icons/social/vk.svg') }}" alt="vk logo">
                </a>
                <a href="https://wa.me/+79291090808" target="_blank" class="social__item">
                    <img src="{{ Vite::asset('resources/img/icons/social/whatsapp.svg') }}" alt="whatsapp logo">
					<sup>*</sup>
                </a>
				<small class="social__item _fs">
					*Запрещен на территории РФ
				</small>
            </div>
        </div>
    </div>
</header>
