<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Мы всегда Вам рады!");
$APPLICATION->SetTitle("Контакты");
?><?$APPLICATION->IncludeComponent("bitrix:main.feedback", "geexoform", array(
	"USE_CAPTCHA" => "N",
	"OK_TEXT" => "Ваше сообщение отправленно, спасибо!",
	"EMAIL_TO" => "a.ustinovich@epioconsult.com",
	"REQUIRED_FIELDS" => array(
	),
	"EVENT_MESSAGE_ID" => array(
	)
	),
	false
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>