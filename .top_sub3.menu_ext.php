<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$aMenuLinksExt = array();
$iCount = null;
CModule::IncludeModule('iblock');
$res = CIBlockSection::GetList(Array(),Array("IBLOCK_ID" => 4, "=SECTION_ID" => 16, "ACTIVE" => "Y"),false,Array(),Array());
while($row = $res -> Fetch()){

    $iCount++;
    $arSection[$iCount] = Array(
        $row['NAME'],
        SITE_DIR.'catalog/'.$row['CODE'].'/',
        Array(),
        Array(),
        ""
    );

}
$aMenuLinksExt = array_merge($aMenuLinksExt,$arSection);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);