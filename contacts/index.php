<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<?$APPLICATION->IncludeFile(SITE_DIR."include/contacts_text.inc", Array(), Array("MODE"=>"text"));?>

<div id="map">
	<div class="map-contact-block">
		<strong>МОСКВА</strong><br>
		<br>
		119021, ул. Тимура Фрунзе, д.11, стр.16 <br>
		<br>
		<strong>Телефон:</strong> +7 (499) 557-06-52 <br>
		<br>
		<strong>E-mail:</strong> info@rtinform.ru
	</div>
	 <?$APPLICATION->IncludeComponent(
		"bitrix:map.yandex.view",
		".default",
		Array(
			"COMPONENT_TEMPLATE" => ".default",
			"CONTROLS" => array(),
			"INIT_MAP_TYPE" => "MAP",
			"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.73304599998173;s:10:\"yandex_lon\";d:37.590128999999976;s:12:\"yandex_scale\";i:17;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.590118271164;s:3:\"LAT\";d:55.733085349495;s:4:\"TEXT\";s:39:\"ООО \"РТ-ИНФОРМ\" Москва\";}}}",
			"MAP_HEIGHT" => "300",
			"MAP_ID" => "",
			"MAP_WIDTH" => "100%",
			"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
		)
	);?>
</div>

<br><br>

<div id="map">
	<div class="map-contact-block">
		<strong>КАЗАНЬ</strong>
		<br><br>
		420021, ул. Салиха Сайдашева, д.12 <br>
		<br>
		<strong>Телефон:</strong> +7 (499) 557-06-52 (доп. 310)<br>
		<br>
		<strong>E-mail:</strong> info@rtinform.ru	
	</div>
	<?$APPLICATION->IncludeComponent(
		"bitrix:map.yandex.view",
		".default",
		Array(
			"COMPONENT_TEMPLATE" => ".default",
			"CONTROLS" => array(),
			"INIT_MAP_TYPE" => "MAP",
			"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.772992525697184;s:10:\"yandex_lon\";d:49.114242978819625;s:12:\"yandex_scale\";i:17;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:49.114242978819675;s:3:\"LAT\";d:55.77299252570349;s:4:\"TEXT\";s:39:\"ООО \"РТ-ИНФОРМ\" Казань\";}}}",
			"MAP_HEIGHT" => "300",
			"MAP_ID" => "",
			"MAP_WIDTH" => "100%",
			"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
		)
	);?>
</div>

<!--script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac01d0933cbcd4681e97723828390908b69b47439b7f820261aae4342ba7ea09e&amp;width=100%25&amp;height=478&amp;lang=ru_RU&amp;scroll=true;id=mymap"></script-->

 
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>