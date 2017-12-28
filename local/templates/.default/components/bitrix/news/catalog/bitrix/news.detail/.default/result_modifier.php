<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \Lema\Common\Helper;

$arResult['USER_DATA'] = $arResult['CATALOG_FILE_LINK'] = $arResult['PRICE_FILE_LINK'] = null;
if(Helper::propFilled('CATALOG_FILE', $arResult))
    $arResult['CATALOG_FILE_LINK'] = \CFile::GetPath(current(Helper::propValue('CATALOG_FILE', $arResult)));
if(Helper::propFilled('PRICE_FILE', $arResult))
    $arResult['PRICE_FILE_LINK'] = \CFile::GetPath(current(Helper::propValue('PRICE_FILE', $arResult)));

$arResult['IS_VIP'] = false;

if(Helper::propFilled('OPT_USER', $arResult))
{
    $arResult['USER_DATA'] = \UserData::instance(Helper::propValue('OPT_USER', $arResult));
    $arResult['IS_VIP'] = (bool) \UserData::instance(Helper::propValue('OPT_USER', $arResult))->get('UF_IS_VIP');
}

$arResult['PROPERTIES']['PICTURES']['FILE_DATA'] = array();
if(Helper::propFilled('PICTURES', $arResult))
{
    foreach($arResult['PROPERTIES']['PICTURES']['VALUE'] as $k => $fileId)
        $arResult['PROPERTIES']['PICTURES']['FILE_DATA'][$k] = \CFile::GetFileArray($fileId);
}