<?php include "header.php"; ?>
    <div class="content">
        <div class="container">
            <ul class="breadcrumbs"><li><a href="/">Главная</a></li><li>Отзыввы</li></ul>

            <h1>Отзывы</h1>

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

            <div class="testimonials testimonials--one-column">
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
        </div>
    </div>


<?php include "footer.php";