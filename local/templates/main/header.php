<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \Lema\Common\AssetManager,
    \Lema\Common\User,
    \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

?><!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    //init js & css
    $assetManager = new AssetManager();

    $assetManager
        ->addCssArray(array(
            'https://fonts.googleapis.com/css?family=PT+Sans:400,700',
            '/assets/js/lib/fancybox/fancybox.min.css',
            '/assets/css/style.min.css',
            '/assets/css/custom.css',
        ))
        ->init(array('fx'))
        ->addJsArray(array(
            '/assets/js/lib/jquery.min.js',
            '/assets/js/lib/slick.js',
            '/assets/js/lib/fancybox/fancybox.min.js',
            '/assets/js/scripts.js',
            '/assets/js/main.js',
            '/assets/js/custom.js',
        ));
    ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="76x76" href="/">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png"/>

    <? $APPLICATION->ShowHead(); ?>

    <title><? $APPLICATION->ShowTitle(); ?></title>
</head>
<body class="body-content">

<? $APPLICATION->ShowPanel(); ?>

<header>
    <!-- MOBILE MENU -->
    <div class="core__menu-nav__mobile__alert">
        <!-- После адоптации - это меню откроется  -->
        <div class="core__menu-nav__mobile__alert__user">
            <div class="core__menu-nav__mobile__alert__user__login">
                <? if (User::isGuest()): ?>
                    <a href="" title="<?= Loc::getMessage('LEMA_AUTH_LINK_TITLE'); ?>">
                        <?= Loc::getMessage('LEMA_AUTH_LINK_TITLE'); ?>
                    </a>
                    <a href="" title="<?= Loc::getMessage('LEMA_REGISTER_LINK_TITLE'); ?>">
                        <?= Loc::getMessage('LEMA_REGISTER_LINK_TITLE'); ?>
                    </a>
                <? else: ?>
                    <a href="?logout=yes" title="<?= Loc::getMessage('LEMA_LOGOUT_LINK_TITLE'); ?>">
                        <?= Loc::getMessage('LEMA_LOGOUT_LINK_TITLE'); ?>
                    </a>
                    <a href="<?= SITE_DIR ?>personal/profile/" title="<?= Loc::getMessage('LEMA_PROFILE_LINK_TITLE'); ?>">
                        <?= User::get()->GetLogin(); ?>
                    </a>
                <? endif; ?>
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
    <div class="header container-fluid<?if($APPLICATION->GetCurDir() == SITE_DIR){?> active<?}?>">
        <!--
        * active только на главной
        -->
        <div class="container">
            <div class="header__top">
                <div class="header__logo">
                    <a href="<?= SITE_DIR; ?>" title="logo">
                        <img src="/assets/img/logo.png" alt="logo">
                        <span><? $APPLICATION->IncludeFile(SITE_DIR . 'include/header/logo_title.php'); ?></span>
                    </a>
                </div>
                <div class="header__banner">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "header_top_banner",
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
                            "PARENT_SECTION_CODE" => "header_banner",
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
                            "COMPONENT_TEMPLATE" => "header_top_banner",
                            "FILE_404" => "",
                        ),
                        false
                    ); ?>
                </div>

                <div class="header__form">
                    <div class="header__form__btn">
                        <? if (User::isGuest()): ?>
                            <a href="<?=SITE_DIR?>auth/" title="<?= Loc::getMessage('LEMA_AUTH_LINK_TITLE'); ?>" class="header__form__btn__login">
                                <?= Loc::getMessage('LEMA_AUTH_LINK_TITLE'); ?>
                            </a>
                            <span>|</span>
                            <a href="<?=SITE_DIR?>auth/?register=yes" title="<?= Loc::getMessage('LEMA_REGISTER_LINK_TITLE'); ?>" class="header__form__btn__registration">
                                <?= Loc::getMessage('LEMA_REGISTER_LINK_TITLE'); ?>
                            </a>
                        <? else: ?>
                            <a href="?logout=yes" title="<?= Loc::getMessage('LEMA_LOGOUT_LINK_TITLE'); ?>" class="header__form__btn__login">
                                <?= Loc::getMessage('LEMA_LOGOUT_LINK_TITLE'); ?>
                            </a>
                            <span>|</span>
                            <a href="<?= SITE_DIR ?>personal/profile/" title="<?= Loc::getMessage('LEMA_PROFILE_LINK_TITLE'); ?>"
                               class="header__form__btn__registration">
                                <?= User::get()->GetLogin(); ?>
                            </a>
                        <? endif; ?>
                        <a class="header__form__btn__file" href="/assets/file/tarf.docx" title="Инструкция и тарифы">Инструкция и тарифы</a>

                    </div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:search.title",
                        "header",
                        array(
                            "CATEGORY_0" => array(
                                0 => "iblock_catalog",
                            ),
                            "CATEGORY_0_TITLE" => "",
                            "CATEGORY_0_iblock_catalog" => array(
                                0 => "4",
                            ),
                            "CHECK_DATES" => "N",
                            "CONTAINER_ID" => "title-search-header",
                            "CONVERT_CURRENCY" => "N",
                            "INPUT_ID" => "title-search-input-header",
                            "NUM_CATEGORIES" => "1",
                            "ORDER" => "date",
                            "PAGE" => "#SITE_DIR#search/",
                            "PREVIEW_HEIGHT" => "75",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PREVIEW_WIDTH" => "75",
                            "PRICE_CODE" => array(),
                            "PRICE_VAT_INCLUDE" => "N",
                            "SHOW_INPUT" => "Y",
                            "SHOW_OTHERS" => "N",
                            "SHOW_PREVIEW" => "Y",
                            "TOP_COUNT" => "5",
                            "USE_LANGUAGE_GUESS" => "Y",
                            "COMPONENT_TEMPLATE" => "header"
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
        <div class="container-fluid header__menu">
            <div class="container">
                <nav class="header__menu__line">
                    <? $APPLICATION->IncludeComponent('bitrix:menu', 'top_menu', array(
                        'ALLOW_MULTI_SELECT' => 'N',
                        'ROOT_MENU_TYPE' => 'top',
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
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <nav class="header__menu__list">
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
                </nav>
            </div>
        </div>
        <div class="container-fluid core__line"></div>
    </div>
</header>
<div class="body-main" role="main">

