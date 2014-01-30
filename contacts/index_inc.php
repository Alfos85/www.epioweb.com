<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="map">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/php/map.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
</div>
<div class="contacts-header-title"><?$APPLICATION->ShowTitle()?></div>
<div class="header-hr-min-blu"></div>
<div class="contacts-header-descr">
<?
$APPLICATION->AddBufferContent('ShowCondDescription');

function ShowCondDescription()
{
  global $APPLICATION;
 if (!$APPLICATION->GetProperty("description"))
    return "Описание текущей страницы или раздела";
 else
    return $APPLICATION->GetProperty("description");
}
?>
</div>
</div>
<div class="contact-info" id="form">
	<span>
		<b>Адрес:</b>&nbsp;
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
	        "",
	        Array(
	        	"AREA_FILE_SHOW" => "file",
		        "PATH" => SITE_DIR."include/adres.html",
		        "EDIT_TEMPLATE" => ""
	        ),
	        false
	    );?>
    </span>
    <br>
    <span>
    	<b>Телефон:</b>&nbsp;
    	<?$APPLICATION->IncludeComponent(
    		"bitrix:main.include",
	        "",
	        Array(
	        	"AREA_FILE_SHOW" => "file",
		        "PATH" => SITE_DIR."include/phone.html",
		        "EDIT_TEMPLATE" => ""
	        ),
	        false
        );?>
    </span>
    <br>
    <span>
    <b>Email:</b>&nbsp;
    <?$APPLICATION->IncludeComponent(
    	"bitrix:main.include",
	    "",
	    Array(
	    	"AREA_FILE_SHOW" => "file",
		    "PATH" => SITE_DIR."include/email.html",
		    "EDIT_TEMPLATE" => ""
		    ),
        false
    );?>
    </span>
</div>