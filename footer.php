<div class="footer__wrapper">
    <div class="container">
        <footer class="footer">
            <div class="footer__copyrights">
                <img class="footer__logo" src="/img/sogaz-medicine.svg">
                <p>
                    &copy; ММЦ СОГАЗ, <?=date('Y')?>
                </p>
                <p>
                    <a href="/legal.php" class="white">Политика обработки и защиты персональных данных</a>
                </p>
            </div>
            <div class="footer__nav">
                <form action="/search/" method="get" class="search">
                    <div class="search__input__wrapper">
                        <?=inline_svg('search')?>
                        <input type="text" name="q" placeholder="Поиск по сайту" class="search__input">
                    </div>
                    <div class="search__submit__wrapper">
                        <button type="submit" class="search__submit">Найти</button>
                    </div>
                </form>
                <ul class="footer__menu">
                    <li><a class="white" href="/about.php">О центре</a></li>
                    <li><a class="white" href="/services.php">Услуги и цены</a></li>
                    <li><a class="white" href="/departments.php">Отделения</a></li>
                    <li><a class="white" href="/staff.php">Специалисты</a></li>
                    <li><a class="white" href="/publications.php">Публикации</a></li>
                    <li><a class="white" href="/contacts.php">Контакты</a></li>
                    <li><a class="white" href="/vacancies.php">Вакансии</a></li>
                    <li><a class="white" href="/promo.php">Акции</a></li>
                </ul>
            </div>
            <div class="footer__cta">
                <a class="button footer__appointment js-show-popup" href="#appointment-popup" data-target="Страница XXX">ЗАПИСАТЬСЯ НА ПРИЁМ</a>
            </div>
            <div class="footer__cta">
                <a href="tel:<?=filter_phone(PHONE1);?>" class="footer__phone white"><?=PHONE1;?></a>
                <? if (PHONE2) : ?><a href="tel:<?=filter_phone(PHONE2);?>" class="footer__phone white"><?=PHONE2;?></a><? endif ?>
                <p class="footer__address"><?=CITY;?><br><?=ADDRESS;?></p>
            </div>
        </footer>
        <div class="footer__disclaimer">О возможных противопоказаниях проконсультируйтесь со специалистом</div>
    </div>
</div>

<ul class="mobile-menu js-mobile-menu">
    <li>
        <a class="mobile-menu__item" href="tel:+78124068888"><?=inline_svg('phone')?>Позвонить</a>
    </li>
    <li>
        <a class="mobile-menu__item" href="geo:<?=COORDS;?>?q=<?=COORDS;?>"><?=inline_svg('marker')?>На карте</a>
    </li>
    <li>
        <a class="mobile-menu__item js-show-popup" href="#appointment-popup"><?=inline_svg('calendar')?>Записаться</a>
    </li>
    <li>
        <button  class="mobile-menu__item js-hamburger">
            <i class="hamburger"><i class="l1"></i><i class="l2"></i><i class="l3"></i></i>
            <span class="title-1">Меню</span>
            <span class="title-2">Закрыть</span>
        </button>
    </li>
</ul>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<form class="appointment-popup mfp-hide zoom-anim-dialog js-form" id="appointment-popup" action="/ajax/appointment.php" data-success="Администратор скоро свяжется с Вами для записи на приём.">
    <h2>Запись на приём</h2>
    <input type="hidden" name="target" value="">
    <input name="name" type="text" placeholder="Ф.И.О.">
    <input name="phone" type="tel" placeholder="Телефон">
    <input type="checkbox" class="appointment__checkbox" name="legal" id="legal-popup">
    <label for="legal-popup" class="appointment__checkbox__label">Я даю согласие на обработку персональных данных, с условиями <a href="/legal.php" target="_blank">Политики обработки и защиты персональных данных</a> ознакомлен.</label>
    <button class="button appointment__submit" type="submit" disabled><span class="text">Записаться</span></button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/js/app.min.js?v=<?=VER;?>"></script>
</body>
</html>