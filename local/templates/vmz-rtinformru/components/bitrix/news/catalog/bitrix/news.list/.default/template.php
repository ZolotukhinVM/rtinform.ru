<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?
$page = explode("/", $APPLICATION->GetCurPage());
$NEWS_BINDING_PROGRAMS = 17; 
$SECTION_CODE = ($APPLICATION->GetCurPage() == "/catalog/")?$page[1]:$page[2];
?>

<?
if(CModule::IncludeModule("iblock")){
	// выборка только активных разделов из инфоблока $IBLOCK_ID, $ID - раздел-родителя
	$arFilter = Array('IBLOCK_ID'=>$NEWS_BINDING_PROGRAMS, 'GLOBAL_ACTIVE'=>'Y', 'CODE'=>$SECTION_CODE);
	$db_item = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
	if ($ar_item = $db_item->GetNext()) {

		$SECTION_ID = $ar_item["ID"];

		$arFilter = Array('IBLOCK_ID'=>$NEWS_BINDING_PROGRAMS, 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID'=>$ar_item["ID"]);
		$db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
		while($ar_result = $db_list->GetNext())
		{
			$arSectionChild[] = $ar_result['ID'];
		}
	}
}
?>
<?if(empty($ar_item) || count($arSectionChild) > 0):?>
	<?//dump($page);?>
	<?//dump($arSectionChild);?>

	<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list","competentions_list",
	Array(
			"VIEW_MODE" => "TEXT",
			"SHOW_PARENT_NAME" => "Y",
			"IBLOCK_TYPE" => "",
			"IBLOCK_ID" => $NEWS_BINDING_PROGRAMS,
			"SECTION_ID" => "",
			"SECTION_CODE" => "",
			"SECTION_URL" => "",
			"COUNT_ELEMENTS" => "Y",
			"TOP_DEPTH" => "1",
			"SECTION_FIELDS" => "",
			"SECTION_USER_FIELDS" => "",
			"ADD_SECTIONS_CHAIN" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_NOTES" => "",
			"CACHE_GROUPS" => "Y"
		)		
	);?>
<?else:?>
	<?if(count($arResult["ITEMS"]) == 1):?>
		<?
		$page = $APPLICATION->GetCurPage(false);//если элемент 1 то отправляем сразу на него
		LocalRedirect($arResult["ITEMS"][0]["DETAIL_PAGE_URL"]);?>
	<?else:?>
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<?$arResult["ITEMS_NEWARRAY"][$arItem["IBLOCK_SECTION_ID"]][] = $arItem;?>
		<?endforeach;?>	
		<?$num=0;?>
		<div class="main-list">
			<div class="row">
				<?foreach($arResult["ITEMS_NEWARRAY"] as $key => $arItem):?>

					<?foreach($arItem as $key_list => $arSection_list):?>
					<?$num++;?>
					<div class="col-md-3">
						<?if($arSection_list["PREVIEW_PICTURE"]["SRC"] != ""):?>
							<div class="img"><a href="<?=$arSection_list["DETAIL_PAGE_URL"]?>"><img src="<?=$arSection_list["PREVIEW_PICTURE"]["SRC"]?>" /></a></div>
						<?endif;?>
						
							<div class="title"><a href="<?=$arSection_list["DETAIL_PAGE_URL"]?>"><?=$arSection_list["NAME"]?></a></div>
					<?if ($num%4 == 0):?>
						</div><div class="row">
					<?endif;?>
					</div><!-- /col-md-* -->
					<?endforeach;?>
				<?endforeach;?>
			</div><!-- /row -->
		</div><!-- /main-list -->
	<?endif;?>
<?endif;?>