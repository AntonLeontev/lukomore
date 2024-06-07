<section class="feedback section-bottom">
    <div class="feedback__container">
        <div class="feedback__form form-wrapper" id="formWrapper">
            <div class="form-success">
                <div class="form-success__title title">Спасибо за вашу заявку!</div>
                <div class="form-success__text">Мы Вам перезвоним в течение 30 минут</div>
                <div class="form-success__img -ibg--contain">
                    <img src="{{ Vite::asset('resources/img/hero-cat_success.png') }}" alt="Image">
                </div>
            </div>
            <div class="form-wrapper__content">
                <h2 class="feedback__title title">У вас остались вопросы?</h2>
                <div class="feedback__text text text_xl">Мы с удовольствием вам ответим!</div>
                <form class="form" id="form">
                    <div class="form__row">
                        <div class="form__line">
                            <input class="input" autocomplete="off" type="text" placeholder="Ваше имя" name="name" required maxlength="50">
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__line">
                            <input class="input" autocomplete="off" type="text" placeholder="Ваш номер телефона" name="phone" required maxlength="20">
                        </div>
                        <div class="checkbox">
                            <input id="c_" data-error="Ошибка" class="checkbox__input" checked type="checkbox"
                                value="1" name="check" required>
                            <label for="c_" class="checkbox__label">
                                <span class="checkbox__text">
                                    Оставляя свои контактные данные, Вы соглашаетесь с&nbsp;<a href="">политикой
                                        конфиденциальности</a>.
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="form__row">
                        <button class="form__button button" type="submit">Оставить заявку</button>
                    </div>
                </form>

				<script>
					let formWrapper = document.getElementById('formWrapper');
					let button = formWrapper.querySelector('.form__button');
					formWrapper.querySelector('#form').addEventListener('submit', submitForm);
					formWrapper.querySelector('[name="phone"]').addEventListener('input', cleanPhone);

					function submitForm(e) {
						e.preventDefault();
						button.disabled = true;

						axios
							.post(route('request.send'), new FormData(e.target))
							.then((response) => {
								formWrapper.classList.add('_form-success');
							})
							.catch((error) => {
								alert('Произошла ошибка. Попробуйте позвонить нам');
							});
					}

					function cleanPhone(e) {
						e.target.value = e.target.value
							.replace(/[^\d^+]/g, '')
					}
				</script>

            </div>

        </div>
        <div class="feedback__contacts">
            <a href="tel:+79291090808">+7 929 109 08 08</a>
            <a href="mailto:lukomoredeti@mail.ru">lukomoredeti@mail.ru</a>
        </div>
        <div class="feedback__navigation">
            <a href="{{ route('about') }}">Наш подход</a>
            <a href="{{ route('food') }}">Питание</a>

			@if (Route::currentRouteName() === 'home')
				<a href="" data-goto=".classes__group">Группы</a>
			@else
            	<a href="/#classes__group">Группы</a>
			@endif

            <a href="{{ route('price') }}">Тарифы</a>

			@if (Route::currentRouteName() === 'home')
				<a href="" data-goto=".reviews">Отзывы</a>
			@else
            	<a href="/#reviews">Отзывы</a>
			@endif

            <a href="{{ route('conditions') }}">Условия приема</a>
            <a href="/license.pdf" target="_blank">Лицензия</a>
            <a href="" data-goto=".contacts">Где мы находимся</a>
        </div>
        <a href="https://robotohod.com/" rel="nofollow" class="feedback__partners">
            <p>Наши партнеры:</p>
            <img src="{{ Vite::asset('resources/img/logo-rob.svg') }}" alt="Image">
        </a>
    </div>
</section>
