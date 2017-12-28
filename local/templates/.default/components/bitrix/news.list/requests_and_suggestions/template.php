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
<div class="inquiries__block">
    <div class="inquiries__block__name">
        <span><?= Loc::getMessage('R_AND_S_TITLE'); ?></span>
    </div>
    <div class="inquiries__block__list">
        <? foreach ($data->items() as $item): ?>
            <span title="<?= $item->getName(); ?>" class="inquiries__block__item">
            <div class="inquiries__block__item__img">
                <img src="<?=\UserData::instance($item->propValue('OPT_USER'))->get('WORK_LOGO');?>">
            </div>
            <div class="inquiries__block__item__text">
                <p><?= $item->previewText(); ?></p>
            </div>
            <div class="inquiries__block__item__date">
                <span><?= $item->get('DATE_ACTIVE_FROM'); ?></span>
            </div>
        </span>
        <? endforeach; ?>
    </div>
    <div class="inquiries__block__all">
        <span><?= Loc::getMessage('R_AND_S_TOTTAL_NUMBER_REQUESTS') ?><?=$data->get('COUNT_ELEMENTS');?></span>
    </div>
    <div class="inquiries__block__btn">
        <a href="<?= SITE_DIR ?>requests/" title="<?= Loc::getMessage('R_AND_S_MORE_REQUESTS'); ?>" class="core__btn core__btn_hidden">
            <span><?= Loc::getMessage('R_AND_S_MORE_REQUESTS'); ?></span>
        </a>
    </div>
</div>