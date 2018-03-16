<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div id="licences">
<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
<?$i=0;$countItems=count($arResult["ITEMS"]);?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$i++;
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="row" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="col-md-3 hidden-xs">
				<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
					<? /*
					<script>
						$(function(){$("a.license").fancybox();});
					</script>
					*/ ?>
					<a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="license"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"></a>
				<?endif;?>
			</div>
			<div class="col-md-9">
				<h4><a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="license"><?=$arItem["NAME"]?></a></h4>
				<p><?=$arItem['PREVIEW_TEXT']?></p>
			</div>
		</div>
	<?endforeach;?>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>