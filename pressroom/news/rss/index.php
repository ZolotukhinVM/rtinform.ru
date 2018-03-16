<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?><?$APPLICATION->IncludeComponent(
	"bitrix:rss.out",
	"",
	Array(
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"FILTER_NAME" => "",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"NUM_DAYS" => "10",
		"NUM_NEWS" => "10",
		"RSS_TTL" => "60",
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"YANDEX" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>