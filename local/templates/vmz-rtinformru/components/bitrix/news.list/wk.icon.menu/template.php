<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="directions-block">

<?foreach($arResult['ITEMS'] as $arKey => $arItem):?>

	<div class="direction direction-<?=$arKey+1?>">
		<a href="javascript:;" class="wk_direction_id<?=$arKey?>">
			<div class="directions-picture"></div>
			<div class="directions-name">
				<span><?=$arItem['NAME']?></span>
			</div>
		</a>
	</div>

<?endforeach;?>

</div>

<?foreach($arResult['ITEMS'] as $arKey => $arItem):?>

	<div class="direction_text" id="wk_direction_id<?=$arKey?>">
		<?=$arItem['PREVIEW_TEXT']?>

	<?if($arItem['DISPLAY_PROPERTIES']['LINK']['VALUE']):?>

		<a href="<?=$arItem['DISPLAY_PROPERTIES']['LINK']['VALUE']?>" class="more">Подробнее</a>

	<?endif;?>

	</div>

<?endforeach;?>