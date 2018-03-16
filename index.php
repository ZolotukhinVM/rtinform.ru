<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("isset_leftmenu", "0");
$APPLICATION->SetTitle("РТ-ИНФОРМ");?> 
<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-xs-12 logo">
				<h3 class="logo-header"><a href="/catalog/">НАШИ УСЛУГИ</a></h3>
				<a href="/catalog/"><img src="<?=SITE_TEMPLATE_PATH?>/img/main-but1.png" alt="Услуги"></a>
			</div>
			<div class="col-sm-7 hidden-xs text block2-services">
				<h3><a href="/catalog/">НАШИ УСЛУГИ</a></h3>
				<span><?$APPLICATION->IncludeFile(SITE_DIR."include/main_services.inc", Array(), Array("MODE"=>"text"));?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-7 hidden-xs text block2-resheniya">
				<h3><a href="/resheniya/">НАШИ РЕШЕНИЯ</a></h3>
				<span><?$APPLICATION->IncludeFile(SITE_DIR."include/main_resheniya.inc", Array(), Array("MODE"=>"text"));?></span>
			</div>
			<div class="col-sm-5 col-xs-12 logo">
				<h3 class="logo-header"><a href="/resheniya/">НАШИ РЕШЕНИЯ</a></h3>
				<a href="/resheniya/"><img src="<?=SITE_TEMPLATE_PATH?>/img/main-but2.png" alt="Решения"></a>
			</div>
		</div>
	</div>
</section>
<section id="news">
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list", 
		"vmz.main.news.list", 
		array(
			"ACTIVE_DATE_FORMAT" => "j F Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => $_REQUEST["ID"],
			"IBLOCK_TYPE" => "news",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "10",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"COMPONENT_TEMPLATE" => "vmz.main.news.list"
		),
		false
	);?>
</section>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>