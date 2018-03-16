<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$props = $arResult['PROPERTIES'];?>
<div class="album-detail-page">
    <div class="fotorama"
     data-nav="thumbs"
     data-thumbheight="56"
    >
    <?foreach($arResult['PHOTO'] as $photo):?>
            <a href="<?=$photo['ORIGINAL']?>" data-thumb="<?=$photo['THUMB']?>"></a>
    <?endforeach;?>
    </div>
    <div class="text_block">
        <?=$arResult["DETAIL_TEXT"];?>
    </div>
</div>