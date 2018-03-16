<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/* $wkIsMain - является ли страница главной*/
if ($APPLICATION->GetCurPage(false) == SITE_DIR) $wkIsMain = true;
else $wkIsMain = false;

/* $wkThisAddr - определяем текущий раздел или страницу */
if ($_SERVER['PHP_SELF'] != '/bitrix/urlrewrite.php'):
	$wkThisAddr = $_SERVER['PHP_SELF'];
elseif(isset($_SERVER['REAL_FILE_PATH'])):
	$wkThisAddr = $_SERVER['REAL_FILE_PATH'];
else:
	$wkThisAddr = '/404.php';
endif;

/* Получаем список модулей подключаемых для текущей страницы  */
$wkThisAddr = str_replace('index.php', '', $wkThisAddr);

if (!CModule::IncludeModule("iblock")) return;

$wkBlockShow = Array();

$arSelect = Array("ID", "NAME", "PROPERTY_SPISOK");

$arFilter = Array("IBLOCK_ID" => 8, "ACTIVE"=>"Y");

$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);

while ($ob = $res->GetNext()) $wkBlockShow[$ob['ID']][] = $ob['PROPERTY_SPISOK_VALUE'];?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36905805 = new Ya.Metrika({
                    id:36905805,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36905805" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700italic,700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<link rel="icon" type="image/png" href="/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <title><?$APPLICATION->ShowTitle()?></title>

	<?
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.jcarousel.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/fancybox/jquery.fancybox.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/modernizr.custom.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.parallax.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.cslider.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/scripts.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.form.js');

	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/normalize.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/js/fancybox/jquery.fancybox.css');
	?>

    <?$APPLICATION->ShowHead();?>

</head>
<body class="<?=$wkIsMain?'index':'no_index'?>">
    <div class="page-wrapper">
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <header class="main">
            <div class="wrapper">
                <a href="/" class="logo">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_new.png" />
				</a>
                <div class="header-center">
                    <div class="header-text">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "AREA_FILE_SHOW" => "sect",
                                "AREA_FILE_SUFFIX" => "slogan",
                                "AREA_FILE_RECURSIVE" => "Y",
                                "EDIT_TEMPLATE" => ""
                            ),
                            false
                        );?>
                    </div>
                    <div class="buttons">
                        <a class="button" href="http://instel.ru/иас/307-2/">Подключение к ИАС</a>
                        <!--<a class="button bg-black" href="http://80.253.23.131/doc" target="_blank">Вход в РТ-Деск</a>-->
                        <a class="button bg-black" href="http://rt-desk.rtinform.ru/doc/" target="_blank">Вход в РТ-Деск</a>
                        <a class="button bg-black" href="/resheniya/edinoe-korporativnoe-kaznacheystvo/" target="_blank">ЕКК</a>
                    </div>
                </div>
                <div class="header-right">
                    <div class="phones">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "AREA_FILE_SHOW" => "sect",
                                "AREA_FILE_SUFFIX" => "phone_in_top",
                                "AREA_FILE_RECURSIVE" => "Y",
                                "EDIT_TEMPLATE" => ""
                            ),
                            false
                        );?>
                    </div>
                    <?$APPLICATION->IncludeComponent("bitrix:search.form","wk.bottom",Array(
                            "PAGE" => "#SITE_DIR#search/",
                            "USE_SUGGEST" => "N"
                        )
                    );?>
                </div>
                <div class="clear"></div>
                <?$APPLICATION->IncludeComponent("bitrix:menu","wk.top",
					array(
						"ROOT_MENU_TYPE" => "top",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "36000000",
						"MENU_CACHE_USE_GROUPS" => "N",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MAX_LEVEL" => "3",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"USE_EXT" => "N"
					),
					false
				);?>
            </div>
        </header>

	<?/* <--- Слайдер главной страницы или фоны для остальных --- */?>

		<?if($wkIsMain):?>

		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"wk.main.slider", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "6",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "STR_ONE",
			2 => "STR_TWO",
			3 => "STR_THREE",
			4 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "wk.main.slider",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>

		<?else:?>

		<div id="wk_top_bg">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"wk.bg.page",
				array(
					"IBLOCK_TYPE" => "content",
					"IBLOCK_ID" => "3",
					"NEWS_COUNT" => "20",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_ORDER1" => "DESC",
					"SORT_BY2" => "SORT",
					"SORT_ORDER2" => "ASC",
					"FILTER_NAME" => "",
					"FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"PROPERTY_CODE" => array(
						0 => "LINK",
						1 => "",
					),
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"CACHE_TYPE" => "N",
					"CACHE_TIME" => "36000000",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "N",
					"PREVIEW_TRUNCATE_LEN" => "",
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"PAGER_TITLE" => "",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "",
					"PAGER_SHOW_ALL" => "N",
					"AJAX_OPTION_ADDITIONAL" => ""
				),
				false
			);?>
			<div class="wk_block_header_title">
				<div class="left"></div>
				<div class="center">
                    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","page_title",Array("START_FROM" => "0","PATH" => "","SITE_ID" => "-"));?>
				</div>
				<div class="right"></div>
			</div>
		</div>

		<?endif;?>
		<?/* --- Слайдер главной страницы или фоны для остальных ---> */?>
    <div class="content-container">
		<div class="wrapper content">
			<section class="main">
		<?/* <--- Выводить ли хлебные крошки --- */?>
			<?if($APPLICATION->GetProperty('isset_breadcrumb') && !$wkIsMain):?>
				<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","wk.main",Array("START_FROM" => "0","PATH" => "","SITE_ID" => "-"));?>
			<?endif;?>
		<?/* --- Выводить ли хлебные крошки ---> */?>
				<div class="workarea">
                <?$APPLICATION->ShowProperty("pagetitle")?>
		<?/* <--- Выводить Блок выпадающих иконок --- */?>
		<?if(in_array($wkThisAddr, $wkBlockShow[38])):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"wk.icon.menu",
				Array(
					"IBLOCK_TYPE" => "content",
					"IBLOCK_ID" => "7",
					"NEWS_COUNT" => "20",
					"SORT_BY1" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_BY2" => "ID",
					"SORT_ORDER2" => "ASC",
					"FILTER_NAME" => "",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"PROPERTY_CODE" => array(0=>"",1=>"LINK",2=>"STR_ONE",3=>"STR_TWO",4=>"STR_THREE",5=>"",),
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"PREVIEW_TRUNCATE_LEN" => "",
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "Y",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"PAGER_TITLE" => "",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "",
					"PAGER_SHOW_ALL" => "N",
					"AJAX_OPTION_ADDITIONAL" => ""
				)
			);?>
		<?endif;?>
		<?/* --- Выводить Блок "Выпадающих иконок" ---> */?>
		<?/* <--- Выводить Блок "Карусель услуг" --- */?>
		<?if(in_array($wkThisAddr, $wkBlockShow[39])):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"wk.services.blocks",
				Array(
					"IBLOCK_TYPE" => "content",
					"IBLOCK_ID" => "4",
					"NEWS_COUNT" => "10",
					"SORT_BY1" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_BY2" => "ID",
					"SORT_ORDER2" => "ASC",
					"FILTER_NAME" => "",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"PROPERTY_CODE" => array(0=>"",1=>"",),
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "N",
					"PREVIEW_TRUNCATE_LEN" => "",
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"PAGER_TITLE" => "",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "",
					"PAGER_SHOW_ALL" => "N",
					"AJAX_OPTION_ADDITIONAL" => ""
				)
			);?>
		<?endif;?>
		<?/* --- Выводить Блок выпадающих иконок ---> */?>
