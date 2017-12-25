<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use \Lema\Common\Helper,
    \Lema\Common\User;

//Is POST data sent ?
empty($_POST) && exit;

//set rules & fields for form
$form = new \Lema\Forms\AjaxForm(array(
    array('company_name', 'required', array('message' => 'Название компании обязательно к заполнению')),
    array('email', 'required', array('message' => 'E-mail обязателен к заполнению')),
    array('email', 'email', array('message' => 'Неверный формат E-mail')),
    array('city', 'required', array('message' => 'Город обязателен к заполнению')),
    array('address', 'required', array('message' => 'Адрес обязателен к заполнению')),
    array('description', 'required', array('message' => 'Описание деятельности компании обязательно к заполнению')),
    //array('section', 'required', array('message' => 'Раздел обязателен к заполнению')),
    //array('work_conditions', 'required', array('message' => 'Условия работы обязательны к заполнению')),
    //array('delivery_conditions', 'required', array('message' => 'Условия доставки обязательны к заполнению')),
    //array('pay_conditions', 'required', array('message' => 'Условия оплаты обязательны к заполнению')),
    //array('discounts', 'required', array('message' => 'Скидки обязательны к заполнению')),
    array('agreement', 'required', array('message' => 'Вы не согласились с условиями')),

),
    $_POST
);

//check form fields
if($form->validate())
{
    $user = new \CUser();
    $fields = array(
        'WORK_MAILBOX' => $form->getField('email'),
        'WORK_COMPANY' => $form->getField('company_name'),
        'WORK_WWW' => $form->getField('site'),
        'WORK_CITY' => $form->getField('city'),
        'WORK_STREET' => $form->getField('address'),
        'WORK_PROFILE' => $form->getField('description'),
        'UF_WORK_COND' => $form->getField('work_conditions'),
        'UF_DELIVERY_COND' => $form->getField('delivery_conditions'),
        'UF_PAY_COND' => $form->getField('pay_conditions'),
        'UF_DISCOUNTS' => $form->getField('discounts'),
    );

    if(!empty($_FILES['logo']['tmp_name']))
    {
        $types = '(?:jpe?g|png|gif)';
        if(preg_match('~\\.' . $types . '$~iu', $_FILES['logo']['name']) && preg_match('~/' . $types . '$~iu', $_FILES['logo']['type']))
            $fields['WORK_LOGO'] = \CFile::SaveFile($_FILES['logo']);
    }

    $status = $user->Update(User::get()->GetId(), $fields);

    /*$status = $form->formActionFull(
    //iblock id
        2,
        //iblock add params
        array(
            'NAME' => Helper::enc($form->getField('name')),
            'PREVIEW_TEXT' => Helper::enc($form->getField('text')),
            'PROPERTY_VALUES' => array(
                'EMAIL' => $form->getField('email'),
                'PHONE' => $form->getField('phone'),
            ),
            'ACTIVE' => 'Y',
        ),
        //email event name
        'FEEDBACK_FORM',
        //email send params
        array(
            'AUTHOR' => $form->getField('name'),
            'TEXT' => $form->getField('text'),
            'EMAIL' => $form->getField('email'),
            'PHONE' => $form->getField('phone'),
        )
    );*/

    echo json_encode($status ? array('success' => true) : array('errors' => $form->getErrors()));
}
else
    echo json_encode(array('errors' => $form->getErrors()));