<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	"",
	Array(
		"INIT_MAP_TYPE" => "ROADMAP",
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:53.89727259015417;s:10:\"google_lon\";d:27.534276942852653;s:12:\"google_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:4:\"TEXT\";s:10:\"epioweb.by\";s:3:\"LON\";d:27.535150051117;s:3:\"LAT\";d:53.896581894794;}}}",
		"MAP_WIDTH" => "100%",
		"MAP_HEIGHT" => "400",
		"CONTROLS" => array("SMALL_ZOOM_CONTROL", "TYPECONTROL", "SCALELINE"),
		"OPTIONS" => array("ENABLE_DBLCLICK_ZOOM", "ENABLE_DRAGGING", "ENABLE_KEYBOARD"),
		"MAP_ID" => ""
	)
);?>