<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
if ($USER->IsAuthorized())
    LocalRedirect(SITE_DIR . 'personal/profile/');
else
    $APPLICATION->AuthForm();

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>