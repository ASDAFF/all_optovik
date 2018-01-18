<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

use \Lema\Common\Helper;

$APPLICATION->SetTitle('Личный кабинет');

$user = new \UserData();

$isVip = (bool) $user->get('UF_IS_VIP');

$maxFiles = $isVip ? 5 : 3;

$cardShowCount = $requestsCount = 0;
if($user->get('WORK_COMPANY'))
{
    \Bitrix\Main\Loader::includeModule('iblock');

    $elements = \Lema\IBlock\Element::getList(LIblock::getId('catalog'), array(
        'filter' => array('NAME' => $user->get('WORK_COMPANY')),
        'arSelect' => array('ID', 'SHOW_COUNTER'),
    ));
    if(!empty($elements))
    {
        foreach($elements as $element)
            $cardShowCount += $element['SHOW_COUNTER'];
    }

    $requests = \Lema\IBlock\Element::getList(LIblock::getId('requests'), array(
        'filter' => array('PROPERTY_OPT_USER' => $user->get('ID')),
        'select' => array('ID'),
    ));
    $requestsCount = count($requests);

    unset($elements, $requests);
}

?>
    <div class="container">
        <div class="core__title">
            <span class="core__title__control">
                <?=trim($user->get('WORK_COMPANY')) ? $user->get('WORK_COMPANY') : 'Название компании не указано';?>
            </span>
        </div>
        <div class="statistic">
            <div class="statistic__item">
                <div class="statistic__item__left">
                    <div class="statistic__item__text">
                        Количество переходов в карточку
                    </div>
                </div>
                <div class="statistic__item__right">
                    <div class="statistic__item__number">
                        <span><?=Helper::pluralizeN($cardShowCount, array('переход', 'перехода', 'переходов'));?></span>
                    </div>
                </div>
            </div>
            <div class="statistic__item">
                <div class="statistic__item__left">
                    <div class="statistic__item__text">
                        Общее количество запросов, поступивших через портал
                        <small>общее количество запросов поступивщих через портал другим компаниям</small>
                    </div>
                </div>
                <div class="statistic__item__right">
                    <div class="statistic__item__number">
                        <span><?=Helper::pluralizeN($requestsCount, array('запрос', 'запроса', 'запросов'));?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid inquiries">
            <div class="container">
                <div class="inquiries__title">
                    <span>Запросы и предложения</span>
                </div>
                <?php
                global $publicRequestsFilter, $privateRequestsFilter;
                $publicRequestsFilter = array('PROPERTY_PUBLIC_REQUEST' => array('Да', 'да'), 'PROPERTY_OPT_USER' => $user->get('ID'));
                $privateRequestsFilter = array('!PROPERTY_PUBLIC_REQUEST' => array('Да', 'да'), 'PROPERTY_OPT_USER' => $user->get('ID'));
                ?>
                <div class="inquiries__blocks">
                    <div class="inquiries__block">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "requests_profiles",
                            array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "Y",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "Y",
                                "AJAX_OPTION_STYLE" => "Y",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "N",
                                "DISPLAY_NAME" => "N",
                                "DISPLAY_PICTURE" => "N",
                                "DISPLAY_PREVIEW_TEXT" => "N",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(
                                    0 => "PREVIEW_TEXT",
                                    1 => "DATE_ACTIVE_FROM",
                                    2 => "",
                                ),
                                "FILTER_NAME" => "privateRequestsFilter",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "8",
                                "IBLOCK_TYPE" => "catalog",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "N",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "3",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "Новости",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "news",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PROPERTY_CODE" => array(
                                    0 => "OPT_USER",
                                    1 => "PUBLIC_REQUEST",
                                ),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER1" => "DESC",
                                "SORT_ORDER2" => "ASC",
                                "STRICT_SECTION_CHECK" => "N",
                                "COMPONENT_TEMPLATE" => "requests_profiles",
                                "FILE_404" => "",
                                'REQUESTS' => 'Персональные запросы',
                            ),
                            false
                        ); ?>
                    </div>
                    <div class="inquiries__block">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "requests_profiles",
                            array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "Y",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "Y",
                                "AJAX_OPTION_STYLE" => "Y",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "N",
                                "DISPLAY_NAME" => "N",
                                "DISPLAY_PICTURE" => "N",
                                "DISPLAY_PREVIEW_TEXT" => "N",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(
                                    0 => "PREVIEW_TEXT",
                                    1 => "DATE_ACTIVE_FROM",
                                    2 => "",
                                ),
                                "FILTER_NAME" => "publicRequestsFilter",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "8",
                                "IBLOCK_TYPE" => "catalog",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "N",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "3",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "Новости",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "news",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PROPERTY_CODE" => array(
                                    0 => "OPT_USER",
                                    1 => "PUBLIC_REQUEST",
                                ),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER1" => "DESC",
                                "SORT_ORDER2" => "ASC",
                                "STRICT_SECTION_CHECK" => "N",
                                "COMPONENT_TEMPLATE" => "requests_profiles",
                                "FILE_404" => "",
                                'REQUESTS' => 'Публичные запросы',
                            ),
                            false
                        ); ?>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="core__line_bg"></div>
        <br>
        <form method="post" action="/ajax/profile.php" enctype="multipart/form-data" class="js-profile-form">
            <input type="hidden" id="max_files" value="<?=$maxFiles;?>">
            <div class="form form__user">
                <div class="form__user__left">
                    <div class="form__item">
                        <div class="core__form__title">
                            <span>Персональная информация</span>
                        </div>
                        <div class="core__form__input js-field-block">
                            <input class="core__form__input__control" value="<?=$user->get('WORK_COMPANY')?>"
                                   name="company_name" placeholder="Название компании">
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__input js-field-block">
                            <input class="core__form__input__control" name="email" value="<?=$user->get('WORK_MAILBOX')?>"
                                   placeholder="Электронная почта">
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__input js-field-block">
                            <input class=" core__form__input__control" name="site" value="<?=$user->get('WORK_WWW')?>"
                                   placeholder="Сайт (не обязательно)">
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__input js-field-block">
                            <input class="core__form__input__control" name="city" value="<?=$user->get('WORK_CITY')?>" placeholder="Ваш город">
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__input js-field-block">
                            <input class="core__form__input__control" name="address" value="<?=$user->get('WORK_STREET')?>" placeholder="Ваш адрес">
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__textarea js-field-block">
                            <textarea class="core__form__textarea__control" name="description" placeholder="Описание деятельности компании"><?=
                                $user->get('WORK_PROFILE');
                                ?></textarea>
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                    </div>
                    <br>

                    <? if($isVip): ?>
                        <div class="core__form__title">
                            <span>Каталоги и прайс-листы</span>
                        </div>
                        <div class="form__item">
                            <div class="core__form__file">
                                <div class="core__form__file__text">Загрузить каталог (не обязательно)</div>
                                <div class="core__form__file__input js-field-block">
                                    <input class="core__form__file__input__control" name="catalog" type="file"/>
                                    <div class="core__form__input__log core__form__input__log_danger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form__item">
                            <div class="core__form__file">
                                <div class="core__form__file__text">Прайс-лист</div>
                                <div class="core__form__file__input js-field-block">
                                    <input class="core__form__file__input__control" name="price" type="file"/>
                                    <div class="core__form__input__log core__form__input__log_danger"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                    <? endif; ?>
                    <?php
                    $sections = LemaISection::getSectionsByLevelD7(LIblock::getId('catalog'));
                    if(!empty($sections)):?>
                        <div class="core__form__title">
                            <span>Выберите раздел</span>
                        </div>
                        <div class="form__item">
                            <div class="core__form__select js-field-block">
                                <select name="section" class="core__form__select__control">
                                    <option selected="selected" value="">Выберите</option>
                                    <? foreach($sections as $sectionId => $section): ?>
                                        <? if(empty($section['SECTIONS'])): ?>
                                            <option value="<?=$sectionId;?>"><?=$section['NAME'];?></option>
                                        <? else: ?>
                                            <optgroup label="<?=$section['NAME'];?>">
                                                <? foreach($section['SECTIONS'] as $innerSectionId => $innerSection): ?>
                                                    <option value="<?=$innerSectionId;?>"><?=$innerSection['NAME'];?></option>
                                                <? endforeach; ?>
                                            </optgroup>
                                        <? endif; ?>
                                    <? endforeach; ?>
                                </select>
                                <div class="core__form__input__log core__form__input__log_danger"></div>
                            </div>
                        </div>
                    <? endif; ?>
                </div>
                <div class="form__user__right">
                    <? if($isVip): ?>
                        <div class="form__item">
                            <div class="core__form__title">
                                <span>Условия работы</span>
                            </div>
                            <div class="core__form__textarea js-field-block">
                                <textarea class="core__form__textarea__control" name="work_conditions" placeholder="Условия работы"><?=
                                    $user->get('UF_WORK_COND');
                                    ?></textarea>
                                <div class="core__form__input__log core__form__input__log_danger"></div>
                            </div>
                            <div class="core__form__title">
                                <span>Условия доставки</span>
                            </div>
                            <div class="core__form__textarea js-field-block">
                                <textarea class="core__form__textarea__control" name="delivery_conditions" placeholder="Условия доставки"><?=
                                    $user->get('UF_DELIVERY_COND');
                                    ?></textarea>
                                <div class="core__form__input__log core__form__input__log_danger"></div>
                            </div>
                            <div class="core__form__title">
                                <span>Условия оплаты</span>
                            </div>
                            <div class="core__form__textarea js-field-block">
                                <textarea class="core__form__textarea__control" name="pay_conditions" placeholder="Условия оплаты"><?=
                                    $user->get('UF_PAY_COND');
                                    ?></textarea>
                                <div class="core__form__input__log core__form__input__log_danger"></div>
                            </div>
                            <div class="core__form__title">
                                <span>Скидки</span>
                            </div>
                            <div class="core__form__textarea js-field-block">
                                <textarea class="core__form__textarea__control" name="discounts" placeholder="Скидки"><?=
                                    $user->get('UF_DISCOUNTS');
                                    ?></textarea>
                                <div class="core__form__input__log core__form__input__log_danger"></div>
                            </div>
                        </div>
                        <br>
                    <? endif; ?>
                    <div class="form__item">
                        <div class="core__form__title">
                            <span>Фотографии товара</span>
                        </div>
                        <div class="form__item">
                            <div class="core__form__file">
                                <div class="core__form__file__text">Загрузить картинки</div>
                                <div class="core__form__file__input js-field-block">
                                    <input class="core__form__file__input__control" id="js-pictures" name="pictures" type="file" multiple/>
                                    <div class="core__form__input__log core__form__input__log_danger"></div>
                                </div>
                            </div>
                            <div class="core__form__description">
                                (несколько фотографий можно загрузить зажав клавишу Ctrl на клавиатуре)
                            </div>
                        </div>
                        <div class="form__item">
                            <div class="core__form__file">
                                <div class="core__form__file__text">Загрузить картинки для анонса <?=$maxFiles;?> шт.</div>
                                <div class="core__form__file__input js-field-block">
                                    <input class="core__form__file__input__control" id="js-preview-pictures" name="preview_pictures" type="file"
                                           multiple/>
                                    <div class="core__form__input__log core__form__input__log_danger"></div>
                                </div>
                            </div>
                            <div class="core__form__description">
                                (несколько фотографий можно загрузить зажав клавишу Ctrl на клавиатуре)
                            </div>
                        </div>
                        <div class="form__item">
                            <div class="core__form__file">
                                <div class="core__form__file__text">Загрузить логотип компании</div>
                                <div class="core__form__file__input js-field-block">
                                    <input class="core__form__file__input__control" name="logo" type="file"/>
                                    <div class="core__form__input__log core__form__input__log_danger"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="core__form__check">
                            <div class="core__form__checkbox js-field-block">
                                <input id="form__checkbox__personal" name="agreement" type="checkbox">
                                <label for="form__checkbox__personal">
                                    <small>
                                        Даю согласие на обработку персональных данных в соответствии с федеральным законом «О персональных данных» от
                                        27.07.2006 N 152-ФЗ
                                    </small>
                                </label>
                                <div class="core__form__input__log core__form__input__log_danger"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form__user__center">
                    <div class="core__line_bg"></div>
                    <div class="core__form__btn">
                        <button type="submit" class="core__form__btn__control core__btn core__btn_hidden">отправить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>