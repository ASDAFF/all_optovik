<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \Lema\Common\Helper;

$optUserName = null;
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
    $optUserName = $arResult['USER_DATA']->get('WORK_COMPANY');

    //get all user elements
    $elements = \Lema\IBlock\Element::getListD7(LIblock::getId('catalog'), array(
        'filter' => array('NAME' => $optUserName, 'ACTIVE' => 'Y'),
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
    {
        $data = \CFile::GetFileArray($fileId);
        $data['PRODUCT_PRICE'] = $data['PRODUCT_NAME'] = null;
        //split description by '/' (NAME / PRICE)
        $tmp = preg_split('~\\s*?/\\s*?~u', $data['DESCRIPTION'], -1, PREG_SPLIT_NO_EMPTY);
        if(count($tmp) > 1)
        {
            $data['PRODUCT_PRICE'] = array_pop($tmp);
            if(count($tmp) > 1)
                $data['PRODUCT_NAME'] = join('/', $tmp);
            else
                $data['PRODUCT_NAME'] = $tmp[0];
        }
        $arResult['PROPERTIES']['PICTURES']['FILE_DATA'][$k] = $data;
    }
}

//build user section list
$sections = LemaISection::getSectionsByLevelD7(LIblock::getId('catalog'), array('select' => array('CODE')));
$arResult['ELEMENT_SECTIONS'] = array();
$urlMask = SITE_DIR . 'catalog/%s/%s/';
foreach($sections as $sectionId => $section)
{
    //no inner sections, go to next
    if(empty($section['SECTIONS']))
        continue;
    //build section url
    $section['SECTION_URL'] = sprintf($urlMask, $section['CODE'], $arResult['CODE']);
    //add section data
    $arResult['ELEMENT_SECTIONS'][$sectionId] = array_merge($section, array('SECTIONS' => array()));
    //add inner sections
    foreach($section['SECTIONS'] as $innerSectionId => $innerSection)
    {
        if(!isset($elementsSections[$innerSectionId]))
            continue;
        $innerSection['SECTION_URL'] = sprintf($urlMask, $innerSection['CODE'], $arResult['CODE']);
        $arResult['ELEMENT_SECTIONS'][$sectionId]['SECTIONS'][$innerSectionId] = $innerSection;
    }
    //no inner sections, remove it
    if(empty($arResult['ELEMENT_SECTIONS'][$sectionId]['SECTIONS']))
        unset($arResult['ELEMENT_SECTIONS'][$sectionId]);
}
