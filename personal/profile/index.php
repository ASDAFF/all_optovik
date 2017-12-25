<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Личный кабинет');

use Lema\IBlock\Section;

?>
    <div class="container">
        <div class="core__title">
            <span class="core__title__control">Астра (оптовик)</span>
        </div>
        <div class="core__line_bg"></div>
        <br>
        <form method="post" action="/ajax/profile.php" enctype="multipart/form-data" class="js-profile-form">
            <div class="form form__user">
                <div class="form__user__left">
                    <div class="form__item">
                        <div class="core__form__title">
                            <span>Персональная информация</span>
                        </div>
                        <div class="core__form__input js-field-block">
                            <input class="core__form__input__control" name="company_name" placeholder="Название компании">
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__input js-field-block">
                            <input class="core__form__input__control" name="email" placeholder="Электронная почта">
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__input js-field-block">
                            <input class=" core__form__input__control" name="site" placeholder="Сайт (не обязательно)">
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__input js-field-block">
                            <input class="core__form__input__control" name="city" placeholder="Ваш город">
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__input js-field-block">
                            <input class="core__form__input__control" name="address" placeholder="Ваш адрес">
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__textarea js-field-block">
                            <textarea class="core__form__textarea__control" name="description"
                                      placeholder="Описание деятельности компании"></textarea>
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
                    LemaISection::getSectionsByLevelD7(LIblock::getId('catalog'));
                    $sections = Section::getAllD7(LIblock::getId('catalog'));
                    if(!empty($sections)):?>
                        <div class="core__form__title">
                            <span>Выберите раздел</span>
                        </div>
                        <div class="form__item">
                            <div class="core__form__select js-field-block">
                                <select name="section" class="core__form__select__control">
                                    <option selected="selected">Выберите</option>
                                    <? foreach($sections as $sectionId => $section):?>
                                        <option value="<?=$sectionId;?>"><?=$section['NAME'];?></option>
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
                            <textarea class="core__form__textarea__control" name="work_conditions" placeholder="Условия работы"></textarea>
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__title">
                            <span>Условия доставки</span>
                        </div>
                        <div class="core__form__textarea js-field-block">
                            <textarea class="core__form__textarea__control" name="delivery_conditions" placeholder="Условия доставки"></textarea>
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__title">
                            <span>Условия оплаты</span>
                        </div>
                        <div class="core__form__textarea js-field-block">
                            <textarea class="core__form__textarea__control" name="pay_conditions" placeholder="Условия оплаты"></textarea>
                            <div class="core__form__input__log core__form__input__log_danger"></div>
                        </div>
                        <div class="core__form__title">
                            <span>Скидки</span>
                        </div>
                        <div class="core__form__textarea js-field-block">
                            <textarea class="core__form__textarea__control" name="discounts" placeholder="Скидки"></textarea>
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
                                <div class="core__form__file__text">Загрузить картинки для анонса 5 шт.</div>
                                <div class="core__form__file__input js-field-block">
                                    <input class="core__form__file__input__control" id="js-preview-pictures" name="preview_pictures" type="file" multiple/>
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