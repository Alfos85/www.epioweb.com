<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<h3>Наши клиенты</h3>
<?$APPLICATION->IncludeComponent(
	"geexo:geexo.clientsslider",
	"",
	Array(
		"IBLOCK_TYPE" => "FAVA_SERVICES",
		"IBLOCK_ID" => "2",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_COUNT" => "10",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "0",
		"CACHE_NOTES" => ""
	)
);
?> 