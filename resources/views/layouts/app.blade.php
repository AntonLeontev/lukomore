<!DOCTYPE html>
<html lang="ru">

<head>
	<title>@yield('title') | Лукоморье</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	<script defer src="/js/app.min.js"></script>
	@routes
	<style>
		[x-cloak] {
			display: none !important;
		}
	</style>
	
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	m[i].l=1*new Date();
	for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
	k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(85981648, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
	});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/85981648" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>

<body>
	<div class="wrapper">
		@include('partials.header')
		@yield('content')
		@include('partials.footer')
	</div>

	{{-- popup_show --}}
	<div id="popup" class="popup" id="popup">
		<div class="popup__wrapper">
			<div class="popup__content">
				<button data-close type="button" class="popup__close" onclick="popup.classList.remove('popup_show')">
					<img src="{{ Vite::asset('resources/img/icons/close.svg') }}" alt="close">
				</button>
				<div class="popup__text">
					<div class="form-wrapper">
						<div class="form-success">
							<div class="form-success__title title">Спасибо за вашу заявку!</div>
							<div class="form-success__text">Мы Вам перезвоним в течение 30 минут</div>
							<div class="form-success__img -ibg--contain">
								<img src="{{ Vite::asset('resources/img/hero-cat_success.png') }}" alt="Image">
							</div>
						</div>
						<div class="form-wrapper__content">
							<h2 class="form-wrapper__title title">У вас остались вопросы?</h2>
							<div class="form-wrapper__text text text_xl">Мы с удовольствием вам ответим!</div>
							<form class="form" id="popupform">
								<input type="hidden" name="page" value="@yield('title')">
								<input type="hidden" name="form" value="" id="formType">

								<div class="form__row">
									<div class="form__line">
										<input class="input" autocomplete="off" type="text" placeholder="Ваше имя" name="name" required>
									</div>
								</div>
								<div class="form__row">
									<div class="form__line">
										<input class="input" autocomplete="off" type="text" placeholder="Ваш номер телефона" name="phone" required>
									</div>
									<div class="checkbox">
										<input id="p_a" data-error="Ошибка" class="checkbox__input" type="checkbox" value="1" required>
										<label for="p_a" class="checkbox__label">
											<span class="checkbox__text">
												Оставляя свои контактные данные, Вы соглашаетесь с&nbsp;<a href="/policy.pdf">политикой конфиденциальности</a>.
											</span>
										</label>
									</div>
								</div>
								<div class="form__row">
									<button class="form__button button" type="submit">Оставить заявку</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		function submitForm(e) {
			e.preventDefault();
			e.target.querySelector('.form__button').disabled = true;

			axios
				.post(route('request.send'), new FormData(e.target))
				.then((response) => {
					e.target.querySelector('.form__button').innerText = 'Заявка отправлена';
					e.target.closest('.form-wrapper').classList.add('_form-success');
				})
				.catch((error) => {
					alert('Произошла ошибка. Попробуйте позвонить нам');
				});
		}

		function cleanPhone(e) {
			e.target.value = e.target.value
				.replace(/[^\d^+]/g, '')
		}

		document.addEventListener('click', function(e) {
			if (e.target.closest('[data-popup]')) {
				popup.classList.add('popup_show');
				let type = e.target.closest('[data-popup]').dataset.form;
				formType.value = type;
			}
		})
		const popupForm = document.querySelector('#popupform');
		popupForm.addEventListener('submit', submitForm);
		popupForm.querySelector('[name="phone"]').addEventListener('input', cleanPhone);
	</script>
</body>

</html>
