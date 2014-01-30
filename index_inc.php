<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!-- Slider -->

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/php/slider.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>

<div id="home-services">

<h1 class="home-services-title">

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/home-services-title.html",
		"EDIT_TEMPLATE" => ""
	),
false
);?>

</h1>

<div class="hr-min"></div>

<h2 class="home-services-descr">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/home-services-descr.html",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
</h2>

</div>

<div id="home-anonsus">
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_DIR."include/php/anonsus.php",
	"EDIT_TEMPLATE" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
</div>

<!-- VIDEO -->

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/php/video.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>