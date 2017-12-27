<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$siteName = 'All-Optovik';

$title = $siteName . ' - 404 ошибка, страница перемещина или удалена';
defined('ERROR_404') or define('ERROR_404', 'Y');
\CHTTP::SetStatus('404 Not Found');
$APPLICATION->SetTitle($title);
$APPLICATION->SetPageProperty('title', $title);
$APPLICATION->SetPageProperty('description', $title);

?>
<div class="container">
    <h1 class="pagetitle"><?=$title;?></h1>
    <br/>
    Уважаемый посетитель! К сожалению, запрашиваемая Вами страница не доступна. Это могло произойти по следующим причинам:
    <ul>
        <li>- страница была удалена</li>
        <li>- страница была переименована</li>
        <li>- Вы допустили ошибку в адресе http<?=empty($_SERVER['HTTPS']) ? '' : 's'?>://<?= $_SERVER['SERVER_NAME'] . $APPLICATION->GetCurPageParam()?></li>
    </ul>
    <br/>
    Пожалуйста, перейдите на <a href="<?=SITE_DIR?>">главную страницу сайта</a>, в <a href="<?=SITE_DIR?>catalog/">каталог товаров</a>.
</div>


<? require($_SERVER["DOCUMENT_ROOT"] . '/bitrix/footer.php'); ?>
