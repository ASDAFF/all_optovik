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
<div class="container-fluid">
    <div class="container">
        <div class="slider__cat" data-js-slider="all">

            <? foreach ($data->items() as $item): ?>
                <a href="<?= $item->detailUrl(); ?>" title="<?= $item->getName(); ?>" class="slider__cat__item" <?= $item->editId(); ?>>
                    <div class="slider__cat__item__img">
                        <img src="<?= $item->previewPicture(); ?>">
                    </div>
                    <div class="slider__cat__item__name">
                        <span><?= $item->getName(); ?></span>
                    </div>
                </a>
            <? endforeach; ?>

        </div>
    </div>
</div>


