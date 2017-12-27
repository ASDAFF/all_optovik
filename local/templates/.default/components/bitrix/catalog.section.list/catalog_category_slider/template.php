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

if (empty($arResult['SECTIONS']))
    return;

$data = new \Lema\Template\TemplateHelper($this);
?>

<div class="container-fluid">
    <div class="container">
        <div class="slider__cat" data-js-slider="all">

            <? foreach ($data->sections() as $section):
                if ($section->get('RELATIVE_DEPTH_LEVEL') == '2'):?>
                    <a href="<?= $section->get('SECTION_PAGE_URL'); ?>" title="<?= $section->getName(); ?>"
                       class="slider__cat__item" <?= $section->editId(); ?>>
                        <div class="slider__cat__item__img">
                            <img src="<?= $section->previewPicture(); ?>">
                        </div>
                        <div class="slider__cat__item__name">
                            <span><?= $section->getName(); ?></span>
                        </div>
                    </a>
                <? endif;
            endforeach; ?>

        </div>
    </div>
</div>


