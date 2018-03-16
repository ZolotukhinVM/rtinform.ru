<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация на КИБР");
?>
<?if (isset($_GET["key"]) and $_GET["key"]=="2017"):?>
<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form", 
	"kibr", 
	array(
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "Фамилия",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "Фотография (картинка анонса)",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array(
			0 => "2",
		),
		"IBLOCK_ID" => "20",
		"IBLOCK_TYPE" => "registration",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "56",
			1 => "57",
			2 => "58",
			3 => "59",
			4 => "60",
			5 => "61",
			6 => "62",
			7 => "63",
			8 => "64",
			9 => "79",
			10 => "NAME",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "56",
			1 => "57",
			2 => "58",
			3 => "60",
			4 => "62",
			5 => "63",
			6 => "64",
			7 => "NAME",
		),
		"RESIZE_IMAGES" => "Y",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "Благодарим Вас за регистрацию на заседание Клуба ИБ-директоров Государственной корпорации «Ростех»! Вы можете добавить еще одного участника.",
		"USER_MESSAGE_EDIT" => "Благодарим Вас за регистрацию на заседание Клуба ИБ-директоров Государственной корпорации «Ростех»! Вы можете добавить еще одного участника.",
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "kibr"
	),
	false
);?>
<?else:?>
<div class="alert alert-danger">
	<strong>Внимание:</strong> ошибка доступа!
</div>
<?endif;?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>