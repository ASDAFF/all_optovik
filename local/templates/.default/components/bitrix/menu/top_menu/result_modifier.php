<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
global $APPLICATION;
$arDir = explode('/',$APPLICATION->GetCurPage());
$sSelectCode = null;
$rsSect = CIBlockSection::GetList(Array(),Array("IBLOCK_ID"=>"4","ACTIVE"=>"Y"));
while ($arSect = $rsSect->Fetch())
{
    //Write all the data of the parent partitions to an array
    if($arSect['DEPTH_LEVEL'] == 1){
        $arSections[$arSect['ID']] = $arSect;
    }
    //Check if there is a SUB-CHARACTER CODE in the URL
    if(in_array($arSect['CODE'],$arDir)){
        //We pass on points of parent Sections
        for($i=0;$i<count($arResult);$i++){
            //We search in the link of the menu items for finding the symbolic code of the parent section
            if(stristr($arResult[$i]['LINK'], $arSections[$arSect['IBLOCK_SECTION_ID']]['CODE'])){
                $arResult[$i]['SELECTED'] = true;
                return;
            }
        }
    }
}