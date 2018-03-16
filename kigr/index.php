<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация на КИГР");
?>
<?if (isset($_GET["key"]) and $_GET["key"]=="2017"):?>
<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form", 
	"kigr", 
	array(
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "Фамилия",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "Фотография ",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array(
			0 => "2",
		),
		"IBLOCK_ID" => "18",
		"IBLOCK_TYPE" => "registration",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "30",
			1 => "31",
			2 => "32",
			3 => "33",
			4 => "34",
			5 => "35",
			6 => "36",
			7 => "37",
			8 => "38",
			9 => "39",
			10 => "40",
			11 => "41",
			12 => "42",
			13 => "43",
			14 => "44",
			15 => "45",
			16 => "46",
			17 => "47",
			18 => "48",
			19 => "49",
			20 => "50",
			21 => "51",
			22 => "NAME",
			23 => "PREVIEW_PICTURE",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "30",
			1 => "31",
			2 => "32",
			3 => "34",
			4 => "36",
			5 => "37",
			6 => "38",
			7 => "39",
			8 => "40",
			9 => "41",
			10 => "42",
			11 => "43",
			12 => "44",
			13 => "45",
			14 => "46",
			15 => "47",
			16 => "48",
			17 => "49",
			18 => "50",
			19 => "51",
			20 => "NAME",
			21 => "PREVIEW_PICTURE",
		),
		"RESIZE_IMAGES" => "Y",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "Ваша заявка принята к рассмотрению! Вы можете добавить еще одного участника.",
		"USER_MESSAGE_EDIT" => "Ваша заявка принята к рассмотрению! Вы можете добавить еще одного участника.",
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "kigr"
	),
	false
);?>
<?else:?>
<div class="alert alert-danger">
	<strong>Внимание:</strong> ошибка доступа!
</div>
<?endif;?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>