<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="76x76" href="/">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png"/>

    <!-- SEO -->
    <title><?=$arParam['title']?></title>
    <meta name="description" content="<?=$arParam['description']?>"/>
    <meta name="robots" content="noodp"/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$arParam['title']?>" />
    <meta property="og:description" content="<?=$arParam['description']?>" />
    <meta property="og:url" content="http://sitename.com/" />
    <meta property="og:site_name" content="Название сайта" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="/assets/js/lib/fancybox/fancybox.min.css" type='text/css'/>
    <link rel="stylesheet" href="/assets/css/style.min.css" type='text/css' media='all' />
</head>
<body class="body-content">
    <header>
        <!-- MOBILE MENU -->
        <div class="core__menu-nav__mobile__alert">
            <!-- После адоптации - это меню откроется  -->
            <div class="core__menu-nav__mobile__alert__user">
                <div class="core__menu-nav__mobile__alert__user__login">
                    <a href="" title="Вход">Вход</a>
                    <a href="" title="Регистрация">Регистрация</a>
                </div>
            </div>
            <div class="core__menu-nav__mobile__alert__menu" data-core-name="Меню" data-js-core-resize-after="menu">
            </div>
        </div>
        <div class="core__menu-nav__mobile__button">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- END MOBILE MENU -->
        <div class="header container-fluid active">
            <!--
            * active только на главной
            -->
            <div class="container">
                <div class="header__top">
                    <div class="header__logo">
                        <a href="/" title="logo">
                            <img src="/assets/img/logo.png" alt="logo">
                            <span>Рекламная площадка для оптовых<br>продавцов и покупателей</span>
                        </a>
                    </div>
                    <div class="header__banner">
                        <a href="" title="" style="background-image: url('/assets/img/header/banner.jpg')"></a>
                    </div>
                    <div class="header__form">
                        <div class="header__form__btn">
                            <a href="" title="" class="header__form__btn__login">Вход</a>
                            <span>|</span>
                            <a href="" title="" class="header__form__btn__registration">Регистрация</a>
                        </div>
                        <div class="header__form__search">
                            <div class="header__form__search__input">
                                <input class="header__form__search__input__control" type="text" placeholder="Поиск">
                                <button class="header__form__search__btn"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid header__menu">
                <div class="container">
                    <nav class="header__menu__line">
                        <ul>
                            <li>
                                <a href="#" title=""data-js-core-switch-element="header">Женская одежда оптом</a>
                            </li>
                            <li>
                                <a href="#" title="" data-js-core-switch-element="header">Одежда и товары для детей</a>
                            </li>
                            <li>
                                <a href="#" title="" data-js-core-switch-element="header">Красота и здоровье</a>
                            </li>
                            <li>
                                <a href="#" title="" data-js-core-switch-element="header">Хозяйственные товары</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="container-fluid">
                <div class="container">
                    <nav class="header__menu__list">
                        <ul>
                            <li><a href="" title=""> Производители женской одежды</a></li>
                            <li><a href="" title="">Трикотаж оптом</a></li>
                            <li><a href="" title="">Одежда больших размеров</a></li>
                            <li><a href="" title="">Домашняя одежда оптом</a></li>
                            <li><a href="" title="">Платья, сарафаны оптом</a></li>
                            <li><a href="" title="">Блузки, туники, рубашки оптом</a></li>
                            <li><a href="" title="">Юбки, брюки оптом</a></li>
                        </ul>
                        <ul>
                            <li><a href="" title="">Одежда для новорожденных</a></li>
                            <li><a href="" title="">Детский трикотаж оптом</a></li>
                            <li><a href="" title="">Подростковая одежда оптом</a></li>
                            <li><a href="" title="">Школьная форма оптом</a></li>
                            <li><a href="" title="">Детская одежда для мальчиков</a></li>
                            <li><a href="" title="">Детская одежда для девочек</a></li>
                            <li><a href="" title="">Памперсы, подгузники оптом</a></li>
                        </ul>
                        <ul>
                            <li><a href="" title="">Крема, лосьоны, маски</a></li>
                            <li><a href="" title="">Уход за детской кожей</a></li>
                            <li><a href="" title="">Парфюмерия, косметика</a></li>
                        </ul>
                        <ul>
                            <li><a href="" title="">Бытовая химия оптом</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="container-fluid core__line"></div>
        </div>
    </header>
    <div class="body-main" role="main">