<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

$frame = $this->createFrame("subscribe-form", false)->begin();
?>
    <form action="<?= $arResult["FORM_ACTION"] ?>">
        <div class="feedback__form__input core__form__input">
            <input type="text" name="sf_EMAIL" class="feedback__form__input__control core__form__input__control" size="20"
                   placeholder="you@mail.com" value="<?= $arResult["EMAIL"] ?>" title="<?= GetMessage("subscr_form_email_title") ?>"/>
        </div>
        <div class="feedback__form__btn">
            <input type="submit" name="OK" class="core__btn" value="<?= GetMessage("subscr_form_button") ?>"/>
        </div>
    </form>
<?
$frame->beginStub();
?>
    <form action="<?= $arResult["FORM_ACTION"] ?>">
        <div class="feedback__form__input core__form__input">
            <input type="text" name="sf_EMAIL" class="feedback__form__input__control core__form__input__control" size="20"
                   placeholder="your@email.com" value="" title="<?= GetMessage("subscr_form_email_title") ?>"/>
        </div>
        <div class="feedback__form__btn">
            <input type="submit" name="OK" class="core__btn" value="<?= GetMessage("subscr_form_button") ?>"/>
        </div>
    </form>
<?
$frame->end();