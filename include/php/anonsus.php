<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div style="width: 84%; margin: 0px auto;">
<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "kar_services", array(
	"IBLOCK_TYPE" => "FAVA_SERVICES",
	"IBLOCK_ID" => "4",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	"SECTION_CODE" => "",
	"COUNT_ELEMENTS" => "Y",
	"TOP_DEPTH" => "2",
	"SECTION_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"SECTION_USER_FIELDS" => array(
		0 => "UF_SECTION_DESC",
		1 => "",
	),
	"SECTION_URL" => "#CODE#",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"ADD_SECTIONS_CHAIN" => "Y"
	),
	false
);?>
</div>