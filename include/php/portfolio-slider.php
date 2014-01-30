<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="home-solutions">
	<h3>Наши работы <a href="/portfolio/">/ Показать все</a></h3>
	<?$APPLICATION->IncludeComponent(
		"geexo:geexo.bxslider",
	    "",
	    Array(
	    	"IBLOCK_TYPE" => "FAVA_SERVICES",
		    "IBLOCK_ID" => "3",
		    "ELEMENT_SORT_FIELD" => "sort",
		    "ELEMENT_SORT_ORDER" => "asc",
		    "ELEMENT_COUNT" => "10",
		    "SECTION_URL" => "",
		    "DETAIL_URL" => "",
		    "CACHE_TYPE" => "A",
		    "CACHE_TIME" => "0",
		    "CACHE_NOTES" => ""
	    )
    );?>
</div>