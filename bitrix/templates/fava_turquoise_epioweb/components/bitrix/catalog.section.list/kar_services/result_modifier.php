<?
foreach($arResult["SECTIONS"] as $ItemKey => $arSect):
      
$res = CIBlockElement::GetList(
      array("SORT"=>"ASC"),
      array("SECTION_ID" => $arSect["ID"]),
      false,
      false,
      array()
);

//printAdmin($arResult["SECTIONS"][$ItemKey]); 
  $el = $res->GetNext();
      $arResult["SECTIONS"][$ItemKey]["SECTION_PAGE_URL"] = $el["DETAIL_PAGE_URL"];
endforeach;