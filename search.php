<?php include "header.php"; ?>
    <div class="content">
        <div class="container">
            <ul class="breadcrumbs"><li><a href="/">Главная</a></li><li>Поиск</li></ul>

            <h1>Поиск</h1>

            <form action="/search/" method="get" class="search">
                <div class="search__input__wrapper search__input__wrapper--primary">
                    <?=inline_svg('search')?>
                    <input type="text" name="q" placeholder="Поиск по сайту" class="search__input">
                </div>
                <div class="search__submit__wrapper">
                    <button type="submit" class="search__submit button--primary-outline">Найти</button>
                </div>
            </form>

            <div class="search-result">
                <div class="search-result__path"><a href="/">Главная</a>&nbsp;/&nbsp;<a href="/services/">Услуги</a></div>
                <a href="/services/diagnosis/ultrasound-of-the-pelvic-organs/?sphrase_id=8373" class="search-result__title"><b>УЗИ</b> органов малого таза</a>
                <p>Ультразвуковое исследование (<b>УЗИ</b>) органов малого таза является одним из наиболее информативных методов диагностики в современной гинекологии, который позволяет контролировать ... </p>
            </div>

        </div>
    </div>


<?php include "footer.php";