<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<div id="news-detail">
    <div class="text_block">
        <h3><?=$arResult['NAME'];?></h3>
            <?if(is_array($arResult['DETAIL_PICTURE'])):?>
                <div class="detail-image" style="background: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>) 50% 50% no-repeat;"></div>

            <?endif;?>
        <?=$arResult["DETAIL_TEXT"];?>
    </div>

    <div id="news-footer">
        <div class="row">
            <div class="col-sm-6">
                <?if(!empty($arResult[TAGS])):?>
                    <?foreach (explode(",", $arResult["TAGS"]) as $value):?>
                        <a href="/search/?q=<?=trim($value)?>" class="tags">#<?=trim($value)?></a><br>
                    <?endforeach;?>
                <?endif?>    
                <img src="<?=SITE_TEMPLATE_PATH?>/action/qrcode.php?url=<?=$APPLICATION->GetCurPage()?>" id="qrcodeimage" data-toggle="tooltip" data-placement="bottom" title="QR-код с ссылкой на новость">
            </div>    
            <div class="col-sm-6">
                <time class="date" id="dateid"><?=GetMessage("DATE_ADD");?> <?=$arResult['ACTIVE_FROM']?></time>
            </div>
        </div>
    </div>

  
    <?$rs=CIBlockElement::GetList(array("active_from" => "desc"), array("ACTIVE"=>"Y", "IBLOCK_ID"=>$arResult["IBLOCK_ID"]), false, array("nElementID"=>$arResult["ID"], "nPageSize"=>1), array("ID", "DETAIL_PAGE_URL"));
    while($ar=$rs->GetNext()){$page[] = array('ID'=> $ar["ID"],'URL'=>$ar["DETAIL_PAGE_URL"],); }?>

    <div id="news-lnk">
        <div class="row">
        <?if (count($page) == 2 && $arResult["ID"] == $page[0]['ID']):?>
            <div class="forward">
                <a href="<?=$page[1]['URL']?>"><?=GetMessage("NEWS_LNK_FORWARD")?></a>
            </div>
        <?elseif (count($page) == 3):?> 
            <div class="col-md-6">
                <div class="back"><a href="<?=$page[0]['URL']?>"><span class="arrow-back"></span><?=GetMessage("NEWS_LNK_BACK")?></a></div>
            </div>
            <div class="col-md-6">
                <div class="forward"><a href="<?=$page[2]['URL']?>"><?=GetMessage("NEWS_LNK_FORWARD")?><span class="arrow-forward"></span></a></div>
            </div>
        <?elseif (count($page) == 2 && $arResult["ID"] == $page[1]['ID']):?>
            <div class="back">
                <a href="<?=$page[0]['URL']?>"><?=GetMessage("NEWS_LNK_BACK")?></a>
            </div>
        <?endif;?>
        </div>
    </div>
</div>