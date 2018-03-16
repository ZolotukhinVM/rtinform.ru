<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);?>
<div class="index-news">
	<?foreach($arResult["ITEMS"] as $arKey => $arItem):?>
		<div class="index-news__item<?=(($arKey+1) % 3==0)?' no-mr':''?>">
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
	<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>