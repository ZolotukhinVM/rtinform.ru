<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="news-detail-page">
    <?if(is_array($arResult['DETAIL_PICTURE'])):?>
        <div class="news-detail-picture"><img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult["NAME"]?>"/></div>
    <?endif;?>
    <div class="text_block">
        <?=$arResult["DETAIL_TEXT"];?>
    </div>
    <time class="vmz_date_create"><?=$arResult['ACTIVE_FROM']?></time>
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
        <div class="pluso" data-background="transparent" data-options="big,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,facebook,twitter,email,bookmark,print">
    <?endif;?>
</div>