<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use \Lema\Common\Helper,
    \Lema\Common\User;

//Is POST data sent ?
empty($_POST) && exit;

//set rules & fields for form
$form = new \Lema\Forms\AjaxForm(array(
    array('name', 'required', array('message' => 'Имя и фамилия обязательны к заполнению')),
    array('email', 'required', array('message' => 'E-mail обязателен к заполнению')),
    array('email', 'email', array('message' => 'Неверный формат E-mail')),
    array('phone', 'required', array('message' => 'Телефон обязателен к заполнению')),
    array('phone', 'phone', array('message' => 'Телефон должен быть в формате +7 (999) 666-33-11')),
    array('request', 'required', array('message' => 'Текст запроса обязателен к заполнению')),
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
    $status = $form->formActionFull(
        //iblock id
            LIblock::getId('requests'),
            //iblock add params
            array(
                'IBLOCK_SECTION_ID' => (int) $form->getField('section'),
                'NAME' => Helper::enc($form->getField('name')),
                'PREVIEW_TEXT' => Helper::enc($form->getField('request')),
                'PROPERTY_VALUES' => array(
                    'OPT_USER' => $form->getField('opt_user_id'),
                    'EMAIL' => Helper::enc($form->getField('email')),
                    'PHONE' => Helper::enc($form->getField('phone')),
                    'COMPANY_NAME' => Helper::enc($form->getField('company_name')),
                ),
                'ACTIVE' => 'N',
            ),
            //email event name
            'OPT_USER_REQUEST',
            //email send params
            array(
                'AUTHOR' => $form->getField('company_name'),
            )
        );

    echo json_encode($status ? array('success' => true) : array('errors' => $form->getErrors()));
}
else
    echo json_encode(array('errors' => $form->getErrors()));