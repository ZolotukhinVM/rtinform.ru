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
    <?if($arParams['SOCIAL_BLOCK'] == 'Y'):?>
        <div class="share-block-line"></div>
        <script type="text/javascript">(function() {
                if (window.pluso)if (typeof window.pluso.start == "function") return;
                if (window.ifpluso==undefined) { window.ifpluso = 1;
                    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                    var h=d[g]('body')[0];
                    h.appendChild(s);
                }})();</script>
        <div class="pluso" data-background="transparent" data-options="big,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,facebook,twitter,email,bookmark,print"></div>
    <?endif;?>
</div>