<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if(!empty($arResult)): ?>
    <ul>

        <?
        foreach($arResult as $arItem):
            ?><pre style="display: none;"><?var_dump($arResult);?></pre><?
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <? if($arItem["SELECTED"]):?>
            <li data-js-core-switch-hover="header__menu__list" class="active" data-js-core-switch-element="header">
                <a href="<?=$arItem["LINK"]?>" class="active"><?=$arItem["TEXT"]?></a>
            </li>
        <? else:?>
            <li data-js-core-switch-hover="header__menu__list" data-js-core-switch-element="header">
                <a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a>
            </li>
        <? endif ?>

        <? endforeach ?>

    </ul>
<? endif ?>
