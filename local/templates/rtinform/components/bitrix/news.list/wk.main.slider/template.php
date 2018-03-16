<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule("iblock");
?>

<div id="da-slider" class="da-slider">

<?foreach($arResult['ITEMS'] as $arKey => $arItem):?>
<?if($arItem['PROPERTIES']['EVENT']['VALUE']):
	$res = CIBlockElement::GetByID($arItem['PROPERTIES']['EVENT']['VALUE']);
	if($ar_res = $res->GetNext()){
		$arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'] = $ar_res['DETAIL_PAGE_URL'];
	}
if(!$arItem['PREVIEW_PICTURE']['SRC']){
	$arItem['PREVIEW_PICTURE']['SRC'] = SITE_TEMPLATE_PATH."/img/default_slide.jpg";
}
?>
<??>
<?endif;?>
	<div class="da-slide">
		<div class="slide-wrapper">
			<div class="slide-text"></div>
			<h2><?=$arItem['NAME']?></h2>
			<p>
				<span>
					<span>
						<span>
							<?=$arItem['DISPLAY_PROPERTIES']['STR_ONE']['VALUE']?>
						</span>
						<?=$arItem['DISPLAY_PROPERTIES']['STR_TWO']['VALUE']?>
					</span>
					<?=$arItem['DISPLAY_PROPERTIES']['STR_THREE']['VALUE']?>
				</span>
			</p>

		<?if($arItem['DISPLAY_PROPERTIES']['LINK']['VALUE']):?>

			<a href="<?=$arItem['DISPLAY_PROPERTIES']['LINK']['VALUE']?>" class="da-link">Подробнее</a>
			<?if($arItem['PROPERTIES']['EVENT']['VALUE']):?>
			<a href="javascript:void()" data-id="<?=$arItem['PROPERTIES']['EVENT']['VALUE']?>" class="da-link2">Регистрация</a>
			<?endif;?>
		<?endif;?>

		</div>
		<div class="da-img" style="background-image:url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>')">

		<?if($arKey==0):?>

			<div style="background-image:url(<?=$templateFolder?>/img/paralax.bg1.png)" class="wk_paralax_one wk_paralax_bg">
				<div style="background-image:url(<?=$templateFolder?>/img/paralax.bg2.png)" class="wk_paralax_two wk_paralax_bg">
					<div style="background-image:url(<?=$templateFolder?>/img/paralax.bg3.png)" class="wk_paralax_three wk_paralax_bg"></div>
				</div>
			</div>

		<?endif;?>

		</div>
	</div>

<?endforeach;?>

	<nav class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>
	</nav>
</div>