<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="company-header">

<div class="company-header-image"></div>

<div class="company-header-title"><?$APPLICATION->ShowTitle()?></div>
<div class="header-hr-min"></div>
<div class="company-header-descr">
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
