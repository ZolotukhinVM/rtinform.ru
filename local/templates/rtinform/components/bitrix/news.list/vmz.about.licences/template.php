<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?$i=0;$countItems=count($arResult["ITEMS"]);?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$i++;
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<h2><?echo $arItem["NAME"]?></h2>
		<p><i><?=$arItem['PREVIEW_TEXT']?></i></p>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<script>
			$(function(){$("a.license").fancybox();});
			</script>
			<div align="center"><a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="license"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="25%" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"></a></div>
		<?endif;?>
		<?if($i!=$countItems):?><hr class="wk_dashed_line"><?endif;?>
	</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
