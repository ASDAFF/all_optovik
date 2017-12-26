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

$data = new \Lema\Template\TemplateHelper($this);
?>
<div class="utp__list">

    <? foreach ($data->items() as $item): ?>
        <div class="utp__item" <?= $item->editId(); ?>>
            <div class="utp__item__icon">
                <img src="<?= $item->previewPicture(); ?>">
            </div>
            <div class="utp__item__number"><?=$item->getName();?></div>
            <div class="utp__item__text">
                <span>
                    <?= $item->previewText(); ?>
                </span>
            </div>
        </div>
    <? endforeach; ?>

</div>