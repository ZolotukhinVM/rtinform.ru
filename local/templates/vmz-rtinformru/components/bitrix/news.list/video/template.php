<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<div class="main-list">
    <div class="row">
        <?foreach($arResult["ITEMS"] as $key => $arItem):?>
            <?$arItem['VIDEO'] = preg_replace('#^.*?\?v=#','',$arItem['PROPERTIES']['YOUTUBE']['VALUE']);?>
                <?$num++;?>
                <div class="col-md-3">
                    <?if($arItem["PREVIEW_PICTURE"]["SRC"] != ""):?>
                        <div class="img"><a href="http://www.youtube.com/embed/<?=$arItem['VIDEO']?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" /></a></div>
                    <?endif;?>
                    <div class="title"><a href="http://www.youtube.com/embed/<?=$arItem['VIDEO']?>"><?=$arItem["NAME"]?></a></div>
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