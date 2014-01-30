<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> 
<div id="service-header">
  <div class="service-header-images"> 
    <div class="service-header-img1"></div>
   
    <div class="service-header-img2"></div>
   
    <div class="service-header-img3"></div>
   </div> 
  <div class="service-header-title"><?$APPLICATION->ShowViewContent("sliders_title")/* $APPLICATION->ShowTitle() */?></div>
 
  <div class="header-hr-min"></div>
 
  <div class="service-header-descr"> 
<? $APPLICATION->AddBufferContent('ShowCondDescription');
function ShowCondDescription()
{
  global $APPLICATION;
 if (!$APPLICATION->GetProperty("description"))
    return "Описание текущей страницы";
 else
    return $APPLICATION->GetProperty("description");
}
?> 
   </div>
</div>
