<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul class="left-menu">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="selected"><?=$arItem["TEXT"]?></li>
	<?else:?>
		<a href="<?=$arItem["LINK"]?>"><li><?=$arItem["TEXT"]?></li></a>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>