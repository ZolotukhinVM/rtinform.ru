<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul class="wk_bottom_nav">
<?foreach($arResult as $arKey => $arItem):?>
	<li>
	<?if($arItem["SELECTED"]):?>
		<a href="<?=$arItem["LINK"]?$arItem["LINK"]:'javascript:;'?>" class="selected"><?=$arItem["TEXT"]?></a>
	<?else:?>
		<a href="<?=$arItem["LINK"]?$arItem["LINK"]:'javascript:;'?>"><?=$arItem["TEXT"]?></a>
	<?endif?>
	</li>
<?endforeach?>
</ul>
<?endif?>