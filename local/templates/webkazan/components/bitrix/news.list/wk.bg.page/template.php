<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$wk_folder = explode('/', $APPLICATION->GetCurPage(false));?>

<?$wk_temp = false;?>

<?foreach($arResult['ITEMS'] as $arItem){

	if($arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'] === $wk_folder[1]){

		$wk_temp = $arItem['PREVIEW_PICTURE']['SRC'];

		break;
	}
}?>

<div class="wk_after_head_bg" <?=$wk_temp?'style="background-image:url(' . $wk_temp . ')"':''?>></div>