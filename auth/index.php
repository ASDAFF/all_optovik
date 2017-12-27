<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>
<? if (!$USER->IsAuthorized()): ?>
    <? if (empty($_GET['register']) || $_GET['register'] != 'yes'): ?>
        <? $APPLICATION->IncludeComponent("bitrix:system.auth.authorize", "auth", Array(
            "AUTH_RESULT" => $APPLICATION->arAuthResult
        ),
            false
        ); ?>
    <? else: ?>
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.register",
            "registration",
            Array(
                "AUTH" => "N",
                "REQUIRED_FIELDS" => array("WORK_COMPANY", "WORK_STREET", "WORK_MAILBOX", "WORK_CITY", "WORK_PROFILE"),
                "SET_TITLE" => "N",
                "SHOW_FIELDS" => array("WORK_COMPANY", "WORK_WWW", "WORK_STREET", "WORK_MAILBOX", "WORK_CITY", "WORK_PROFILE"),
                "SUCCESS_PAGE" => "",
                "USER_PROPERTY" => array(),
                "USER_PROPERTY_NAME" => "",
                "USE_BACKURL" => "N"
            )
        ); ?>
    <? endif; ?>
<? endif; ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>