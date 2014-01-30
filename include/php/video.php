<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="video">
	<div id="video-rolik" class="video-rolik">
		<div class="video-overflow">
			<div class="video-run"></div>
			<div class="video-over-button">
				<div class="video-over-button-in">
					<div class="video-over-button-in1">123</div>
				</div>
			</div>
		</div>
	</div>
	<div class="video-descr">
		<div class="video-descr-inner">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/video-descr.html",
					"EDIT_TEMPLATE" => ""
					),
				false
				);
			?>
		</div>
	</div>
	<div class="clear-both"></div>
</div>