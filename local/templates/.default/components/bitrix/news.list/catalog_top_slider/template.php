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

if(empty($arResult['ITEMS']))
    return;

$data = new \Lema\Template\TemplateHelper($this);

?>
<div class="container-fluid">
    <div class="container">
        <div class="banner__three">
            <? foreach($data->items() as $item): ?>
                <a href="<?=$item->propValue('URL');?>" title="<?=$item->getName();?>" class="banner__three__item" <?=$item->editId();?>>
                    <img class="banner__three__item__img" src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                    <div class="banner__three__item__work">
                        <img src="<?=$item->detailPicture();?>" alt="<?=$item->getName();?>">
                    </div>
                </a>
            <? endforeach; ?>
        </div>
    </div>
</div>
