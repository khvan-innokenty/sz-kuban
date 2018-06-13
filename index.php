<?php include "header.php"; ?>
    <div class="content">
        <div class="container">
            <div class="home-slider__wrapper">
                <div class="home-slider__inner">
                    <div class="home-slider" id="home-slider">
                        <div>
                            <div class="slide" style="background-image: url('/img/slider-1.jpg')">
                                <div class="slide__image" style="background-image: url('/img/slider-1.jpg')"></div>
                                <div class="slide__comment">
                                    <div class="slide__title"><a href="/promo2.php">Многопрофильный медицинский центр «СОГАЗ – МЕДИЦИНА» г. Геленджик</a></div>
                                    <div class="slide__body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing. elit, sed do eiusmod tempor incididunt ut labore.</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide" style="background-image: url('/img/slider-2.jpg')">
                                <div class="slide__image" style="background-image: url('/img/slider-2.jpg')"></div>
                                <div class="slide__comment">
                                    <div class="slide__title"><a href="/promo2.php">6-я процедура Plasmolifting за 1 рубль</a></div>
                                    <div class="slide__body">С 01.11.2017 по 01.02.2018 в отделение дерматовенерологии ММЦ «СОГАЗ»</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="departments">
                <a href="/department.php" class="departments__link"><?=inline_svg('ambulance');?><span class="text">Амбулаторно-поликлиническое отделение</span></a>
                <a href="/department.php" class="departments__link"><?=inline_svg('shc');?><span class="text">Отделение стационара</span></a>
                <a href="/department.php" class="departments__link"><?=inline_svg('diagnostics');?><span class="text">Отделение диагностики</span></a>
                <a href="/department.php" class="departments__link"><?=inline_svg('stomatology');?><span class="text">Стоматологическое отделение</span></a>
                <!-- <a href="/department.php" class="departments__link"><span class="text">Аптека</span></a> -->
            </div>

            <div class="stars-promo">
                <img src="/bitrix/templates/sogaz/img/pulse.svg" class="stars-promo__pulse">
                <img src="/bitrix/templates/sogaz/img/doctors.png" class="stars-promo__doctors">
                <div class="stars-promo__inner">
                    <h2 class="stars-promo__header">Медицинская помощь мирового класса</h2>
                    <div class="stars-promo__body">
                        <p>Признанные врачи России и всего мира принимают в Геленджике.</p>
                        <p>Всего несколько дней в году.</p>
                    </div>
                    <a href="/stars.php" class="button">Посмотреть расписание</a>
                </div>
            </div>

            <div class="combo-box">
                <div class="combo-box__about__header">
                    <h2>О центре</h2>
                </div>
                <div class="combo-box__about">
                    <h3>Международный медицинский центр СОГАЗ</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                    <div class="button-block">
                        <a class="button button--white-outline" href="/about.php">Подробнее</a>
                        <a class="button button--white-outline" href="/contacts.php">Контакты</a>
                    </div>
                </div>
                <div class="combo-box__news__header">
                    <h2>Новости <a href="/publications.php" class="secondary more">Все новости</a></h2>
                </div>
                <a class="white combo-box__news combo-box__news--first" href="/publications2.php" style="background-image: url('http://via.placeholder.com/420x504?text=NEWS+1')">
                    <p><span>График работы медицинских центров СОГАЗ МЕДИЦИНА</span></p>
                </a>
                <a class="white combo-box__news" href="/publications2.php" style="background-image: url('http://via.placeholder.com/420x504?text=NEWS+2')">
                    <p><span>В Санкт-Петербурге прошел XII Российский форум с международным участием «Здоровое питание с рождения: медицина, образование, пищевые технологии»</span></p>
                </a>
            </div>

            <div class="testimonials__wrapper">
                <h2>Отзывы <a href="/testimonials.php" class="secondary more">Все отзывы</a></h2>

                <div class="testimonials">
                    <div class="testimonial">
                        <div class="testimonial__title">
                            <div class="testimonial__name">Александр</div>
                            <div class="testimonial__date">21.11.2017</div>
                        </div>
                        <div class="testimonial__body">
                            Большая благодарность офтальмологу Данилову Павлу Анатольевичу! Спасибо!
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial__title">
                            <div class="testimonial__name">Кудрявцева Мария</div>
                            <div class="testimonial__date">20.11.2017</div>
                        </div>
                        <div class="testimonial__body">
                            Была на приеме у Лозовской Натальи Леонидовны. Прекрасный доктор! Внимательно выслушала, дала правильные рекомендации. Лечение помогло, а это самое главное! Большое спасибо! Доктора рекомендую!
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial__title">
                            <div class="testimonial__name">Мамадалиев О.Я.</div>
                            <div class="testimonial__date">19.11.2017</div>
                        </div>
                        <div class="testimonial__body">
                            Хочу выразить большую благодарность медицинскому персоналу СОГАЗ, профессионалам своего дела, травматологам Телышеву В.В., Фролову А.Л., заведующему терапевтического отделения Долгушеву Д.А., Заведующему отделением Проценко А.В., хирургу Сиркис М.А., специалистам ЛФК и многим другим специалистам. Сложные операции, индивидуальный подход к пациентам. До лечения в ММЦ "СОГАЗ", даже не представлял, какие профессионалы с большой буквы работают в данной организации. Ещё раз огромное спасибо!!!
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial__title">
                            <div class="testimonial__name">Константинопольский Константин Константинович</div>
                            <div class="testimonial__date">18.11.2017</div>
                        </div>
                        <div class="testimonial__body">
                            Хочу выразить большую благодарность медицинскому персоналу СОГАЗ , профессионалам  своего дела, неврологу Кудрявцевой А.С.,ЛОРу Аксёнову А.Н,дерматологу Следневой Т.В, за их золотые руки и индивидуальные подходы к каждому пациенту.Еще хочу сказать спасибо Администраторам, Марина(стажер) очень вежливый и отзывчивый сотрудник.
                        </div>
                    </div>
                </div>

                <div class="testimonials__add">
                    <a class="button js-show-popup" href="#add-testimonial-popup">Добавить отзыв</a>

                    <form class="add-testimonial-popup mfp-hide zoom-anim-dialog js-form" id="add-testimonial-popup" action="/ajax/testimonial.php" data-success="Мы получили Ваш отзыв.">
                        <h2>Добавить отзыв</h2>
                        <input type="hidden" name="target" value="">
                        <input name="name" type="text" placeholder="Ф.И.О.">
                        <input name="phone" type="tel" placeholder="Телефон (не для публикации)">
                        <textarea name="testimonial" placeholder="Отзыв"></textarea>
                        <input type="checkbox" class="appointment__checkbox" name="legal" id="legal-popup">
                        <label for="legal-popup" class="appointment__checkbox__label">Я даю согласие на обработку персональных данных, с условиями <a href="/legal.php" target="_blank">Политики обработки и защиты персональных данных</a> ознакомлен.</label>
                        <button class="button appointment__submit" type="submit" disabled><span class="text">Добавить</span></button>
                    </form>
                </div>

                <div class="rosminzdrav">
                    <div class="rosminzdrav__table">
                        <div class="rosminzdrav__cell"><a href="https://www.rosminzdrav.ru/polls/9-anketa-dlya-otsenki-kachestva-okazaniya-uslug-meditsinskimi-organizatsiyami-v-ambulatornyh-usloviyah?region_code=KDA" target="_blank"><img src="/img/rosminzrdav.png"></a></div>
                        <div class="rosminzdrav__cell">Примите участие в независимом голосовании на портале Министерства здравоохранения Российской Федерации.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include "footer.php";