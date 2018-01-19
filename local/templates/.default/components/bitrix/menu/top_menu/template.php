<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if(!empty($arResult)): ?>
    <ul>

        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <? if($arItem["SELECTED"]):?>
            <li data-js-core-switch-hover="header__menu__list" class="active"><a href="<?=$arItem["LINK"]?>" data-js-core-switch-element="header" class="active"><?=$arItem["TEXT"]?></a></li>
        <? else:?>
            <li data-js-core-switch-hover="header__menu__list"><a href="<?=$arItem["LINK"]?>" data-js-core-switch-element="header"><?=$arItem["TEXT"]?></a></li>
        <? endif ?>

        <? endforeach ?>

    </ul>
<? endif ?>
