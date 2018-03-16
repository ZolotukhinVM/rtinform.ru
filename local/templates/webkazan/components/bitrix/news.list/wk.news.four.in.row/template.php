<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);?>

<div class="wk_news_four_in_row">

<?foreach($arResult["ITEMS"] as $arKey => $arItem):?>

	<div class="part<?=(($arKey+1) % 4==0)?' wk_on_four':''?>">
		<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="img">
			<span>
				<i><?=$arItem['ACTIVE_FROM']?></i>
				<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>" />
			</span>
		</a>
		<p>
			<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="title"><?=$arItem['NAME']?></a>
			<span><?=strip_tags($arItem['PREVIEW_TEXT'])?></span>
		</p>
	</div>

	<?if(($arKey+1) % 4==0):?>

	<div class="wk_clear"></div>

	<?endif;?>

<?endforeach;?>

</div>