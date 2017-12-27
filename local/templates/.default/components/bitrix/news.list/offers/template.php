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

$data = new \Lema\Template\TemplateHelper($this);?>
<div class="container-fluid banner__one">
    <div class="container">
        <a href="<?=$data->items()[0]->propVal('URL');?>" class="banner__one__item" style="background-image: url('<?=$data->items()[0]->previewPicture();?>')">
            <div class="banner__one__item__small"><span><?=$data->items()[0]->previewText();?></span></div>
            <!--<div class="banner__one__item__down"><span>Предложения оптовиков</span></div>-->
        </a>
        <div class="core__line_bg"></div>
    </div>
</div>
