<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$prop = $arResult['PROPERTIES'];
?>
<div class="pub-detail-page">
    <div class="pub-info">
        Публикация от <?=$prop['DATE']['VALUE']?> | <?=$prop['MASS_MEDIA']['VALUE']?>
    </div>
    <?if(is_array($arResult['DETAIL_PICTURE'])):?>
    <div class="pub-detail-picture"><img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult["NAME"]?>"/></div>
    <?endif;?>
	<div class="text_block">
		<?=$arResult["DETAIL_TEXT"];?>
	</div>
<?if($arParams['SOCIAL_BLOCK'] == 'Y'):?>
    <div class="pub-separate"></div>
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