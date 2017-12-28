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

$data = new \Lema\Template\TemplateHelper($this);
$item = $data->item();
?>
<div class="container">
    <div class="core__title">
        <h1 class="core__title__control"><?=$item->getName();?></h1>
    </div>
    <div class="core__line_bg"></div>
    <div class="catalog__detail">
        <div class="catalog__detail__head">
            <div class="catalog__detail__head__img">
                <img class="catalog__detail__head__img__control" src="/assets/img/news/img-1.jpg">
                <div class="catalog__detail__head__img__work">
                    <img src="/assets/img/work/img-2.jpg" title="">
                </div>
            </div>
            <div class="catalog__detail__head__text">
                <p>
                    <?=$item->previewText();?>
                </p>
                <p>
                    <?=$item->detailText();?>
                </p>
                <? $APPLICATION->IncludeFile(SITE_DIR . 'include/catalog/phones.php'); ?>
            </div>
            <div class="catalog__detail__head__inf">
                <i class="catalog__detail__head__inf__icon"></i>
                <? if($item->propFilled('CATALOG_FILE')): ?>
                    <a href="<?=$item->get('CATALOG_FILE_LINK');?>" title="">Скачать каталог</a>
                <? endif; ?>
                <? if($item->propFilled('PRICE_FILE')): ?>
                    <a href="<?=$item->get('PRICE_FILE_LINK');?>" title="">Скачать прайс-лист</a>
                <? endif; ?>
                <a href="#" class="core__btn">отправить запрос</a>
            </div>
        </div>
    </div>
    <? if($arResult['IS_VIP']): ?>
        <div class="tabs">
            <div class="tabs__nav" data-js-core-tabs-nav="tabs">
                <a href="#" title="" data-js-core-tabs-nav-id="1" class="active"><span>Условия работы</span></a>
                <a href="#" title="" data-js-core-tabs-nav-id="2"><span>Доставка</span></a>
                <a href="#" title="" data-js-core-tabs-nav-id="3"><span>Оплата</span></a>
                <a href="#" title="" data-js-core-tabs-nav-id="4"><span>Скидки</span></a>
                <a href="#" title="" data-js-core-tabs-nav-id="5"><span>Контакты</span></a>
            </div>
            <div class="tabs__container" data-js-core-tabs="tabs">
                <div class="tabs__item active" data-js-core-tabs-id="1">
                    <div class="tabs__item__text">
                        <p>
                            <?=$arResult['USER_DATA']->get('UF_WORK_COND');?>
                        </p>
                    </div>
                </div>
                <div class="tabs__item" data-js-core-tabs-id="2">
                    <p>
                        <?=$arResult['USER_DATA']->get('UF_DELIVERY_COND');?>
                    </p>
                </div>
                <div class="tabs__item" data-js-core-tabs-id="3">
                    <p>
                        <?=$arResult['USER_DATA']->get('UF_PAY_COND');?>
                    </p>
                </div>
                <div class="tabs__item" data-js-core-tabs-id="4">
                    <p>
                        <?=$arResult['USER_DATA']->get('UF_DISCOUNTS');?>
                    </p>
                </div>
                <div class="tabs__item" data-js-core-tabs-id="5">
                    <p>
                        <?php
                        $data = array(
                            'WORK_WWW' => 'Сайт',
                            'WORK_MAILBOX' => 'E-mail',
                            'WORK_CITY' => 'Город',
                            'WORK_STREET' => 'Адрес',
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
                    <span>Товары компании:</span>
                </div>
                <ul>
                    <? foreach($arResult['ELEMENT_SECTIONS'] as $section): ?>
                        <li>
                            <a href="<?=$section['SECTION_URL'];?>" title="<?=$section['NAME'];?>"><?=$section['NAME'];?></a>
                            <ul>
                                <? foreach($section['SECTIONS'] as $innerSection): ?>
                                    <li>
                                        <a href="<?=$innerSection['SECTION_URL'];?>" title="<?=$innerSection['NAME'];?>">
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
                $pageCount = 1;
                $i = 0;
                ?>
                <div data-page-count="<?=$pageCount;?>" class="catalog__detail__main__list js-product-photos">
                    <? foreach($item->prop('PICTURES', 'FILE_DATA') as $file): ?>
                        <a href="<?=$file['SRC'];?>" data-fancybox="true" title="<?=$file['ORIGINAL_NAME'];?>"
                           class="catalog__detail__main__list__item<? if(++$i > $pageCount) { ?> hidden<? } ?>">
                            <div class="catalog__detail__main__list__item__wrap">
                                <div class="catalog__detail__main__list__item__img">
                                    <img src="<?=$file['SRC'];?>" alt="">
                                </div>
                                <div class="catalog__detail__main__list__item__name">
                                    <span><?=$file['ORIGINAL_NAME'];?></span>
                                </div>
                                <div class="catalog__detail__main__list__item__price">
                                    <span>5000 руб.</span>
                                </div>
                            </div>
                        </a>
                    <? endforeach; ?>
                </div>
            <? endif; ?>
        </div>
    </div>
</div>