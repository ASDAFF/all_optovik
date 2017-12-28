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
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

if (empty($arResult['ITEMS'])) { ?>
    <div class="core__title">
        <h1 class="core__title__control">
            <br>
            <? $APPLICATION->ShowTitle(false); ?><?=Loc::getMessage('PAGE_R_AND_S_ERROR');?>
        </h1>
    </div>
    <?
    return;
}

$data = new \Lema\Template\TemplateHelper($this);

?>
<div class="core__title">
    <h1 class="core__title__control">
        <? $APPLICATION->ShowTitle(false); ?>
    </h1>
</div>
<div class="core__line_bg"></div>
<div class="container">
    <div class="inquiries__block__list">
        <? foreach ($data->items() as $item): ?>
            <span title="<?= $item->getName(); ?>" class="inquiries__block__item" <?= $item->editId(); ?>>
            <? if ($item->propFilled('OPT_USER') && ($userData = new \UserData($item->propValue('OPT_USER')))->get('WORK_LOGO')): ?>
                <div class="inquiries__block__item__img">
                <img src="<?= \CFile::GetPath($userData->get('WORK_LOGO')); ?>">
            </div>
            <? endif; ?>
                <div class="inquiries__block__item__text">
                <p><?= $item->previewText(); ?></p>
            </div>
            <div class="inquiries__block__item__date">
                <span><?= $item->get('DATE_ACTIVE_FROM'); ?></span>
            </div>
        </span>
        <? endforeach; ?>
    </div>
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <br/><?= $arResult["NAV_STRING"] ?>
    <? endif; ?>
</div>