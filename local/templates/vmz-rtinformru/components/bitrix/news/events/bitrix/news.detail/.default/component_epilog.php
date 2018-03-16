<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$APPLICATION->SetPageProperty("ish2", "Y");

if($arResult['PROPERTIES']['PHOTO']['VALUE']){
    ?>
    <br/>
    <br/>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "gallery",
        Array(
            "COMPONENT_TEMPLATE" => "gallery",
            "IBLOCK_TYPE" => "media",
            "IBLOCK_ID" => "12",
            "ELEMENT_ID" => $arResult['PROPERTIES']['PHOTO']['VALUE'],
            "ELEMENT_CODE" => "",
            "CHECK_DATES" => "Y",
            "FIELD_CODE" => array("", ""),
            "PROPERTY_CODE" => array("", "MORE_PHOTO", ""),
            "IBLOCK_URL" => "",
            "DETAIL_URL" => "",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_GROUPS" => "N",
            "SET_TITLE" => "N",
            "SET_CANONICAL_URL" => "N",
            "SET_BROWSER_TITLE" => "N",
            "BROWSER_TITLE" => "-",
            "SET_META_KEYWORDS" => "N",
            "META_KEYWORDS" => "-",
            "SET_META_DESCRIPTION" => "N",
            "META_DESCRIPTION" => "-",
            "SET_LAST_MODIFIED" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "ADD_ELEMENT_CHAIN" => "N",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "USE_PERMISSIONS" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "USE_SHARE" => "N",
            "PAGER_TEMPLATE" => ".default",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Страница",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "SET_STATUS_404" => "N",
            "SHOW_404" => "N",
            "MESSAGE_404" => ""
        )
    );?>
<?}
?>
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