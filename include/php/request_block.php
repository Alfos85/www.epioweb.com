<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="request-block">
	<h2>Получите наше лучшее предложение!</h2>
	<div class="header-hr-min-blu"></div>
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
	    "",
	    Array(
	    	"AREA_FILE_SHOW" => "file",
		    "PATH" => SITE_DIR."include/php/request_button.php",
		    "EDIT_TEMPLATE" => ""
	    )
	);
	?>
</div>