<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
?><div>
 <br>
	 Предлагаем вашему вниманию список открытых вакансий в компании «РТ-ИНФОРМ». <br>
	 Для вашего удобства все вакансии разделены на разделы по расположению офиса. <br>
 <br>
	 Вам необходимо перейти по одной из ссылок и подать заявку на интересующую вас позицию. <br>
 <br>
	 Если в данный момент вы не нашли подходящую вакансию, пришлите нам ваше резюме на <a href="mailto:hr@rtinform.ru">hr@rtinform.ru</a>, и мы обязательно свяжемся с вами при появлении интересной вакансии.<br>
 <br>
</div>
<div>
</div>
<div id="mark">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"vacancies",
	Array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000",
		"CACHE_TYPE" => "N",
		"COMPONENT_TEMPLATE" => "vacancies",
		"COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "section",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(0=>"",1=>"",),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE"
	)
);?>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>