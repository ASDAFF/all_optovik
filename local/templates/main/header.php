<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \Lema\Common\AssetManager,
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
            '/assets/js/main.min.js',
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
                <a href="" title="<?=Loc::getMessage('LEMA_AUTH_LINK_TITLE');?>">
                    <?=Loc::getMessage('LEMA_AUTH_LINK_TITLE');?>
                </a>
                <a href="" title="<?=Loc::getMessage('LEMA_REGISTER_LINK_TITLE');?>">
                    <?=Loc::getMessage('LEMA_REGISTER_LINK_TITLE');?>
                </a>
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
                    <a href="<?=SITE_DIR;?>" title="logo">
                        <img src="/assets/img/logo.png" alt="logo">
                        <span><? $APPLICATION->IncludeFile(SITE_DIR . 'include/header/logo_title.php'); ?></span>
                    </a>
                </div>
                <div class="header__banner">
                    <? $APPLICATION->IncludeComponent('bitrix:news.line', 'header_top_banner', array(
                            'IBLOCK_TYPE' => 'content',
                            'IBLOCKS' => array('1'),
                            'NEWS_COUNT' => '20',
                            'FIELD_CODE' => array('ID', 'PREVIEW_PICTURE', 'PROPERTY_URL'),
                            'SORT_BY1' => 'ACTIVE_FROM',
                            'SORT_ORDER1' => 'DESC',
                            'SORT_BY2' => 'SORT',
                            'SORT_ORDER2' => 'ASC',
                            'DETAIL_URL' => '',
                            'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                            'CACHE_TYPE' => 'A',
                            'CACHE_TIME' => '300',
                            'CACHE_GROUPS' => 'Y',
                        )
                    ); ?>
                </div>

                <div class="header__form">
                    <div class="header__form__btn">
                        <a href="" title="<?=Loc::getMessage('LEMA_AUTH_LINK_TITLE');?>"
                           class="header__form__btn__login">
                            <?=Loc::getMessage('LEMA_AUTH_LINK_TITLE');?>
                        </a>
                        <span>|</span>
                        <a href="" title="<?=Loc::getMessage('LEMA_REGISTER_LINK_TITLE');?>" class="header__form__btn__registration">
                            <?=Loc::getMessage('LEMA_REGISTER_LINK_TITLE');?>
                        </a>
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

