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

<div class="container-fluid banner__two">
    <div class="container">
        <? foreach ($data->items() as $item): ?>
            <a href="<?= $item->propVal('LINK'); ?>" title="<?= $item->getName(); ?>" class="banner__two__item" <?= $item->editId(); ?>>
                <img src="<?= $item->previewPicture(); ?>" title="<?= $item->getName(); ?>">
            </a>
        <? endforeach; ?>
    </div>
</div>

