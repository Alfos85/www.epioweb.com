<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="hr-content"></div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/php/portfolio-slider.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/php/request_block.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
<div id="clients-block">

<div class="our-clients">
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_DIR."include/php/ourclients.php",
	"EDIT_TEMPLATE" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>
</div>

<div class="testimonials">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/php/testimonials.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
</div>
</div>