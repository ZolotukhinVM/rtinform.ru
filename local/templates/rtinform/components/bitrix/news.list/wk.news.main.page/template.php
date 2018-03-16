<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<?
if($USER->GetID()==32) {

}
?>
<div class="index-news">
	<?foreach($arResult["ITEMS"] as $arKey => $arItem):?>
        <?
            if(!$arItem['ACTIVE_FROM'] && $arItem['PROPERTIES']['DATE']['VALUE'])
                $arItem['ACTIVE_FROM'] = FormatDate("d.m.Y", MakeTimeStamp($arItem['PROPERTIES']['DATE']['VALUE']));
        ?>
		<div class="index-news__item<?=(($arKey+1) % 3==0)?' no-mr':''?>">
			<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="img">
				<span>
					<i><?=$arItem['ACTIVE_FROM']?></i>
					<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>" />
				</span>
			</a>
			<p>
				<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="title"><?=$arItem['NAME']?></a>
				<span><?$preview_text = (strlen($arItem['PREVIEW_TEXT'])>150)?substr($arItem['PREVIEW_TEXT'], 0, 150)."...":$arItem['PREVIEW_TEXT']?><?=strip_tags($preview_text);?></span>
			</p>
		</div>
	<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>