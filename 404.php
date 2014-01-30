<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Страница не существует :(");
?>
<div style="padding: 20px; min-height: 400px;">
	<h1 style="font-size: 3em; color: #000; font-weight: 400;">404 Страница не существует :(</h1>
	<a href="<?=SITE_DIR?>"><h3>Вернуться на глувную</h3></a>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>