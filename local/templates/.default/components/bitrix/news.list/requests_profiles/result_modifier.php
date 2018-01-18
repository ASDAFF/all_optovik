<?
$iCount = null;
$row = CIBlockElement::GetList(Array(),Array('IBLOCK_ID' => $arResult['ID'], 'ACTIVE' => 'Y'),false,false, Array('ID'));
while ($res = $row->Fetch()){
    $iCount++;
    $arResult['COUNT_ELEMENTS'] = $iCount;
}