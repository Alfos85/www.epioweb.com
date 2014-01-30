<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
	<title>ЭПИО Веб-Альянс :: <?$APPLICATION->ShowTitle()?></title>
	<?IncludeTemplateLangFile(__FILE__);?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
	<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/jquery.bxslider/jquery.bxslider.css" rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<?$APPLICATION->ShowHead();?>
	<script src="<?=SITE_TEMPLATE_PATH?>/script.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/lib/jquery.easing-1.3.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/lib/jquery.mousewheel.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/lib/jquery.transit.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
	<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.liquidcarousel.js');?>
	<? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/liquidcarousel.css") ;?>
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

</head>
<body>
	<div class="loader"></div>
	<div id="wrapper">
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<header>
			<div id="header-inner">
				<hgroup>
					<a<?if ($curPage != SITE_DIR."index.php"):?> href="<?=SITE_DIR?>" <?endif;?>>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."include/logo.html",
								"EDIT_TEMPLATE" => ""
								),
							false
						);?>
					</a>
					<span class="slogan">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."include/slogan.html",
								"EDIT_TEMPLATE" => ""
								),
							false
						);?>
					</span>
				</hgroup>
				<nav>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "first_menu", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "4",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
				</nav>
			</div>
		</header>
		<div class="header-stabile"></div>
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "page",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "standard.php"
			)
		);?>
</div>
		<div id="content-wrapper">
			<div id="content" class="<? if($APPLICATION->GetCurDir() == SITE_DIR."about/") echo 'left-content'; else echo 'content';?>">