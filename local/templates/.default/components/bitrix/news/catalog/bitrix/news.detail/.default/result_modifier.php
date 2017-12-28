<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \Lema\Common\Helper;

//links to catalog & price files
$arResult['USER_DATA'] = $arResult['CATALOG_FILE_LINK'] = $arResult['PRICE_FILE_LINK'] = null;
if(Helper::propFilled('CATALOG_FILE', $arResult))
    $arResult['CATALOG_FILE_LINK'] = \CFile::GetPath(current(Helper::propValue('CATALOG_FILE', $arResult)));
if(Helper::propFilled('PRICE_FILE', $arResult))
    $arResult['PRICE_FILE_LINK'] = \CFile::GetPath(current(Helper::propValue('PRICE_FILE', $arResult)));

//is VIP user ?
$arResult['IS_VIP'] = false;
$elementsSections = array();
if(Helper::propFilled('OPT_USER', $arResult))
{
    $arResult['USER_DATA'] = \UserData::instance(Helper::propValue('OPT_USER', $arResult));
    $arResult['IS_VIP'] = (bool) \UserData::instance(Helper::propValue('OPT_USER', $arResult))->get('UF_IS_VIP');

    $elements = \Lema\IBlock\Element::getListD7(LIblock::getId('catalog'), array(
        'filter' => array('NAME' => $arResult['USER_DATA']->get('WORK_COMPANY'), 'ACTIVE' => 'Y'),
        'select' => array('ID', 'IBLOCK_SECTION_ID'),
    ));
    foreach($elements as $element)
        $elementsSections[$element['IBLOCK_SECTION_ID']] = $element['ID'];
}

//user's product pictures
$arResult['PROPERTIES']['PICTURES']['FILE_DATA'] = array();
if(Helper::propFilled('PICTURES', $arResult))
{
    foreach($arResult['PROPERTIES']['PICTURES']['VALUE'] as $k => $fileId)
        $arResult['PROPERTIES']['PICTURES']['FILE_DATA'][$k] = \CFile::GetFileArray($fileId);
}

$sections = LemaISection::getSectionsByLevelD7(LIblock::getId('catalog'));
$arResult['SECTIONS'] = array();
