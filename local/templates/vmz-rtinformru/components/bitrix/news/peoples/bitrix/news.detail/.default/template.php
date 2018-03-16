<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<style>
.page-header { position: relative; height: 500px; background-color: #e8e8e8; background-position: 0% 10%; background-repeat: no-repeat; background-size: contain; overflow: hidden; font-weight: 400; line-height: normal; color: #fff; }

.page-header-i { position: absolute; z-index: 1; bottom: 1.5em; left: 0; right: 0; padding: 0 8.33%; }
.page-header .title { margin-bottom: .5em; font-weight: 300; font-size: 3.33em; }
.page-header .posttitle { position: relative; max-width: 60%; padding-top: .75em; font-size: 1.5em; /*color: rgba(255,255,255,.6);*/ }
.page-header .posttitle:before { position: absolute; top: 0; left: 0; width: 320px; height: 1px; background: #fff; }
.page-header cite { display: block; margin: 1em 0; font-style: italic; font-size: 1.78em; color: rgba(255,255,255,.7); }
.page-header.odd .page-header-i { top: 2.5em; }
.d-hb:before { display: block; height: 0; content: '.'; text-align: left; text-indent: -9999px; overflow: hidden; }
@media (max-width:1023px){

    .page-header.manager-item {
        min-height: 700px;
        height: auto;
        background-position: 80% 0;
        background-size: 150%;
    }
    .page-header.manager-item .page-header-i {
        top: 0;
        bottom: 0;
        margin-top: 350px;
        background: #e8e8e8;
        color:#000;
    }
</style>

<div class="page-header odd manager-item" style="background-image:url(<?=$arResult['DETAIL_PICTURE']['SRC1']?>)">

    <div class="page-header-i">
        <?$fio = explode(" ", $arResult["NAME"]);?>
        
        
        <div class="title"><?=$fio[0]?> <br><?=$fio[1]?> <br class="d-hide-sm" /><?=$fio[2]?></div>

        <div class="posttitle d-hb"><?=$arResult["PROPERTIES"]['POST']['VALUE']?></div>
        
    </div><!-- /page-header-i -->
</div><!-- /page-header -->

<?/*

<?=$arResult["PROPERTIES"]['POST']['VALUE']?>
<?=$arResult["NAME"];?>
<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult["NAME"]?>">
<?=$arResult["DETAIL_TEXT"];?>

*/?>


<?/*
<?if($arParams['SOCIAL_BLOCK'] == 'Y'):?>
    <div class="management-separate"></div>
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
*/?>

