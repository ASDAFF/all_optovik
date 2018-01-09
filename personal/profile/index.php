<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

use \Lema\Common\Helper;

$APPLICATION->SetTitle("Личный кабинет");

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
    /*$requests = \Lema\IBlock\Element::getList(array(
        'filter' => array('IBLOCK_ID' => LIblock::getId('requests'), 'PROPERTY_OPT_USER' => $user->get('ID')),
        'select' => array('ID'),
    ));
    $requestsCount = count($requests);*/
    $requests = \Lema\IBlock\Element::getList(LIblock::getId('requests'), array(
        'filter' => array('PROPERTY_OPT_USER' => $user->get('ID')),
        'select' => array('ID'),
    ));
    $requestsCount = count($requests);

    unset($elements, $requests);
}

?><div class="container">
	<div class="core__title">
 <span class="core__title__control">
		<?=trim($user->get('WORK_COMPANY')) ? $user->get('WORK_COMPANY') : 'Название компании не указано';?> </span>
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
					 <?=Helper::pluralizeN($cardShowCount, array('переход', 'перехода', 'переходов'));?>
				</div>
			</div>
		</div>
		<div class="statistic__item">
			<div class="statistic__item__left">
				<div class="statistic__item__text">
					 Общее количество запросов, поступивших через портал
				</div>
			</div>
			<div class="statistic__item__right">
				<div class="statistic__item__number">
					 <?=Helper::pluralizeN($requestsCount, array('запрос', 'запроса', 'запросов'));?>
				</div>
			</div>
		</div>
	</div>
	<div class="core__line_bg">
	</div>
 <br>
	<form method="post" action="/ajax/profile.php" enctype="multipart/form-data" class="js-profile-form">
 <input type="hidden" id="max_files" value="<?=$maxFiles;?>">
		<div class="form form__user">
			<div class="form__user__left">
				<div class="form__item">
					<div class="core__form__title">
						 Персональная информация
					</div>
					<div class="core__form__input js-field-block">
 <input class="core__form__input__control" value="<?=$user->get('WORK_COMPANY')?>" name="company_name" placeholder="Название компании">
						<div class="core__form__input__log core__form__input__log_danger">
						</div>
					</div>
					<div class="core__form__input js-field-block">
 <input class="core__form__input__control" name="email" value="<?=$user->get('WORK_MAILBOX')?>" placeholder="Электронная почта">
						<div class="core__form__input__log core__form__input__log_danger">
						</div>
					</div>
					<div class="core__form__input js-field-block">
 <input class=" core__form__input__control" name="site" value="<?=$user->get('WORK_WWW')?>" placeholder="Сайт (не обязательно)">
						<div class="core__form__input__log core__form__input__log_danger">
						</div>
					</div>
					<div class="core__form__input js-field-block">
 <input class="core__form__input__control" name="city" value="<?=$user->get('WORK_CITY')?>" placeholder="Ваш город">
						<div class="core__form__input__log core__form__input__log_danger">
						</div>
					</div>
					<div class="core__form__input js-field-block">
 <input class="core__form__input__control" name="address" value="<?=$user->get('WORK_STREET')?>" placeholder="Ваш адрес">
						<div class="core__form__input__log core__form__input__log_danger">
						</div>
					</div>
					<div class="core__form__textarea js-field-block">
 <textarea class="core__form__textarea__control" name="description" placeholder="Описание деятельности компании">&lt;span id="bxid311664226" title="Код PHP: &lt;?= $user-&gt;get('WORK_PROFILE'); ?&gt;" class="bxhtmled-surrogate"&gt;&lt;img title="Код PHP: &lt;?= $user-&gt;get('WORK_PROFILE'); ?&gt;" id="bxid386703631" class="bxhtmled-surrogate-dd" src="/bitrix/images/1.gif"/&gt;&lt;span class="bxhtmled-surrogate-inner"&gt;&lt;span class="bxhtmled-right-side-item-icon"&gt;&lt;/span&gt;&lt;span class="bxhtmled-comp-lable" unselectable="on" spellcheck=false&gt;Код PHP&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;</textarea>
						<div class="core__form__input__log core__form__input__log_danger">
						</div>
					</div>
				</div>
 <br>
				 <? if($isVip): ?>
				<div class="core__form__title">
					 Каталоги и прайс-листы
				</div>
				<div class="form__item">
					<div class="core__form__file">
						<div class="core__form__file__text">
							 Загрузить каталог (не обязательно)
						</div>
						<div class="core__form__file__input js-field-block">
 <input class="core__form__file__input__control" name="catalog" type="file">
							<div class="core__form__input__log core__form__input__log_danger">
							</div>
						</div>
					</div>
				</div>
				<div class="form__item">
					<div class="core__form__file">
						<div class="core__form__file__text">
							 Прайс-лист
						</div>
						<div class="core__form__file__input js-field-block">
 <input class="core__form__file__input__control" name="price" type="file">
							<div class="core__form__input__log core__form__input__log_danger">
							</div>
						</div>
					</div>
				</div>
 <br>
				 <? endif; ?> <?php
                    $sections = LemaISection::getSectionsByLevelD7(LIblock::getId('catalog'));
                    if(!empty($sections)):?>
				<div class="core__form__title">
					 Выберите раздел
				</div>
				<div class="form__item">
					<div class="core__form__select js-field-block">
						<select name="section" class="core__form__select__control">
							<option selected="selected" value="">Выберите</option>
							 Код PHP Код PHP
							<option value="<span id=" title="Код PHP: &lt;?=$sectionId;?&gt;" class="bxhtmled-surrogate">Код PHP"&gt;Код PHP</option>
							 Код PHP Код PHP"&gt; Код PHP
							<option value="<span id=" title="Код PHP: &lt;?=$innerSectionId;?&gt;" class="bxhtmled-surrogate">Код PHP"&gt;Код PHP</option>
							 Код PHP Код PHP Код PHP
						</select>
						<div class="core__form__input__log core__form__input__log_danger">
						</div>
					</div>
				</div>
				 <? endif; ?>
			</div>
			<div class="form__user__right">
				 <? if($isVip): ?>
				<div class="form__item">
					<div class="core__form__title">
						 Условия работы
					</div>
					<div class="core__form__textarea js-field-block">
 <textarea class="core__form__textarea__control" name="work_conditions" placeholder="Условия работы">&lt;span id="bxid509390824" title="Код PHP: &lt;?= $user-&gt;get('UF_WORK_COND'); ..." class="bxhtmled-surrogate"&gt;&lt;img title="Код PHP: &lt;?= $user-&gt;get('UF_WORK_COND'); ..." id="bxid645760356" class="bxhtmled-surrogate-dd" src="/bitrix/images/1.gif"/&gt;&lt;span class="bxhtmled-surrogate-inner"&gt;&lt;span class="bxhtmled-right-side-item-icon"&gt;&lt;/span&gt;&lt;span class="bxhtmled-comp-lable" unselectable="on" spellcheck=false&gt;Код PHP&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;</textarea>
						<div class="core__form__input__log core__form__input__log_danger">
						</div>
					</div>
					<div class="core__form__title">
						 Условия доставки
					</div>
					<div class="core__form__textarea js-field-block">
 <textarea class="core__form__textarea__control" name="delivery_conditions" placeholder="Условия доставки">&lt;span id="bxid139809372" title="Код PHP: &lt;?= $user-&gt;get('UF_DELIVERY_COND'); ..." class="bxhtmled-surrogate"&gt;&lt;img title="Код PHP: &lt;?= $user-&gt;get('UF_DELIVERY_COND'); ..." id="bxid516414999" class="bxhtmled-surrogate-dd" src="/bitrix/images/1.gif"/&gt;&lt;span class="bxhtmled-surrogate-inner"&gt;&lt;span class="bxhtmled-right-side-item-icon"&gt;&lt;/span&gt;&lt;span class="bxhtmled-comp-lable" unselectable="on" spellcheck=false&gt;Код PHP&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;</textarea>
						<div class="core__form__input__log core__form__input__log_danger">
						</div>
					</div>
					<div class="core__form__title">
						 Условия оплаты
					</div>
					<div class="core__form__textarea js-field-block">
 <textarea class="core__form__textarea__control" name="pay_conditions" placeholder="Условия оплаты">&lt;span id="bxid988587901" title="Код PHP: &lt;?= $user-&gt;get('UF_PAY_COND'); ..." class="bxhtmled-surrogate"&gt;&lt;img title="Код PHP: &lt;?= $user-&gt;get('UF_PAY_COND'); ..." id="bxid847023797" class="bxhtmled-surrogate-dd" src="/bitrix/images/1.gif"/&gt;&lt;span class="bxhtmled-surrogate-inner"&gt;&lt;span class="bxhtmled-right-side-item-icon"&gt;&lt;/span&gt;&lt;span class="bxhtmled-comp-lable" unselectable="on" spellcheck=false&gt;Код PHP&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;</textarea>
						<div class="core__form__input__log core__form__input__log_danger">
						</div>
					</div>
					<div class="core__form__title">
						 Скидки
					</div>
					<div class="core__form__textarea js-field-block">
 <textarea class="core__form__textarea__control" name="discounts" placeholder="Скидки">&lt;span id="bxid166400107" title="Код PHP: &lt;?= $user-&gt;get('UF_DISCOUNTS'); ..." class="bxhtmled-surrogate"&gt;&lt;img title="Код PHP: &lt;?= $user-&gt;get('UF_DISCOUNTS'); ..." id="bxid763416476" class="bxhtmled-surrogate-dd" src="/bitrix/images/1.gif"/&gt;&lt;span class="bxhtmled-surrogate-inner"&gt;&lt;span class="bxhtmled-right-side-item-icon"&gt;&lt;/span&gt;&lt;span class="bxhtmled-comp-lable" unselectable="on" spellcheck=false&gt;Код PHP&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;</textarea>
						<div class="core__form__input__log core__form__input__log_danger">
						</div>
					</div>
				</div>
 <br>
				 <? endif; ?>
				<div class="form__item">
					<div class="core__form__title">
						 Фотографии товара
					</div>
					<div class="form__item">
						<div class="core__form__file">
							<div class="core__form__file__text">
								 Загрузить картинки
							</div>
							<div class="core__form__file__input js-field-block">
 <input class="core__form__file__input__control" id="js-pictures" name="pictures" type="file" multiple="">
								<div class="core__form__input__log core__form__input__log_danger">
								</div>
							</div>
						</div>
						<div class="core__form__description">
							 (несколько фотографий можно загрузить зажав клавишу Ctrl на клавиатуре)
						</div>
					</div>
					<div class="form__item">
						<div class="core__form__file">
							<div class="core__form__file__text">
								 Загрузить картинки для анонса <?=$maxFiles;?> шт.
							</div>
							<div class="core__form__file__input js-field-block">
 <input class="core__form__file__input__control" id="js-preview-pictures" name="preview_pictures" type="file" multiple="">
								<div class="core__form__input__log core__form__input__log_danger">
								</div>
							</div>
						</div>
						<div class="core__form__description">
							 (несколько фотографий можно загрузить зажав клавишу Ctrl на клавиатуре)
						</div>
					</div>
					<div class="form__item">
						<div class="core__form__file">
							<div class="core__form__file__text">
								 Загрузить логотип компании
							</div>
							<div class="core__form__file__input js-field-block">
 <input class="core__form__file__input__control" name="logo" type="file">
								<div class="core__form__input__log core__form__input__log_danger">
								</div>
							</div>
						</div>
					</div>
 <br>
					<div class="core__form__check">
						<div class="core__form__checkbox js-field-block">
 <input id="form__checkbox__personal" name="agreement" type="checkbox"> <label for="form__checkbox__personal"> <small>
							Даю согласие на обработку персональных данных в соответствии с федеральным законом «О персональных данных» от 27.07.2006 N 152-ФЗ </small> </label>
							<div class="core__form__input__log core__form__input__log_danger">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form__user__center">
				<div class="core__line_bg">
				</div>
				<div class="core__form__btn">
 <button type="submit" class="core__form__btn__control core__btn core__btn_hidden">отправить</button>
				</div>
			</div>
		</div>
	</form>
</div>
<br><? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>