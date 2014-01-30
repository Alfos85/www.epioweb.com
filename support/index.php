<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Центр поддержки");
$APPLICATION->SetPageProperty("description", "Отправьте вопрос специалистам технической поддержки и получите квалифицированную консультацию.");
$APPLICATION->SetTitle("Техническая поддержка EPIO Web-Alliance");
?> 
<h1> Отправить вопрос </h1>
 
<p><hr/></p>
 <?$APPLICATION->IncludeComponent("bitrix:support.wizard", "sup", array(
	"IBLOCK_TYPE" => "support_epio",
	"IBLOCK_ID" => "5",
	"PROPERTY_FIELD_TYPE" => "tupe_f",
	"PROPERTY_FIELD_VALUES" => "values_f",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
	"TICKETS_PER_PAGE" => "50",
	"MESSAGES_PER_PAGE" => "20",
	"MESSAGE_MAX_LENGTH" => "70",
	"MESSAGE_SORT_ORDER" => "asc",
	"SET_PAGE_TITLE" => "Y",
	"TEMPLATE_TYPE" => "standard",
	"SHOW_RESULT" => "Y",
	"SHOW_COUPON_FIELD" => "N",
	"SET_SHOW_USER_FIELD" => array(
	),
	"SECTIONS_TO_CATEGORIES" => "Y",
	"SELECTED_SECTIONS" => array(
		0 => "16",
		1 => "14",
		2 => "17",
		3 => "15",
	),
	"SECTION_16" => "22",
	"SECTION_14" => "20",
	"SECTION_17" => "23",
	"SECTION_15" => "21",
	"AJAX_OPTION_ADDITIONAL" => "",
	"VARIABLE_ALIASES" => array(
		"ID" => "ID",
	)
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>