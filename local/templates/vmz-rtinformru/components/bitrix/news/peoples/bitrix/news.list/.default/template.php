<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="managment">
    <?$num = 0;?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
    	<?
        $num++;
    	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    	?>
        <div class="row" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="col-md-3" >
                <h3><?=$arItem["NAME"]?></h3>
                <span><?=$arItem['PROPERTIES']['POST']['VALUE']?></span>
            </div>
            <div class="col-md-9">
                <p><?=$arItem["DETAIL_TEXT"]?></p>
            </div>
        </div>
        <?if($num!=6):?><hr><?endif;?>
    <?endforeach;?>
</div>
<?/*
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
*/        
?>