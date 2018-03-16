<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(empty($arResult))
	return "";
$num_items = count($arResult);
global $APPLICATION;
$isH2 = $APPLICATION->GetPageProperty("ish2");
if($isH2 == 'Y' || $APPLICATION->GetProperty('isset_h1')){
    $APPLICATION->SetPageProperty("pagetitle","
        <h1>".$APPLICATION->GetTitle(false)."</h1>
<div class='page-title-line'></div>"
    );
    return "<h2>".htmlspecialcharsex($arResult[$num_items-2]["TITLE"])."</h2>";
} else {
    return "<h1>".htmlspecialcharsex($arResult[$num_items-1]["TITLE"])."</h1>";
}
?>