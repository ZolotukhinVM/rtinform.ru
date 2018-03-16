<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Стажировки в компании");
?><p>
</p>
<div>
	Возможности для студентов, выпускников и профессианалов. <br>
 <br>
	 Компания «РТ-ИНФОРМ» предоставляет услуги в области реализации ИТ-проектов: <br>
	<ul>
		<li>Внедрения бизнес-приложений; </li>
		<li>Разработки ИТ-инфраструктуры предприятий; </li>
		<li>ИТ-аутсорсинга. </li>
	</ul>
	 Мы приглашаем талантливых сотрудников - как успешных профессионалов, так и молодых специалистов принять участие в наших проектах. <br>
 <br>
	 Стажировка в «РТ-ИНФОРМ» даст Вам возможность: <br>
	<ul>
		<li>Принять участие в реализации сложных комплексных решений; </li>
		<li>Получить опыт командной работы над проектом; </li>
		<li>Улучшить практические навыки под руководством опытных наставников; </li>
		<li>Определить для себя область профессионального развития; </li>
		<li>Получить предложение о постоянной работе по итогам успешного завершения стажировки. </li>
	</ul>
	Вакансии для студентов и выпускников, начинающих специалистов: <br>
	<br>
</div>
<div id="mark">
	<div>
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"wk.vacancy.list",
	Array(
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "section",
		"IBLOCK_ID" => "5",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "NAME",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(),
		"PROPERTY_CODE" => array(),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "1",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => "modern",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Вакансии",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	)
);?>
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>