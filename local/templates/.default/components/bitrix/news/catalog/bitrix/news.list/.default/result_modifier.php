<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \Lema\Common\Helper;

foreach($arResult['ITEMS'] as $k => $arItem)
{
    //company logo
    $arResult['ITEMS'][$k]['OPT_LOGO'] = $arResult['ITEMS'][$k]['OPT_LOGO_SRC'] = null;
    if(Helper::propFilled('OPT_USER', $arItem))
    {
        $logo = \UserData::instance((int) Helper::propValue('OPT_USER', $arItem))->get('WORK_LOGO');
        $arResult['ITEMS'][$k]['OPT_LOGO'] = $logo;
        $arResult['ITEMS'][$k]['OPT_LOGO_SRC'] = empty($logo) ? null : \CFile::GetPath($logo);
    }
    //preview pictures for item
    $arResult['ITEMS'][$k]['PREVIEW_PICTURES'] = array();
    if(Helper::propFilled('PREVIEW_PICTURES', $arItem))
    {
        $files = Helper::propValue('PREVIEW_PICTURES', $arItem);
        if(!empty($files))
        {
            foreach($files as $fileId)
                $arResult['ITEMS'][$k]['PREVIEW_PICTURES'][$fileId] = \CFile::GetPath($fileId);
        }
    }
}