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

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$data = new \Lema\Template\TemplateHelper($this);

?>

<?php \Lema\Components\Breadcrumbs::inc('breadcrumbs'); ?>

<? if($data->itemCount()): ?>
    <div class="container">
        <div class="catalog__list">
            <? foreach($data->items() as $item): ?>
                <div class="catalog__list__item" <?=$item->editId();?>>
                    <div class="core__line_bg"></div>
                    <div class="catalog__list__item__wrap">
                        <div class="catalog__list__item__main">
                            <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>" class="catalog__list__item__img">
                                <img class="catalog__list__item__img__control" src="<?=$item->previewPicture();?>">
                                <span class="catalog__list__item__img__work">
                                <? if($item->get('OPT_LOGO')): ?>
                                    <img src="<?=$item->get('OPT_LOGO_SRC');?>" title="<?=$item->getName();?>">
                                <? endif; ?>
                            </span>
                            </a>
                            <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>" class="catalog__list__item__text">
                                <span class="catalog__list__item__text__title"><?=$item->getName();?></span>
                                <p>
                                    <?=$item->previewText();?>
                                </p>
                                <span class="catalog__list__item__text__mini-title"><?=Loc::getMessage('LEMA_OPT_USER_PRODUCTS_TITLE');?></span>
                            </a>
                        </div>
                        <div class="catalog__list__item__footer">
                            <? if($item->propFilled('PREVIEW_PICTURES')): ?>
                                <div class="catalog__list__item__list">
                                    <? foreach($item->get('PREVIEW_PICTURES') as $fileId => $src): ?>
                                        <a href="<?=$src;?>" title="<?=$item->getName();?>" data-fancybox class="catalog__list__item__list__item">
                                            <div class="catalog__list__item__list__item__wrap">
                                                <img src="<?=$src;?>" alt="<?=$item->getName();?>">
                                            </div>
                                        </a>
                                    <? endforeach; ?>
                                </div>
                            <? endif; ?>
                            <div class="catalog__list__item__inf">
                                <? if($item->propFilled('MIN_PRICE')): ?>
                                    <span class="catalog__list__item__inf__price-text"><?=Loc::getMessage('LEMA_MIN_PRICE_TITLE');?></span>
                                    <span class="catalog__list__item__inf__price">
                                <?=number_format($item->propValue('MIN_PRICE'), 0, '.', ' ');?>
                                <?=Loc::getMessage('LEMA_MIN_PRICE_CURRENCY');?>
                            </span>
                                <? endif; ?>
                                <a href="#" class="core__btn js-request-send" data-element-id="<?=$item->getId();?>"
                                   data-user-id="<?=$item->propValue('OPT_USER');?>" data-fancybox="modal"
                                   data-src="#core__modal__add">
                                    <?=Loc::getMessage('LEMA_SEND_REQUEST_BTN_TITLE');?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>

        <div class="core__line_bg"></div>
        <? if($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <?=$arResult["NAV_STRING"]?>
        <? endif; ?>
    </div>
<? else: ?>
    <div class="container">
        <div class="catalog__list">
            <br><br>
            <?=Loc::getMessage('LEMA_ERROR');?>
            <br><br>
        </div>

        <div class="core__line_bg"></div>
    </div>
<? endif; ?>
