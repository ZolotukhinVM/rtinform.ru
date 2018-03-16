<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="projects-list">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    $prop = $arItem['PROPERTIES'];
	?>
	<div class="pub-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="pub-info">
            Публикация от <?=$prop['DATE']['VALUE']?> | <?=$prop['MASS_MEDIA']['VALUE']?>
		</div>
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem['NAME']?></a>
    </div>
<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
