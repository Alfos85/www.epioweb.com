<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

if ($this->StartResultCache(3600))
{
    $idblock=$arParams["IBLOCK_ID"];

    if(CModule::IncludeModule('iblock'))  
    {

        $arSelect = Array("ID","NAME","PREVIEW_TEXT","DETAIL_TEXT","PROPERTY_SL_BACKGROUND","PROPERTY_SL_IMG","PROPERTY_SL_TITLE","PROPERTY_SL_BUTTON_TEXT","PROPERTY_SL_BUTTON_LINK","PROPERTY_SL_FLOAT");
          
        $arFilter = Array("IBLOCK_ID"=>$idblock, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
        $res = CIBlockElement::GetList(Array("SORT"=>"ASC", "PROPERTY_PRIORITY"=>"ASC"), $arFilter, false, false, $arSelect);
        
        while($ob = $res->GetNextElement()) 
        {
          $arResult[] = $ob->GetFields();
        }
          
    } 

    $this->IncludeComponentTemplate();
}
?>