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

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$data = new \Lema\Template\TemplateHelper($this);

$item = $data->item();
?>

<div class="catalog__detail">


    <div class="catalog__detail__head">
        <div class="catalog__detail__head__img">
            <img class="catalog__detail__head__img__control" src="<?=$item->detailPicture();?>">
            <div class="catalog__detail__head__img__work">
                <? if($item->get('OPT_LOGO')): ?>
                    <img src="<?=$item->get('OPT_LOGO_SRC');?>" title="<?=$item->getName();?>">
                <? endif; ?>
            </div>
        </div>
        <div class="catalog__detail__head__text">
            <p>
                <?=$item->previewText();?>
            </p>
            <p>
                <?=$item->detailText();?>
            </p>
            <? //$APPLICATION->IncludeFile(SITE_DIR . 'include/catalog/phones.php'); ?>
            <? if($arResult['IS_VIP']): ?>
                <p style="text-align:right;">
                    <? foreach($arResult['USER_PHONES'] as $tel => $phone): ?>
                        <a class="catalog__detail__head__text__phone" title="<?=$phone;?>" href="tel:<?=$tel;?>">
                            <?=$phone;?>
                        </a>
                    <? endforeach; ?>
                </p>
            <? endif; ?>
        </div>
        <div class="catalog__detail__head__inf">
            <? if($item->propFilled('CATALOG_FILE') || $item->propFilled('PRICE_FILE')): ?>
                <i class="catalog__detail__head__inf__icon"></i>
                <a href="<?=$item->get('CATALOG_FILE_LINK');?>" title="<?=Loc::getMessage('CATALOG_UPLOAD');?>">
                    <?=Loc::getMessage('CATALOG_UPLOAD');?>
                </a>
            <? endif; ?>
            <? if($item->propFilled('PRICE_FILE')): ?>
                <a href="<?=$item->get('PRICE_FILE_LINK');?>" title="<?=Loc::getMessage('CATALOG_UPLOAD_PRICE_LIST');?>">
                    <?=Loc::getMessage('CATALOG_UPLOAD_PRICE_LIST');?>
                </a>
            <? endif; ?>
            <a href="#" class="core__btn js-request-send"
               data-element-id="<?=$item->getId();?>"
               data-user-id="<?=$item->propValue('OPT_USER');?>" data-fancybox="modal"
               data-src="#core__modal__add">
                <?=Loc::getMessage('CATALOG_SUBMIT');?>
            </a>
        </div>
    </div>
</div>
<? if($arResult['IS_VIP']): ?>
    <div class="tabs">
        <div class="tabs__nav" data-js-core-tabs-nav="tabs">
            <a href="#" title="" data-js-core-tabs-nav-id="1" class="active"><span><?=Loc::getMessage('CATALOG_WORKING_CONDITIONS');?></span></a>
            <a href="#" title="" data-js-core-tabs-nav-id="2"><span><?=Loc::getMessage('CATALOG_DELIVERY');?></span></a>
            <a href="#" title="" data-js-core-tabs-nav-id="3"><span><?=Loc::getMessage('CATALOG_PAYMENT');?></span></a>
            <a href="#" title="" data-js-core-tabs-nav-id="4"><span><?=Loc::getMessage('CATALOG_DISCOUNTS');?></span></a>
            <a href="#" title="" data-js-core-tabs-nav-id="5"><span><?=Loc::getMessage('CATALOG_CONTACTS');?></span></a>
        </div>
        <div class="tabs__container" data-js-core-tabs="tabs">
            <div class="tabs__item active" data-js-core-tabs-id="1">
                <div class="tabs__item__text">
                    <p>
                        <?=nl2br($arResult['USER_DATA']->get('UF_WORK_COND'));?>
                    </p>
                </div>
            </div>
            <div class="tabs__item" data-js-core-tabs-id="2">
                <p>
                    <?=nl2br($arResult['USER_DATA']->get('UF_DELIVERY_COND'));?>
                </p>
            </div>
            <div class="tabs__item" data-js-core-tabs-id="3">
                <p>
                    <?=nl2br($arResult['USER_DATA']->get('UF_PAY_COND'));?>
                </p>
            </div>
            <div class="tabs__item" data-js-core-tabs-id="4">
                <p>
                    <?=nl2br($arResult['USER_DATA']->get('UF_DISCOUNTS'));?>
                </p>
            </div>
            <div class="tabs__item" data-js-core-tabs-id="5">
                <p>
                    <?php
                    $data = array(
                        'WORK_WWW' => Loc::getMessage('CATALOG_WORK_SITE'),
                        'WORK_MAILBOX' => Loc::getMessage('CATALOG_WORK_EMAIL'),
                        'WORK_CITY' => Loc::getMessage('CATALOG_WORK_CITY'),
                        'WORK_STREET' => Loc::getMessage('CATALOG_WORK_ADDRESS'),
                        'WORK_PHONE' => Loc::getMessage('CATALOG_WORK_PHONE'),
                    );
                    foreach($data as $k => $title):
                        $info = $arResult['USER_DATA']->get($k);
                        if(!$info)
                            continue;
                        ?>
                        <?=$title;?>:
                        <?=$info;?>
                        <br>
                    <? endforeach; ?>
                </p>
            </div>
        </div>
    </div>
<? endif; ?>
<div class="catalog__detail__main">
    <div class="catalog__detail__main__left">
        <div class="catalog__detail__main__menu">
            <div class="catalog__detail__main__menu__title">
                <span><?=Loc::getMessage('CATALOG_PRODUCTS_COMPANY');?></span>
            </div>
            <ul>
                <? foreach($arResult['ELEMENT_SECTIONS'] as $section): ?>
                    <li>
                        <span><?=$section['NAME'];?></span>
                        <ul>
                            <? foreach($section['SECTIONS'] as $innerSection): ?>
                                <li>
                                    <a href="<?=$innerSection['SECTION_URL'];?>"<? if($innerSection['ACTIVE']) { ?> class="active"<? } ?>
                                       title="<?=$innerSection['NAME'];?>">
                                        <?=$innerSection['NAME'];?>
                                    </a>
                                </li>
                            <? endforeach; ?>
                        </ul>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="catalog__detail__main__right">
        <? if($item->propFilled('PICTURES')): ?>
            <?php
            $pageCount = 12;
            $i = 0;
            ?>
            <div data-page-count="<?=$pageCount;?>" class="catalog__detail__main__list js-product-photos">
                <? foreach($item->prop('PICTURES', 'FILE_DATA') as $file): ?>
                    <a href="<?=$file['SRC'];?>" data-fancybox="true" title="<?=$file['PRODUCT_NAME'];?>"
                       class="catalog__detail__main__list__item<? if(++$i > $pageCount) { ?> hidden<? } ?>">
                        <div class="catalog__detail__main__list__item__wrap">
                            <div class="catalog__detail__main__list__item__img">
                                <img src="<?=$file['SRC'];?>" alt="<?=$file['PRODUCT_NAME'];?>">
                            </div>
                            <div class="catalog__detail__main__list__item__name">
                                <? if(!empty($file['PRODUCT_NAME'])): ?>
                                    <span><?=$file['PRODUCT_NAME'];?></span>
                                <? endif; ?>
                            </div>
                            <div class="catalog__detail__main__list__item__price">
                                <? if(!empty($file['PRODUCT_PRICE'])): ?>
                                    <span><?=$file['PRODUCT_PRICE'];?> <?=Loc::getMessage('LEMA_CATALOG_DETAIL_PRICE_CURRENCY');?></span>
                                <? endif; ?>
                            </div>
                        </div>
                    </a>
                <? endforeach; ?>
            </div>
        <? endif; ?>
    </div>
</div>