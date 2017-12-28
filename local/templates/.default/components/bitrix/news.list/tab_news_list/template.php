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

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
$data = new \Lema\Template\TemplateHelper($this);

$bxAjaxId = CAjax::GetComponentID($component->__name, $component->__template->__name);

?>
<div class="ajax_load">
    <? if ($_REQUEST['showMore'] == '1')
        $APPLICATION->RestartBuffer(); ?>
    <div class="news__list">
        <? foreach ($data->items() as $item): ?>
            <div class="news__item">
                <div class="news__item__img">
                    <a href="<?= $item->detailUrl(); ?>" title="<?= $item->getName(); ?>">
                        <img src="<?= $item->previewPicture(); ?>" alt="<?= $item->getName(); ?>">
                    </a>
                </div>
                <div class="news__item__main">
                    <a href="<?= $item->detailUrl(); ?>" title="<?= $item->getName(); ?>" class="news__item__title">
                        <div class="news__item__title__date"><?= $item->get('DATE_ACTIVE_FROM'); ?></div>
                        <div class="news__item__title__line">/</div>
                        <div class="news__item__title__name"><?= $item->getName(); ?></div>
                    </a>
                    <div class="news__item__text">
                        <p>
                            <?= $item->previewText(); ?>
                        </p>
                    </div>
                    <div class="news__item__btn">
                        <a href="<?= $item->detailUrl(); ?>" title="<?= $item->getName(); ?>"><? Loc::getMessage('TAB_NEWS_LIST_MORE_INFO'); ?></a>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
    <div class="bottom_nav" style="display: none;">
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"] == "Y") { ?>
            <?= $arResult["NAV_STRING"] ?>
        <? } ?>
    </div>
    <? if ($_REQUEST['showMore'] == '1')
        die(); ?>
    <? if (empty($_GET['showMore'])): ?>
        <div class="css_text-center">
            <div class="core__btn" class="ajax_load_btn_new" data-ajax-id="<?= $bxAjaxId ?>" data-show-more="<?= $arResult["NAV_RESULT"]->NavNum ?>"
                 data-next-page="<?= ($arResult["NAV_RESULT"]->NavPageNomer + 1) ?>" data-max-page="<?= $arResult["NAV_RESULT"]->nEndPage ?>">
            <span>
                <?= Loc::getMessage('TAB_NEWS_LIST_MORE'); ?>
            </span>
            </div>
        </div>
        <br>
        <br>
    <? endif; ?>
</div>
<script>
    $(document).ready(function () {
        $(document).off('click').on('click', '[data-show-more]', function (e) {

            e.preventDefault();

            var btn = $(this);
            var waitElement = btn.parent().get(0);
            var page = btn.attr('data-next-page');
            var id = btn.attr('data-show-more');
            var bx_ajax_id = btn.attr('data-ajax-id');
            var max = btn.attr('data-max-page');
            var parent = btn.closest('.ajax_load_btn_new');

            var data = {
                showMore: 1
            };
            data['PAGEN_' + id] = page;

            BX.showWait(waitElement);
            btn.find('[data-show-more]').off('click');

            $.ajax({
                type: "GET",
                url: window.location.href,
                data: data,
                //timeout: 3000,
                success: function (data) {
                    BX.closeWait(waitElement);
                    btn.attr('data-next-page', page * 1 + 1);
                    //btn.remove();
                    $.when($('.ajax_load .news__list').first().append(data)).then(function () {
                        $('.bottom_nav').html($('.bottom_nav').eq(-2).html());
                        if(max == (page * 1))
                            $('.css_text-center').hide();
                    });
                }
            });
        });

    });
</script>