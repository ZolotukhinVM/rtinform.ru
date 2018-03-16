<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
    <?$num=0;?>
    <div id="projects-list" class="main-list">
        <div class="row">
            <?foreach($arResult["ITEMS"] as $key => $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>            
                <?$num++;?>
                <div class="col-md-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="customer"><?=$arItem[PROPERTIES][CUSTOMER][VALUE]?></div>
                    <div class="title"><strong><?=$arItem["NAME"]?></strong></div>
                <?if ($num%4 == 0):?>
                    </div><div class="row">
                <?endif;?>
                </div><!-- /col-md-* -->
            <?endforeach;?>
        </div>
    </div><!-- /main-list -->
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>