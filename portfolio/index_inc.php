<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="solutions-header">

<div class="solutions-header-images">
<div class="solutions-header-img1"></div>
<div class="solutions-header-img2"></div>
<div class="solutions-header-img3"></div>
</div>

<div class="solutions-header-title"><?$APPLICATION->ShowTitle()?></div>
<div class="header-hr-min"></div>
<div class="solutions-header-descr">
<?
$APPLICATION->AddBufferContent('ShowCondDescription');

function ShowCondDescription()
{
  global $APPLICATION;
 if (!$APPLICATION->GetProperty("description"))
    return "Описание текущей страницы (description)";
 else
    return $APPLICATION->GetProperty("description");
}
?>
</div>
</div>
