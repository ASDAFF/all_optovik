<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

if (empty($arResult['ITEMS']))
    return;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$data = new \Lema\Template\TemplateHelper($this);
?>
<div class="news__list">
    <? foreach ($data->items() as $item): ?>
    <div class="news__item">
        <div class="news__item__img">
            <a href="<?= $item->detailUrl(); ?>" title="<?= $item->getName(); ?>">
                <img src="<?= $item->previewPicture(); ?>" alt="<?= $item->getName(); ?>">
            </a>
        </div>
        <div class="news__item__main">
            <a href="<?= $item->detailUrl(); ?>" title="<?= $item->getName(); ?>" class="news__item__title">
                <div class="news__item__title__date">18 декабря 2017</div>
                <div class="news__item__title__line">/</div>
                <div class="news__item__title__name"><?= $item->getName(); ?>а</div>
            </a>
            <div class="news__item__text">
                <p>
                    <?= $item->previewText(); ?>
                </p>
            </div>
            <div class="news__item__btn">
                <a href="<?= $item->detailUrl(); ?>" title="<?= $item->getName(); ?>"><?Loc::getMessage('TAB_NEWS_LIST_MORE_INFO');?></a>
            </div>
        </div>
    </div>
    <?endforeach;?>
</div>
<div class="css_text-center">
    <div class="core__btn">
        <span><?Loc::getMessage('TAB_NEWS_LIST_MORE');?></span>
    </div>
    <br><br>
</div>
