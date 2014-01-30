<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

		<script type="text/javascript">
			$(document).ready(function() {
			$('#liquid1').liquidcarousel({height:160, duration:1000, hidearrows:true});
		});
	</script>
<div id="liquid1" class="liquid">
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
	<span class="previous"></span>
	<div class="wrapper">
		<ul>
		<?foreach($arResult['ITEMS'] as $arItem):?>
			<li id="<?=$this->GetEditAreaId($arItem['ID']);?>"><a href="<?= $arItem['DETAIL_PAGE_URL']?>"><img src="<?= $arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?= $arItem['NAME']?>"/></a></li>
		<?endforeach?>
		</ul>
	</div>
	<span class="next"></span>
</div>