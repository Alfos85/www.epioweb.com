<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

if ($this->StartResultCache(3600))
{
    $idblock=$arParams["IBLOCK_ID"];
    $elCount=$arParams["IBLOCK_ELEMENT_COUNT"];

    if(CModule::IncludeModule('iblock'))  
    {

        $arSelect = Array("ID","NAME","PREVIEW_PICTURE","DETAIL_PAGE_URL");
          
        $arFilter = Array("IBLOCK_ID"=>$idblock, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");

        $res = CIBlockElement::GetList(Array("SORT"=>"ASC", "PROPERTY_PRIORITY"=>"ASC"), $arFilter, false, Array("nPageSize"=>$elCount), $arSelect);
        
        while($ob = $res->GetNextElement()) 
        {
          $arResult[] = $ob->GetFields();
        }
          
    } 

    $this->IncludeComponentTemplate();
}
?>