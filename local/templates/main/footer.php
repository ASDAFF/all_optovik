<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<?php
/**
 * @TODO make it visible only for need sections
 */
?>
<? if (true) : ?>
    <div class="container-fluid feedback__form">
        <div class="container">
            <div class="feedback__form__block">
                <div class="feedback__form__title">
                    <span>Будьте в курсе!</span>
                </div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:subscribe.form",
                    "subscribe",
                    array(
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                        "PAGE" => "#SITE_DIR#personal/subscribe/",
                        "SHOW_HIDDEN" => "N",
                        "USE_PERSONALIZATION" => "Y",
                        "COMPONENT_TEMPLATE" => "subscribe"
                    ),
                    false
                ); ?>
            </div>
        </div>
    </div>
<? endif; ?>

</div>
<footer>
    <div class="container-fluid footer">
        <div class="container">
            <div class="row">
                <div class="col-19 col-md-24">
                    <div class="footer__head">
                        <div class="footer__logo">
                            <img src="/assets/img/logo_white.png" alt="">
                        </div>
                        <? $APPLICATION->IncludeComponent("bitrix:search.title", "footer", Array(
                            "CATEGORY_0" => array(    // Ограничение области поиска
                                0 => "iblock_catalog",
                            ),
                            "CATEGORY_0_TITLE" => "",    // Название категории
                            "CATEGORY_0_iblock_catalog" => array(    // Искать в информационных блоках типа "iblock_catalog"
                                0 => "4",
                            ),
                            "CHECK_DATES" => "N",    // Искать только в активных по дате документах
                            "CONTAINER_ID" => "title-search",    // ID контейнера, по ширине которого будут выводиться результаты
                            "CONVERT_CURRENCY" => "N",    // Показывать цены в одной валюте
                            "INPUT_ID" => "title-search-input",    // ID строки ввода поискового запроса
                            "NUM_CATEGORIES" => "1",    // Количество категорий поиска
                            "ORDER" => "date",    // Сортировка результатов
                            "PAGE" => "#SITE_DIR#search/",    // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                            "PREVIEW_HEIGHT" => "75",    // Высота картинки
                            "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода
                            "PREVIEW_WIDTH" => "75",    // Ширина картинки
                            "PRICE_CODE" => "",    // Тип цены
                            "PRICE_VAT_INCLUDE" => "N",    // Включать НДС в цену
                            "SHOW_INPUT" => "Y",    // Показывать форму ввода поискового запроса
                            "SHOW_OTHERS" => "N",    // Показывать категорию "прочее"
                            "SHOW_PREVIEW" => "Y",    // Показать картинку
                            "TOP_COUNT" => "5",    // Количество результатов в каждой категории
                            "USE_LANGUAGE_GUESS" => "Y",    // Включить автоопределение раскладки клавиатуры
                        ),
                            false
                        ); ?>
                        <div class="footer__search">
                            <div class="footer__search__input">
                                <input class="footer__search__input__control core__form__input__control core__form__input__control"
                                       placeholder="Поиск поставщика">
                            </div>
                            <div class="footer__search__btn">
                                <button class="footer__search__btn__control core__btn">найти</button>
                            </div>
                        </div>
                    </div>
                    <ul class="footer__menu" data-js-core-resize="menu" data-js-core-resize-width="lg">
                        <li class="footer__menu__group">
                            <? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/sub_menu1_title.php'); ?>
                            <? $APPLICATION->IncludeComponent('bitrix:menu', 'top_submenu', array(
                                'ALLOW_MULTI_SELECT' => 'N',
                                'ROOT_MENU_TYPE' => 'top_sub1',
                                'CHILD_MENU_TYPE' => 'left',
                                'DELAY' => 'N',
                                'MAX_LEVEL' => 1,
                                'MENU_CACHE_GET_VARS' => array(),
                                'MENU_CACHE_TIME' => '3600',
                                'MENU_CACHE_TYPE' => 'A',
                                'MENU_CACHE_USE_GROUPS' => 'N',
                                'USE_EXT' => 'Y',
                                'COMPONENT_TEMPLATE' => '',
                            )); ?>
                        </li>
                        <li class="footer__menu__group">
                            <? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/sub_menu2_title.php'); ?>
                            <? $APPLICATION->IncludeComponent('bitrix:menu', 'top_submenu', array(
                                'ALLOW_MULTI_SELECT' => 'N',
                                'ROOT_MENU_TYPE' => 'top_sub2',
                                'CHILD_MENU_TYPE' => 'left',
                                'DELAY' => 'N',
                                'MAX_LEVEL' => 1,
                                'MENU_CACHE_GET_VARS' => array(),
                                'MENU_CACHE_TIME' => '3600',
                                'MENU_CACHE_TYPE' => 'A',
                                'MENU_CACHE_USE_GROUPS' => 'N',
                                'USE_EXT' => 'Y',
                                'COMPONENT_TEMPLATE' => '',
                            )); ?>
                        </li>
                        <li class="footer__menu__group">
                            <? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/sub_menu3_title.php'); ?>
                            <? $APPLICATION->IncludeComponent('bitrix:menu', 'top_submenu', array(
                                'ALLOW_MULTI_SELECT' => 'N',
                                'ROOT_MENU_TYPE' => 'top_sub3',
                                'CHILD_MENU_TYPE' => 'left',
                                'DELAY' => 'N',
                                'MAX_LEVEL' => 1,
                                'MENU_CACHE_GET_VARS' => array(),
                                'MENU_CACHE_TIME' => '3600',
                                'MENU_CACHE_TYPE' => 'A',
                                'MENU_CACHE_USE_GROUPS' => 'N',
                                'USE_EXT' => 'Y',
                                'COMPONENT_TEMPLATE' => '',
                            )); ?>
                        </li>
                        <li class="footer__menu__group">
                            <? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/sub_menu4_title.php'); ?>
                            <? $APPLICATION->IncludeComponent('bitrix:menu', 'top_submenu', array(
                                'ALLOW_MULTI_SELECT' => 'N',
                                'ROOT_MENU_TYPE' => 'top_sub4',
                                'CHILD_MENU_TYPE' => 'left',
                                'DELAY' => 'N',
                                'MAX_LEVEL' => 1,
                                'MENU_CACHE_GET_VARS' => array(),
                                'MENU_CACHE_TIME' => '3600',
                                'MENU_CACHE_TYPE' => 'A',
                                'MENU_CACHE_USE_GROUPS' => 'N',
                                'USE_EXT' => 'Y',
                                'COMPONENT_TEMPLATE' => '',
                            )); ?>
                        </li>
                    </ul>
                </div>
                <div class="col-5 col-md-24">
                    <div class="footer__title">
                        <span><? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/contacts_title.php'); ?></span>
                    </div>
                    <? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/social.php'); ?>
                    <div class="footer__line"></div>
                    <div class="footer__phone">
                        <? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/phones.php'); ?>
                    </div>
                    <div class="footer__line"></div>
                    <div class="footer__email">
                        <? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/email_link.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer_down">
        <div class="container">
            <span><? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/copyright.php'); ?></span>
        </div>
    </div>
</footer>


<div class="core__modal core__modal__add" id="core__modal__add">
    <div class="core__form">
        <div class="core__form__title">
            <span>Оставить запрос</span>
        </div>
        <div class="core__form__input">
            <input class="core__form__input__control" placeholder="Ваше имя и фамилия">
        </div>
        <div class="core__form__input">
            <input class="core__form__input__control" placeholder="Электронная почта">
        </div>
        <div class="core__form__input">
            <input class=" core__form__input__control" placeholder="Контактный телефон">
        </div>
        <div class="core__form__input">
            <input class="core__form__input__control" placeholder="Название компании (не обязательно)">
            <div class="core__form__input__log core__form__input__log_danger">sdsds</div>
        </div>
        <div class="core__form__textarea">
            <textarea class="core__form__textarea__control" placeholder="Введите Ваш запрос"></textarea>
        </div>
        <div class="core__form__check">
            <div class="core__form__checkbox">
                <input id="form__checkbox__personal" type="checkbox">
                <label for="form__checkbox__personal">
                    <small>
                        Даю согласие на обработку персональных данных в соответствии с федеральным законом «О персональных данных» от 27.07.2006 N
                        152-ФЗ
                    </small>
                </label>
            </div>
        </div>
        <br>
        <div class="css_text-center">
            <div class="core__form__btn">
                <button class="core__form__btn__control core__btn core__btn_hidden">отправить</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
