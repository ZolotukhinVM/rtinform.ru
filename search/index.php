<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"wk.search.page", 
	array(
		"RESTART" => "N",
		"NO_WORD_LOGIC" => "N",
		"CHECK_DATES" => "N",
		"USE_TITLE_RANK" => "N",
		"DEFAULT_SORT" => "rank",
		"FILTER_NAME" => "",
		"arrFILTER" => array(
			0 => "main",
			1 => "iblock_news",
		),
		"arrFILTER_iblock_news" => array(
			0 => "1",
		),
		"SHOW_WHERE" => "N",
		"SHOW_WHEN" => "N",
		"PAGE_RESULT_COUNT" => "50",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"USE_LANGUAGE_GUESS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "wk.all",
		"USE_SUGGEST" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"arrFILTER_main" => array(
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>