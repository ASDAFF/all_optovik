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

$data = new \Lema\Template\TemplateHelper($this);

?>
<? foreach($data->items() as $item): ?>
    <a href="<?=$item->propVal('URL');?>"
       title="<?=$item->getName();?>"
       style="background-image: url('<?=$item->previewPicture();?>')" <?=$item->editId();?>></a>
<? endforeach; ?>