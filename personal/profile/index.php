<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Личный кабинет');

$user = new \UserData();

$maxFiles = $user->get('UF_IS_VIP') ? 5 : 3;

?>
    <div class="container">
        <div class="core__title">
            <span class="core__title__control"><?=$user->get('WORK_COMPANY') ? 'Название компании не указано' : $user->get('WORK_COMPANY');?></span>
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