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
<div class="inquiries__block__name">
    <span><?= $data->getName(); ?></span>
</div>
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

<div class="inquiries__block__btn">
    <a href="<?= $item->get('LIST_PAGE_URL'); ?>" title="<?= Loc::getMessage('R_AND_S_MORE_REQUESTS'); ?>" class="core__btn core__btn_hidden">
        <span><?= Loc::getMessage('R_AND_S_MORE_REQUESTS'); ?></span>
    </a>
</div>