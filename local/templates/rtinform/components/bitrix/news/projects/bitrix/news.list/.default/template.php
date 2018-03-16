<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="projects-list">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="project-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="project-image">
            <?if($arItem["DETAIL_TEXT"]):?>
            	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img class="preview_picture" border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" /></a>
            <?else:?>
                <img class="preview_picture" border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" />
            <?endif;?>
		</div>
		<div class="project-info">
            <?if($arParams['DISPLAY_NAME'] == 'Y'):?>
                <div class="project-name">
                    <?if($arItem["DETAIL_TEXT"]):?>
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem['NAME']?></a>
                    <?else:?>
                        <?=$arItem['NAME']?>
                    <?endif;?>
                </div>
            <?endif;?>
            <?if($arItem["PROPERTIES"]['CUSTOMER']['VALUE']):?>
            <div class="project-customer">
                <?if($arItem["DETAIL_TEXT"]):?>
        	        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["PROPERTIES"]['CUSTOMER']['VALUE']?></a>
                <?else:?>
                    <?=$arItem["PROPERTIES"]['CUSTOMER']['VALUE']?>
                <?endif;?>
            </div>
            <?endif;?>
        	<?=$arItem["PREVIEW_TEXT"];?>
		</div>
        <?if($arItem["DETAIL_TEXT"]):?>
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="super-link"></a>
        <?endif;?>
	</div>
<?endforeach;?>
	<div class="clear"></div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
