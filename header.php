<?php define('VER', time()); ?>
<?php include "functions.php"; ?>
<?php define('PHONE1', '+7 812 406-88-88'); ?>
<?php define('PHONE2', '+7 812 406-88-88'); ?>
<?php define('EMAIL', 'info@sogaz-kuban.ru'); ?>
<?php define('CITY', 'г. Геленджик'); ?>
<?php define('ADDRESS', 'ул. Луначарского 176'); ?>
<?php define('COORDS', '44.580572, 38.067449'); ?>
<?php define('ZOOM', 15); ?>

<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?=VER;?>">
    <link rel="icon" type="image/png" href="/img/favicon.png" />
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__table">
            <div class="header__cell">
                <a class="header__logo" href="/"><img src="/img/sogaz-medicine.svg?v=2"></a>
            </div>
            <div class="header__cell mobile-menu__nav js-mobile-nav">
                <form action="/search/" method="get" class="search search--right">
                    <div class="search__input__wrapper">
                        <?=inline_svg('search')?>
                        <input type="text" name="q" placeholder="Поиск по сайту" class="search__input">
                    </div>
                    <div class="search__submit__wrapper">
                        <button type="submit" class="search__submit">Найти</button>
                    </div>
                </form>
                <ul class="header__menu">
                    <li><a class="white active" href="/about.php">О центре</a></li>
                    <li><a class="white" href="/services.php">Услуги и цены</a></li>
                    <li><a class="white" href="/departments.php">Отделения</a></li>
                    <li><a class="white" href="/staff.php">Специалисты</a></li>
                    <li><a class="white" href="/publications.php">Публикации</a></li>
                    <li><a class="white" href="/contacts.php">Контакты</a></li>
                </ul>
            </div>
            <div class="header__cell text-center hide-on-tablet">
                <a href="#appointment-popup" class="button header__appointment js-show-popup" data-target="Страница XXX">ЗАПИСАТЬСЯ НА ПРИЁМ</a>
            </div>
            <div class="header__cell">
                <a href="tel:<?=filter_phone(PHONE1);?>" class="header__phone white"><?=PHONE1;?></a>
                <? if (PHONE2) : ?><a href="tel:<?=filter_phone(PHONE2);?>" class="header__phone white"><?=PHONE2;?></a><? endif ?>
                <p class="header__address"><?=CITY;?><br><?=ADDRESS;?></p>
            </div>
        </div>
    </div>
</header>