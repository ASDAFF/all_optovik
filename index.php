<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>
    <div class="container-fluid blocks">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-24">
                    <div class="block block_h2">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "home_slider",
                            array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "N",
                                "DISPLAY_NAME" => "N",
                                "DISPLAY_PICTURE" => "N",
                                "DISPLAY_PREVIEW_TEXT" => "N",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => '2',
                                "IBLOCK_TYPE" => "content",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "N",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "20",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "Новости",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "left",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PROPERTY_CODE" => array(
                                    0 => "LINK",
                                    1 => "",
                                ),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "SORT",
                                "SORT_BY2" => "ID",
                                "SORT_ORDER1" => "ASC",
                                "SORT_ORDER2" => "DESC",
                                "STRICT_SECTION_CHECK" => "N",
                                "COMPONENT_TEMPLATE" => "home_slider"
                            ),
                            false
                        ); ?>
                    </div>
                </div>
                <div class="col-12 col-md-24">
                    <div class="row">
                        <div class="col-24">
                            <div class="block">
                                <? $APPLICATION->IncludeComponent("bitrix:news.list", "home_slider", Array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                                    "AJAX_MODE" => "N",    // Включить режим AJAX
                                    "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                    "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                    "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                    "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                    "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                    "CACHE_TYPE" => "A",    // Тип кеширования
                                    "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                    "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                    "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                                    "DISPLAY_DATE" => "N",    // Выводить дату элемента
                                    "DISPLAY_NAME" => "N",    // Выводить название элемента
                                    "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
                                    "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                                    "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                    "FIELD_CODE" => array(    // Поля
                                        0 => "",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",    // Фильтр
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                    "IBLOCK_ID" => '2',    // Код информационного блока
                                    "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                                    "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                                    "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                    "NEWS_COUNT" => "20",    // Количество новостей на странице
                                    "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                    "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                    "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                    "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                    "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                    "PAGER_TITLE" => "Новости",    // Название категорий
                                    "PARENT_SECTION" => "",    // ID раздела
                                    "PARENT_SECTION_CODE" => "top",    // Код раздела
                                    "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                    "PROPERTY_CODE" => array(    // Свойства
                                        0 => "LINK",
                                        1 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                                    "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                    "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                                    "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                                    "SET_STATUS_404" => "N",    // Устанавливать статус 404
                                    "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                                    "SHOW_404" => "N",    // Показ специальной страницы
                                    "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                                    "SORT_BY2" => "ID",    // Поле для второй сортировки новостей
                                    "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                                    "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
                                    "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                                ),
                                    false
                                ); ?>
                            </div>
                        </div>
                        <div class="col-24">
                            <div class="row">
                                <div class="col-12 col-md-24">
                                    <div class="block">
                                        <? $APPLICATION->IncludeComponent("bitrix:news.list", "home_slider", Array(
                                            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                                            "AJAX_MODE" => "N",    // Включить режим AJAX
                                            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                            "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                            "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                            "CACHE_TYPE" => "A",    // Тип кеширования
                                            "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                            "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                            "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                                            "DISPLAY_DATE" => "N",    // Выводить дату элемента
                                            "DISPLAY_NAME" => "N",    // Выводить название элемента
                                            "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
                                            "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                                            "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                            "FIELD_CODE" => array(    // Поля
                                                0 => "",
                                                1 => "",
                                            ),
                                            "FILTER_NAME" => "",    // Фильтр
                                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                            "IBLOCK_ID" => '2',    // Код информационного блока
                                            "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
                                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                                            "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                                            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                            "NEWS_COUNT" => "20",    // Количество новостей на странице
                                            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                            "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                            "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                            "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                            "PAGER_TITLE" => "Новости",    // Название категорий
                                            "PARENT_SECTION" => "",    // ID раздела
                                            "PARENT_SECTION_CODE" => "bottom_left",    // Код раздела
                                            "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                            "PROPERTY_CODE" => array(    // Свойства
                                                0 => "LINK",
                                                1 => "",
                                            ),
                                            "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                                            "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                            "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                                            "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                                            "SET_STATUS_404" => "N",    // Устанавливать статус 404
                                            "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                                            "SHOW_404" => "N",    // Показ специальной страницы
                                            "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                                            "SORT_BY2" => "ID",    // Поле для второй сортировки новостей
                                            "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                                            "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
                                            "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                                        ),
                                            false
                                        ); ?>
                                    </div>
                                </div>
                                <div class="col-12 col-md-24">
                                    <div class="block">
                                        <? $APPLICATION->IncludeComponent("bitrix:news.list", "home_slider", Array(
                                            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                                            "AJAX_MODE" => "N",    // Включить режим AJAX
                                            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                            "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                            "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                            "CACHE_TYPE" => "A",    // Тип кеширования
                                            "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                            "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                            "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                                            "DISPLAY_DATE" => "N",    // Выводить дату элемента
                                            "DISPLAY_NAME" => "N",    // Выводить название элемента
                                            "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
                                            "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                                            "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                            "FIELD_CODE" => array(    // Поля
                                                0 => "",
                                                1 => "",
                                            ),
                                            "FILTER_NAME" => "",    // Фильтр
                                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                            "IBLOCK_ID" => '2',    // Код информационного блока
                                            "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
                                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                                            "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                                            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                            "NEWS_COUNT" => "20",    // Количество новостей на странице
                                            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                            "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                            "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                            "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                            "PAGER_TITLE" => "Новости",    // Название категорий
                                            "PARENT_SECTION" => "",    // ID раздела
                                            "PARENT_SECTION_CODE" => "bottom_right",    // Код раздела
                                            "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                            "PROPERTY_CODE" => array(    // Свойства
                                                0 => "LINK",
                                                1 => "",
                                            ),
                                            "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                                            "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                            "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                                            "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                                            "SET_STATUS_404" => "N",    // Устанавливать статус 404
                                            "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                                            "SHOW_404" => "N",    // Показ специальной страницы
                                            "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                                            "SORT_BY2" => "ID",    // Поле для второй сортировки новостей
                                            "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                                            "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
                                            "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                                        ),
                                            false
                                        ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-24">
                    <div class="block block_h2">
                        <? $APPLICATION->IncludeComponent("bitrix:news.list", "home_slider", Array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                            "AJAX_MODE" => "N",    // Включить режим AJAX
                            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                            "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                            "CACHE_TYPE" => "A",    // Тип кеширования
                            "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                            "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                            "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                            "DISPLAY_DATE" => "N",    // Выводить дату элемента
                            "DISPLAY_NAME" => "N",    // Выводить название элемента
                            "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
                            "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                            "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                            "FIELD_CODE" => array(    // Поля
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",    // Фильтр
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                            "IBLOCK_ID" => '2',    // Код информационного блока
                            "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                            "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                            "NEWS_COUNT" => "20",    // Количество новостей на странице
                            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                            "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                            "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                            "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                            "PAGER_TITLE" => "Новости",    // Название категорий
                            "PARENT_SECTION" => "",    // ID раздела
                            "PARENT_SECTION_CODE" => "right",    // Код раздела
                            "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                            "PROPERTY_CODE" => array(    // Свойства
                                0 => "LINK",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                            "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                            "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                            "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                            "SET_STATUS_404" => "N",    // Устанавливать статус 404
                            "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                            "SHOW_404" => "N",    // Показ специальной страницы
                            "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                            "SORT_BY2" => "ID",    // Поле для второй сортировки новостей
                            "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                            "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
                            "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                        ),
                            false
                        ); ?>
                    </div>
                </div>
            </div>
            <div class="core__line_bg"></div>
        </div>
    </div>
    <div class="container-fluid page__index__about">
        <div class="container">
            <div class="page__index__about__title">
                <span><? \lema\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/about_company/title.php')); ?></span>
            </div>
            <div class="page__index__about__text">
                <p>
                    <? \lema\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/about_company/description.php')); ?>
                </p>
            </div>
            <div class="page__index__about__btn">
                <a href="javascript:void(0);" title="" class="core__btn" data-fancybox="modal" data-src="#core__modal__add">
                    <? \lema\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/about_company/button_title.php')); ?>
                </a>
            </div>
            <div class="core__line_bg"></div>
        </div>
    </div>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "banner_two_item",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "PREVIEW_PICTURE",
            2 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "two_banners",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "URL",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "banner_two_item",
        "FILE_404" => ""
    ),
    false
); ?>
    <div class="container-fluid utp">
        <div class="container">
            <div class="utp__title">
                <? \lema\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/advantages/title.php')); ?>
            </div>
            <div class="utp__btn" data-js-core-tabs-nav="utp">
                <a href="javascript:void(0);" title="" data-js-core-tabs-nav-id="1"
                   class="active"><? \lema\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/advantages/provider.php')); ?></a>
                <a href="javascript:void(0);" title=""
                   data-js-core-tabs-nav-id="2"><? \lema\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/advantages/buyer.php')); ?></a>
            </div>
            <div data-js-core-tabs="utp">
                <div data-js-core-tabs-id="1" class="active">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "advantages",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "N",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "N",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "PREVIEW_TEXT",
                                2 => "PREVIEW_PICTURE",
                                3 => "DATE_ACTIVE_FROM",
                                4 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "3",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "provider",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "LINK",
                                2 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "Y",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "Y",
                            "SORT_BY1" => "SORT",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "advantages",
                            "FILE_404" => ""
                        ),
                        false
                    ); ?>
                </div>
                <div data-js-core-tabs-id="2">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "advantages",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "N",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "N",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "PREVIEW_TEXT",
                                2 => "PREVIEW_PICTURE",
                                3 => "DATE_ACTIVE_FROM",
                                4 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "3",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "buyer",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "LINK",
                                2 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "Y",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "Y",
                            "SORT_BY1" => "SORT",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "advantages",
                            "FILE_404" => ""
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
    </div>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "offers",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "PREVIEW_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "offers_banner",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "URL",
            1 => "",
            2 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "N",
        "SHOW_404" => "Y",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "offers",
        "FILE_404" => ""
    ),
    false
); ?>
    <div class="container">
        <div class="core__title">
            <span class="core__title__control">
                <? \Lema\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/wholesale_platforms.php')); ?>
            </span>
        </div>
    </div>
    <br>
<? $APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "catalog_category_slider",
    array(
        "ADD_SECTIONS_CHAIN" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COUNT_ELEMENTS" => "N",
        "IBLOCK_ID" => "4",
        "IBLOCK_TYPE" => "catalog",
        "SECTION_CODE" => "",
        "SECTION_FIELDS" => array(
            0 => "",
            1 => "",
        ),
        "SECTION_ID" => "",
        "SECTION_URL" => "",
        "SECTION_USER_FIELDS" => array(
            0 => "",
            1 => "",
        ),
        "SHOW_PARENT_NAME" => "Y",
        "TOP_DEPTH" => "2",
        "VIEW_MODE" => "LINE",
        "COMPONENT_TEMPLATE" => "catalog_category_slider"
    ),
    false
); ?>

    <div class="container-fluid inquiries">
        <div class="container">
            <div class="inquiries__title">
                <span>Запросы и предложения</span>
            </div>
            <div class="inquiries__blocks">

                <div class="inquiries__block">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "requests_and_suggestions",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "Y",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "Y",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "N",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "PREVIEW_TEXT",
                                1 => "DATE_ACTIVE_FROM",
                                2 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "8",
                            "IBLOCK_TYPE" => "catalog",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "3",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "news",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "OPT_USER",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "Y",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "Y",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "requests_and_suggestions",
                            "FILE_404" => ""
                        ),
                        false
                    ); ?>
                </div>
                <div class="inquiries__block">
                    <div class="inquiries__block__name">
                        <span>Предложения поставщиков</span>
                    </div>
                    <div class="inquiries__block__list">
                        <a href="" title="" class="inquiries__block__item">
                            <div class="inquiries__block__item__img">
                                <img src="/assets/img/brand/img-1.jpg">
                            </div>
                            <div class="inquiries__block__item__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.?</p>
                            </div>
                            <div class="inquiries__block__item__date">
                                <span>10.11.2017</span>
                            </div>
                        </a>
                        <a href="" title="" class="inquiries__block__item">
                            <div class="inquiries__block__item__img">
                                <img src="/assets/img/brand/img-2.jpg">
                            </div>
                            <div class="inquiries__block__item__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.?</p>
                            </div>
                            <div class="inquiries__block__item__date">
                                <span>10.11.2017</span>
                            </div>
                        </a>
                        <a href="" title="" class="inquiries__block__item">
                            <div class="inquiries__block__item__img">
                                <img src="/assets/img/brand/img-3.jpg">
                            </div>
                            <div class="inquiries__block__item__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.?</p>
                            </div>
                            <div class="inquiries__block__item__date">
                                <span>10.11.2017</span>
                            </div>
                        </a>
                    </div>
                    <div class="inquiries__block__all">
                        <span>Общее количество предложений - 3000</span>
                    </div>
                    <div class="inquiries__block__btn">
                        <a href="" title="" class="core__btn core__btn_hidden">
                            <span>больше предложений</span>
                        </a>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
<? include('test/template/inquiries.php'); ?>
    <div class="core__line"></div>
    <div class="container-fluid">
        <div class="container">
            <div class="menu__block" data-js-core-tabs-nav="block">
                <a class="menu__block__item menu__block__item_news active" href="javascript:void(0);" title="" data-js-core-tabs-nav-id="1">
                    <? \Lema\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/information_block/news.php')); ?>
                </a>
                <a class="menu__block__item menu__block__item_articles" href="javascript:void(0);" title="" data-js-core-tabs-nav-id="2">
                    <? \Lema\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/information_block/articles.php')); ?>
                </a>
                <a class="menu__block__item menu__block__item_actions" href="javascript:void(0);" title="" data-js-core-tabs-nav-id="3">
                    <? \Lema\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/information_block/shares.php')); ?>
                </a>
            </div>
            <div class="core__line_bg"></div>
        </div>
    </div>
    <div class="container-fluid news">
        <div class="container">
            <div data-js-core-tabs="block">
                <div data-js-core-tabs-id="1" class="active">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "tab_news_list",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "Y",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "Y",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "N",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "PREVIEW_TEXT",
                                2 => "PREVIEW_PICTURE",
                                3 => "DATE_ACTIVE_FROM",
                                4 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "6",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "3",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "news",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "Y",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "Y",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "tab_news_list",
                            "FILE_404" => ""
                        ),
                        false
                    ); ?>
                </div>
                <div data-js-core-tabs-id="2">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "tab_news_list",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "Y",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "Y",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "N",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "PREVIEW_TEXT",
                                2 => "PREVIEW_PICTURE",
                                3 => "DATE_ACTIVE_FROM",
                                4 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "6",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "3",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "articles",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "Y",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "Y",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "tab_news_list",
                            "FILE_404" => ""
                        ),
                        false
                    ); ?>
                </div>
                <div data-js-core-tabs-id="3">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "tab_news_list",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "Y",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "Y",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "N",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "PREVIEW_TEXT",
                                2 => "PREVIEW_PICTURE",
                                3 => "DATE_ACTIVE_FROM",
                                4 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "6",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "3",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "actions",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "Y",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "Y",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "tab_news_list",
                            "FILE_404" => ""
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
    </div>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "banner_two_item",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "PREVIEW_PICTURE",
            2 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "two_banners",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "URL",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "banner_two_item",
        "FILE_404" => ""
    ),
    false
); ?>
    <div class="container-fluid work">
        <div class="container">
            <div class="work__title">
                <span><? \Lema\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/home/work.php')); ?></span>
            </div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "work-slider",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "NAME",
                        1 => "PREVIEW_PICTURE",
                        2 => "",
                    ),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "7",
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "LINK",
                        1 => "",
                    ),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "Y",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "Y",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                    "COMPONENT_TEMPLATE" => "work-slider",
                    "FILE_404" => ""
                ),
                false
            ); ?>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>