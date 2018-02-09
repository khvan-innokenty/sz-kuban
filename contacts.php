<?php include "header.php"; ?>
    <div class="content">
        <div class="container">
            <ul class="breadcrumbs"><li><a href="/">Главная</a></li><li>Контакты</li></ul>

            <h1>Контакты</h1>

            <div class="contacts">
                <div class="contacts__left">
                    <div class="contacts__map" id="map" data-coords="<?=COORDS;?>" data-zoom="<?=ZOOM;?>"></div>
                    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
                </div>
                <div class="contacts__right contacts__right--primary">
                    <div class="contacts-card__wrapper">
                        <div class="contacts-card">
                            <div class="contacts-card__row">
                                <label class="contacts-card__label">Телефоны:</label>
                                <div class="contacts-card__value">
                                    <a class="white" href="tel:<?=filter_phone(PHONE1);?>"><?=PHONE1;?></a><br>
                                    <? if (PHONE2) : ?><a href="tel:<?=filter_phone(PHONE2);?>" class="white"><?=PHONE2;?></a><? endif ?>
                                </div>
                            </div>
                            <div class="contacts-card__row">
                                <label class="contacts-card__label">Адрес:</label>
                                <div class="contacts-card__value">
                                    <?=CITY;?>, <?=ADDRESS;?>
                                    <p class="show-on-mobile">
                                        <a href="geo:<?=COORDS;?>?q=<?=COORDS;?>" class="button">Открыть на карте</a>
                                    </p>
                                </div>
                            </div>
                            <div class="contacts-card__row">
                                <label class="contacts-card__label">Email:</label>
                                <div class="contacts-card__value">
                                    <a href="mailto:<?=EMAIL;?>" class="white"><?=EMAIL;?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contacts">
                <div class="contacts__left">
                    <h2>Режим работы</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
                </div>
                <div class="contacts__right">
                    <h2>Задать вопрос</h2>
                    <form class="js-form" action="/ajax/question.php" data-success="Ваше сообщение получено. Мы скоро свяжемся с Вами." id="contact-form">
                        <input type="text" name="name" placeholder="Ф.И.О.">
                        <div class="contacts-form">
                            <div class="contacts-form__item"><input type="tel" name="phone" placeholder="Телефон"></div>
                            <div class="contacts-form__item"><input type="email" name="email" placeholder="Email"></div>
                        </div>
                        <textarea name="message" placeholder="Сообщение" rows="4"></textarea>
                        <input type="checkbox" class="appointment__checkbox" name="legal" id="legal-contact">
                        <label for="legal-contact" class="appointment__checkbox__label">Я даю согласие на обработку персональных данных, с условиями <a href="/legal.php" target="_blank">Политики обработки и защиты персональных данных</a> ознакомлен.</label>
                        <button class="button appointment__submit" type="submit" disabled><span class="text">Отправить</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include "footer.php";