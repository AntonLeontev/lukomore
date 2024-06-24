<section class="where">
    <div class="where__container">
        <h2 class="where__title title">Где мы находимся</h2>
        <div class="map">
            <iframe
                src="https://yandex.by/map-widget/v1/?ll=30.357682%2C59.941877&mode=poi&poi%5Bpoint%5D=30.356463%2C59.941837&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D59643188128&z=18.2"
                width="100%" height="100%" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe>
        </div>
        <div class="where__contacts contacts">
            <div class="contacts__content">
                <div class="text text_xl">Контакты</div>
                <ul class="contact-item">
                    <li>
                        г. Санкт-Петербург, ул. Маяковского, 37 В,
                    </li>
                    <li>м. “Чернышевская”,</li>
                    <li>м. “Площадь Восстания”,</li>
                    <li>м. “Площадь Восстания”,</li>
                    <li>м. “Маяковская”</li>
                </ul>
                <ul class="contact-item">
                    <li>График работы:</li>
                    <li>ПН - ПТ с 08:00 до 19:00</li>
                </ul>
                <ul class="contact-item">
                    <li><a href="tel:+78123892209">+7 (812) 389-22-09</a></li>
                    <li><a href="tel:+79291090808">+7 (929) 109-08-08</a></li>
                </ul>
                <ul class="contact-item">
                    <li><a href="mailto:lukomoredeti@mail.ru">lukomoredeti@mail.ru</a></li>
                </ul>
            </div>
            <div class="contacts__social">
                <div class="social">
                    <a href="https://t.me/lukomoredeti" target="_blank" class="social__item">
                        <img src="{{ Vite::asset('resources/img/icons/social/telegram.svg') }}" alt="Image">
                    </a>
                    <a href="https://vk.com/lukomorisad" class="social__item" target="_blank">
                        <img src="{{ Vite::asset('resources/img/icons/social/vk.svg') }}" alt="Image">
                    </a>
                    <a href="https://wa.me/+79291090808" class="social__item" target="_blank">
                        <img src="{{ Vite::asset('resources/img/icons/social/whatsapp_w.svg') }}"
                            alt="Image"><sup>*</sup>
                    </a>
                    <p class="social__item _fs">
                        <small>*Запрещен на территории РФ</small>
                    </p>
                </div>
                {{-- <div class="video-contacts">
                    <div class="video-contacts__text">Как нас найти? <br> Смотрите видео:</div>
                    <a href="" class="video-contacts__btn">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.9583 7.24053C16.3985 7.47466 16.7668 7.82417 17.0236 8.2516C17.2804 8.67904 17.4161 9.16829 17.4161 9.66695C17.4161 10.1656 17.2804 10.6549 17.0236 11.0823C16.7668 11.5097 16.3985 11.8592 15.9583 12.0934L4.21392 18.4798C2.32283 19.5092 0 18.1709 0 16.0543V3.28053C0 1.16303 2.32283 -0.174385 4.21392 0.853199L15.9583 7.24053Z"
                                fill="white" />
                        </svg>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
