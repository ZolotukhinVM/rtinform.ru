<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Документы");
?>
<div id="documents">
	<?$APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list",
		"documents",
		Array(
			"ADD_SECTIONS_CHAIN" => "Y",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"COUNT_ELEMENTS" => "Y",
			"IBLOCK_ID" => "21",
			"IBLOCK_TYPE" => "documents",
			"SECTION_CODE" => "",
			"SECTION_FIELDS" => array("", "NAME", ""),
			"SECTION_ID" => $_REQUEST["SECTION_ID"],
			"SECTION_URL" => "",
			"SECTION_USER_FIELDS" => array("", ""),
			"SHOW_PARENT_NAME" => "Y",
			"TOP_DEPTH" => "2",
			"VIEW_MODE" => "LINE"
		)
	);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>