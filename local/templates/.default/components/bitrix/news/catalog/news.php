<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<? if($arParams["USE_RSS"] == "Y"): ?>
    <?
    if(method_exists($APPLICATION, 'addheadstring'))
        $APPLICATION->AddHeadString('<link rel="alternate" type="application/rss+xml" title="' . $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["rss"] . '" href="' . $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["rss"] . '" />');
    ?>
    <a href="<?=$arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["rss"]?>" title="rss" target="_self"><img alt="RSS"
                                                                                                           src="<?=$templateFolder?>/images/gif-light/feed-icon-16x16.gif"
                                                                                                           border="0" align="right"/></a>
<? endif ?>

<? if($arParams["USE_SEARCH"] == "Y"): ?>
    <?=GetMessage("SEARCH_LABEL")?><? $APPLICATION->IncludeComponent(
        "bitrix:search.form",
        "flat",
        Array(
            "PAGE" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["search"],
        ),
        $component
    ); ?>
    <br/>
<? endif ?>
<? if($arParams["USE_FILTER"] == "Y"): ?>
    <? $APPLICATION->IncludeComponent(
        "bitrix:catalog.filter",
        "",
        Array(
            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
            "FILTER_NAME" => $arParams["FILTER_NAME"],
            "FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
            "PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
            "CACHE_TIME" => $arParams["CACHE_TIME"],
            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
            "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
        ),
        $component
    );
    ?>
    <br/>
<? endif ?>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "",
    Array(
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "NEWS_COUNT" => $arParams["NEWS_COUNT"],
        "SORT_BY1" => $arParams["SORT_BY1"],
        "SORT_ORDER1" => $arParams["SORT_ORDER1"],
        "SORT_BY2" => $arParams["SORT_BY2"],
        "SORT_ORDER2" => $arParams["SORT_ORDER2"],
        "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
        "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
        "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
        "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
        "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
        "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
        "SET_TITLE" => $arParams["SET_TITLE"],
        "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
        "MESSAGE_404" => $arParams["MESSAGE_404"],
        "SET_STATUS_404" => $arParams["SET_STATUS_404"],
        "SHOW_404" => $arParams["SHOW_404"],
        "FILE_404" => $arParams["FILE_404"],
        "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_FILTER" => $arParams["CACHE_FILTER"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
        "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
        "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
        "PAGER_TITLE" => $arParams["PAGER_TITLE"],
        "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
        "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
        "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
        "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
        "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
        "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
        "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
        "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
        "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
        "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
        "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
        "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
        "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
        "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
        "FILTER_NAME" => $arParams["FILTER_NAME"],
        "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
        "CHECK_DATES" => $arParams["CHECK_DATES"],
    ),
    $component
); ?>

    <div class="container-fluid">
        <div class="container">
            <div class="banner__three">
                <a href="" title="" class="banner__three__item">
                    <img class="banner__three__item__img" src="/assets/img/banner_three/img-1.jpg" title="">
                    <div class="banner__three__item__work">
                        <img src="/assets/img/work/img-1.jpg" title="">
                    </div>
                </a>
                <a href="" title="" class="banner__three__item">
                    <img class="banner__three__item__img" src="/assets/img/banner_three/img-2.jpg" title="">
                    <div class="banner__three__item__work">
                        <img src="/assets/img/work/img-2.jpg" title="">
                    </div>
                </a>
                <a href="" title="" class="banner__three__item">
                    <img class="banner__three__item__img" src="/assets/img/banner_three/img-3.jpg" title="">
                    <div class="banner__three__item__work">
                        <img src="/assets/img/work/img-3.jpg" title="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="catalog__list">
            <!-- LIST  -->
            <div class="catalog__list__item">
                <div class="core__line_bg"></div>
                <div class="catalog__list__item__wrap">
                    <div class="catalog__list__item__main">
                        <a href="" title="" class="catalog__list__item__img">
                            <img class="catalog__list__item__img__control" src="/assets/img/news/img-1.jpg">
                            <span class="catalog__list__item__img__work">
                            <img src="/assets/img/work/img-2.jpg" title="">
                        </span>
                        </a>
                        <a href="" title="" class="catalog__list__item__text">
                            <span class="catalog__list__item__text__title">Компания со статусом VIP  3</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet
                                lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci,
                                sed rhoncus sapien nunc eget odio.
                            </p>
                            <span class="catalog__list__item__text__mini-title">Товары производителя</span>
                        </a>
                    </div>
                    <div class="catalog__list__item__footer">
                        <div class="catalog__list__item__list">
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-1.jpg" alt="">
                                </div>
                            </a>
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-2.jpg" alt="">
                                </div>
                            </a>
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-3.jpg" alt="">
                                </div>
                            </a>
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-1.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="catalog__list__item__inf">
                            <span class="catalog__list__item__inf__price-text">Минимальная цена закупки</span>
                            <span class="catalog__list__item__inf__price">5000 руб.</span>
                            <a href="" class="core__btn">отправить запрос</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog__list__item">
                <div class="core__line_bg"></div>
                <div class="catalog__list__item__wrap">
                    <div class="catalog__list__item__main">
                        <a href="" title="" class="catalog__list__item__img">
                            <img class="catalog__list__item__img__control" src="/assets/img/news/img-1.jpg">
                            <span class="catalog__list__item__img__work">
                            <img src="/assets/img/work/img-2.jpg" title="">
                        </span>
                        </a>
                        <a href="" title="" class="catalog__list__item__text">
                            <span class="catalog__list__item__text__title">Компания со статусом VIP  3</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet
                                lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci,
                                sed rhoncus sapien nunc eget odio.
                            </p>
                            <span class="catalog__list__item__text__mini-title">Товары производителя</span>
                        </a>
                    </div>
                    <div class="catalog__list__item__footer">
                        <div class="catalog__list__item__list">
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-1.jpg" alt="">
                                </div>
                            </a>
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-2.jpg" alt="">
                                </div>
                            </a>
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-3.jpg" alt="">
                                </div>
                            </a>
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-1.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="catalog__list__item__inf">
                            <span class="catalog__list__item__inf__price-text">Минимальная цена закупки</span>
                            <span class="catalog__list__item__inf__price">5000 руб.</span>
                            <a href="" class="core__btn">отправить запрос</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog__list__item">
                <div class="core__line_bg"></div>
                <div class="catalog__list__item__wrap">
                    <div class="catalog__list__item__main">
                        <a href="" title="" class="catalog__list__item__img">
                            <img class="catalog__list__item__img__control" src="/assets/img/news/img-1.jpg">
                            <span class="catalog__list__item__img__work">
                            <img src="/assets/img/work/img-2.jpg" title="">
                        </span>
                        </a>
                        <a href="" title="" class="catalog__list__item__text">
                            <span class="catalog__list__item__text__title">Компания со статусом VIP  3</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet
                                lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci,
                                sed rhoncus sapien nunc eget odio.
                            </p>
                            <span class="catalog__list__item__text__mini-title">Товары производителя</span>
                        </a>
                    </div>
                    <div class="catalog__list__item__footer">
                        <div class="catalog__list__item__list">
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-1.jpg" alt="">
                                </div>
                            </a>
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-2.jpg" alt="">
                                </div>
                            </a>
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-3.jpg" alt="">
                                </div>
                            </a>
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-1.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="catalog__list__item__inf">
                            <span class="catalog__list__item__inf__price-text">Минимальная цена закупки</span>
                            <span class="catalog__list__item__inf__price">5000 руб.</span>
                            <a href="" class="core__btn">отправить запрос</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog__list__item">
                <div class="core__line_bg"></div>
                <div class="catalog__list__item__wrap">
                    <div class="catalog__list__item__main">
                        <a href="" title="" class="catalog__list__item__img">
                            <img class="catalog__list__item__img__control" src="/assets/img/news/img-1.jpg">
                            <span class="catalog__list__item__img__work">
                            <img src="/assets/img/work/img-2.jpg" title="">
                        </span>
                        </a>
                        <a href="" title="" class="catalog__list__item__text">
                            <span class="catalog__list__item__text__title">Компания со статусом VIP  3</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet
                                lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                                parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci,
                                sed rhoncus sapien nunc eget odio.
                            </p>
                            <span class="catalog__list__item__text__mini-title">Товары производителя</span>
                        </a>
                    </div>
                    <div class="catalog__list__item__footer">
                        <div class="catalog__list__item__list">
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-1.jpg" alt="">
                                </div>
                            </a>
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-2.jpg" alt="">
                                </div>
                            </a>
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-3.jpg" alt="">
                                </div>
                            </a>
                            <a href="" title="" class="catalog__list__item__list__item">
                                <div class="catalog__list__item__list__item__wrap">
                                    <img src="/assets/img/catalog/jacket/img-1.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="catalog__list__item__inf">
                            <span class="catalog__list__item__inf__price-text">Минимальная цена закупки</span>
                            <span class="catalog__list__item__inf__price">5000 руб.</span>
                            <a href="" class="core__btn">отправить запрос</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="core__line_bg"></div>
        <div class="pagination">
            <ul>
                <li><a href="" title="" class="pagination__button"><</a></li>
                <li><a href="" title="">1</a></li>
                <li><span>2</span></li>
                <li><span class="active">3</span></li>
                <li><a href="" title="">4</a></li>
                <li><a href="" title="" class="pagination__button">></a></li>
                <li><a href="" title="" class="pagination__button">>></a></li>
            </ul>
            <a href="" class="core__btn" title="вернуться на главную страницу">вернуться на главную страницу</a>
        </div>
    </div>
    <br>
<? include($_SERVER['DOCUMENT_ROOT'] . '/test/template/banner-2.php'); ?>
    <div class="container">
        <div class="core__title">
            <h2 class="core__title__control">Оптовые площадки</h2>
        </div>
    </div>
<? $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "catalog_category_slider", array(
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
        "COMPONENT_TEMPLATE" => "catalog_category_slider",
    ),
    false
); ?>
<? include($_SERVER['DOCUMENT_ROOT'] . '/test/template/inquiries.php'); ?>
    <div class="core__line"></div>
<? include($_SERVER['DOCUMENT_ROOT'] . '/test/template/work.php'); ?>