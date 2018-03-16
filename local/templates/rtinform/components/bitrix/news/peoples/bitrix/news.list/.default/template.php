<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="management-list">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="management-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="management-image">
            <?if($arItem["DETAIL_TEXT"]):?>
            	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img class="preview_picture" border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" /></a>
            <?else:?>
                <img class="preview_picture" border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" />
            <?endif;?>
		</div>
		<div class="management-info">
            <div class="management-name">
                <?if($arItem["DETAIL_TEXT"]):?>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem['NAME']?></a>
                <?else:?>
                    <?=$arItem['NAME']?>
                <?endif;?>
            </div>
            <div class="management-post">
                <?=$arItem['PROPERTIES']['POST']['VALUE']?>
            </div>
		</div>
	</div>
<?endforeach;?>
	<div class="clear"></div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
