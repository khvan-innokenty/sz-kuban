<?php include "header.php"; ?>
    <div class="content">
        <div class="container">
            <ul class="breadcrumbs"><li><a href="/">Главная</a></li><li><a href="/departments.php">Отделения</a></li><li><a href="/department.php">Амбулаторно-поликлиническое отделение</a></li><li><a href="/departments2.php">Терапия</a></li><li>Lorem ipsum dolor sit amet</li></ul>

            <div class="hero__wrapper" style="background-image: url('/img/department-hero.jpg')">
                <div class="hero">
                    <?=inline_svg('ambulance')?>
                    <h1>Lorem ipsum dolor sit amet</h1>
                </div>
            </div>

            <h2>Описание</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>

            <h2>Специалисты</h2>
            <div class="staff js-staff">
                <div class="staff__container js-staff-items">
                    <div class="staff__item">
                        <a href="/staff2.php" class="staff__item__avatar" style="background-image: url('http://via.placeholder.com/250x300?text=DOC')"></a>
                        <a href="/staff2.php" class="staff__item__name">Константинопольский Константин Константинович</a>
                        <p class="staff__item__position">Заведующий отделением</p>
                    </div>
                    <div class="staff__item">
                        <a href="/staff2.php" class="staff__item__avatar" style="background-image: url('http://via.placeholder.com/250x300?text=DOC')"></a>
                        <a href="/staff2.php" class="staff__item__name">Константинопольский Константин Константинович</a>
                        <p class="staff__item__position">Заведующий отделением</p>
                    </div>
                    <div class="staff__item">
                        <a href="/staff2.php" class="staff__item__avatar" style="background-image: url('http://via.placeholder.com/250x300?text=DOC')"></a>
                        <a href="/staff2.php" class="staff__item__name">Константинопольский Константин Константинович</a>
                        <p class="staff__item__position">Заведующий отделением</p>
                    </div>
                    <div class="staff__item">
                        <a href="/staff2.php" class="staff__item__avatar" style="background-image: url('http://via.placeholder.com/250x300?text=DOC')"></a>
                        <a href="/staff2.php" class="staff__item__name">Константинопольский Константин Константинович</a>
                        <p class="staff__item__position">Заведующий отделением</p>
                    </div>
                    <div class="staff__item">
                        <a href="/staff2.php" class="staff__item__avatar" style="background-image: url('http://via.placeholder.com/250x300?text=DOC')"></a>
                        <a href="/staff2.php" class="staff__item__name">Константинопольский Константин Константинович</a>
                        <p class="staff__item__position">Заведующий отделением</p>
                    </div>
                </div>
                <div class="staff__button__wrapper">
                    <button class="button staff__button button--primary-outline js-staff-button">Показать всех специалистов</button>
                </div>
            </div>

            <h2>Цены</h2>
            <ul class="pricelist">
                <li>
                    <div class="pricelist__item">
                        <div class="pricelist__item__title js-pricelist-item">Lorem ipsum dolor sit amet</div>
                        <div class="pricelist__item__description js-toggle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div class="pricelist__item__price js-toggle">999 999 руб.</div>
                        <a href="#appointment-popup" class="pricelist__item__button js-toggle js-show-popup" data-target="Lorem ipsum dolor sit amet"><span>Записаться</span></a>
                    </div>
                </li>
                <li>
                    <div class="pricelist__item">
                        <div class="pricelist__item__title js-pricelist-item">Lorem ipsum dolor sit</div>
                        <div class="pricelist__item__description js-toggle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div class="pricelist__item__price js-toggle">999 999 руб.</div>
                        <a href="#appointment-popup" class="pricelist__item__button js-toggle js-show-popup" data-target="Lorem ipsum dolor sit"><span>Записаться</span></a>
                    </div>
                </li>
                <li>
                    <div class="pricelist__item">
                        <div class="pricelist__item__title js-pricelist-item">Lorem it amet</div>
                        <div class="pricelist__item__description js-toggle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div class="pricelist__item__price js-toggle">999 999 руб.</div>
                        <a href="#appointment-popup" class="pricelist__item__button js-toggle js-show-popup" data-target="Lorem it amet"><span>Записаться</span></a>
                    </div>
                </li>
                <li>
                    <div class="pricelist__item">
                        <div class="pricelist__item__title js-pricelist-item">Lorem dolor sit amet</div>
                        <div class="pricelist__item__description js-toggle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div class="pricelist__item__price js-toggle">999 999 руб.</div>
                        <a href="#appointment-popup" class="pricelist__item__button js-toggle js-show-popup" data-target="Lorem dolor sit amet"><span>Записаться</span></a>
                    </div>
                </li>
            </ul>

        </div>
    </div>


<?php include "footer.php";