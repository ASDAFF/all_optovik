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

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$data = new \Lema\Template\TemplateHelper($this);

$item = $data->item();
?>
<div class="container">
    <div class="news-detail">
        <h1><?=$item->getName();?></h1>
        <? if($item->detailPicture('ID')): ?>
            <img src="<?=$item->detailPicture();?>" alt="<?=$item->getName();?>">
        <? endif; ?>
        <div>
            <?=$item->detailText();?>
        </div>
    </div>
    <a class="core__btn" href="<?=SITE_DIR;?>news/"><span><?=Loc::getMessage('LEMA_NEWS_DETAIL_BACK');?></span></a>
</div>