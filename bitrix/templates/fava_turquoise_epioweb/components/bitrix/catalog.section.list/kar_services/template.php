<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="gx-anonsus">
<?foreach($arResult["SECTIONS"] as $arSection):?>
<?
	$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
	$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
?>
	
	<div id="<?=$this->GetEditAreaId($arSection['ID']);?>" class="gx-anons">
           <a href="<?=$arSection["SECTION_PAGE_URL"]?>">
	      <div class="gx-anons-img">
                 <img src="<?=$arSection["PICTURE"]["SRC"]?>" alt="<?echo $arSection["NAME"]?>">
              </div>

              <h2 class="gx-anons-title"><?echo $arSection["NAME"]?></h2>
           </a>
	   <p class="gx-anons-descr"><?echo $arSection["UF_SECTION_DESC"];?></p>  
	</div>
<?endforeach?>	
</div>