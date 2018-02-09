<?php include "header.php"; ?>
    <div class="content">
        <div class="container">
            <ul class="breadcrumbs"><li><a href="/">Главная</a></li><li>Отделения</li></ul>

            <h1>Отделения</h1>

            <div class="departments">
                <div class="departments__item">
                    <?=inline_svg('ambulance')?>
                    <div class="departments__item__inner">
                        <a class="departments__item__title" href="/department.php">Амбулаторно-поликлиническое отделение</a>
                        <ul class="departments__item__sub">
                            <li><a href="/departments2.php">Терапия</a></li>
                            <li><a href="/departments2.php">Неврология</a></li>
                            <li><a href="/departments2.php">Эндокринология</a></li>
                            <li><a href="/departments2.php">Дерматовенерология</a></li>
                            <li><a href="/departments2.php">Офтальмология</a></li>
                            <li><a href="/departments2.php">Кардиология</a></li>
                            <li><a href="/departments2.php">Гастроэнтерология</a></li>
                            <li><a href="/departments2.php">Реабилитация</a></li>
                            <li><a href="/departments2.php">Аллергология</a></li>
                            <li><a href="/departments2.php">Травматология и ортопедия</a></li>
                            <li><a href="/departments2.php">Оториноларингология</a></li>
                            <li><a href="/departments2.php">Гинекология</a></li>
                            <li><a href="/departments2.php">Урология</a></li>
                            <li><a href="/departments2.php">Флебология</a></li>
                            <li><a href="/departments2.php">Хирургия</a></li>
                        </ul>
                    </div>
                </div>

                <div class="departments__item">
                    <?=inline_svg('shc')?>
                    <div class="departments__item__inner">
                        <a class="departments__item__title" href="/department.php">Отделение стационара</a>
                        <ul class="departments__item__sub">
                            <li>Терапия стационара</li>
                            <li>Хирургия стационара</li>
                            <li>ОАРИТ</li>
                        </ul>
                    </div>
                </div>

                <div class="departments__item">
                    <?=inline_svg('diagnostics')?>
                    <div class="departments__item__inner">
                        <a class="departments__item__title" href="/department.php">Отделение диагностики</a>
                        <ul class="departments__item__sub">
                            <li><a href="/departments2.php">Лаборатория</a></li>
                            <li><a href="/departments2.php">КТ, МРТ, УЗИ, рентген</a></li>
                            <li><a href="/departments2.php">Эндоскопия</a></li>
                            <li><a href="/departments2.php">Функциональная диагностика</a></li>
                        </ul>
                    </div>
                </div>

                <div class="departments__item">
                    <?=inline_svg('stomatology')?>
                    <div class="departments__item__inner">
                        <a class="departments__item__title" href="/department.php">Стоматологическое отделение</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include "footer.php";