<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
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
		
		/*if ($ar_item["DEPTH_LEVEL"] > 1) {
			$arFilter = Array('IBLOCK_ID'=>$NEWS_BINDING_PROGRAMS, 'GLOBAL_ACTIVE'=>'Y', 'ID'=>$ar_item["IBLOCK_SECTION_ID"]);
			$db_parent = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
			if ($ar_parent = $db_parent->GetNext()) {
				$APPLICATION->AddChainItem($ar_parent["NAME"], $ar_parent["SECTION_PAGE_URL"]);
			}
		}
		$APPLICATION->AddChainItem($ar_item["NAME"], $ar_item["SECTION_PAGE_URL"]);*/

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
<?/*
<?if ($NEWS_BINDING_PROGRAMS == 6): // удалить условие, после появления текстов для eng версии
	$rsSection = CIBlockSection::GetList(Array("SORT"=>"ASC"),Array("IBLOCK_ID"=>$NEWS_BINDING_PROGRAMS, "CODE"=>$SECTION_CODE, "!UF_DESCRIPTION_SECT"=>""),false,Array("NAME","UF_DESCRIPTION_SECT"),false);
	$arSection = $rsSection->Fetch();
	if($rsSection->SelectedRowsCount() > 0):
		$arDescSect = explode("\n", $arSection['UF_DESCRIPTION_SECT']);
		$descSectPart1 = $arDescSect[0];
		foreach ($arDescSect as $key => $value) {
			if ($key > 1) $descSectPart2 .= $value;
		}
		$descSectPart2 = nl2br($descSectPart2);
	?>
		<div class="page-content">
			<h1 class="h-tdu"><?=$arSection['NAME']?></h1>
			<?=$descSectPart1;?>
			<br><div style="display:none" class="fullDescription"><br><?=$descSectPart2;?></div><br>
			<a href="javascript:" class="btn btn-darr btnvacmore" id="btn-desc-sect">Подробнее</a>
		</div>
	<?endif?>
<?endif?>
*/?>
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
	<?//dump(2);?>
	<?if(count($arResult["ITEMS"]) == 1):?>
		<?//dump(3);?>
		<?
		$page = $APPLICATION->GetCurPage(false);//если элемент 1 то отправляем сразу на него
		LocalRedirect($arResult["ITEMS"][0]["DETAIL_PAGE_URL"]);?>
	<?else:?>
	<?//dump(4);?>
		<?/*выводятся все элементы*/?>
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<?$arResult["ITEMS_NEWARRAY"][$arItem["IBLOCK_SECTION_ID"]][] = $arItem;?>
		<?endforeach;?>	
		<div class="partners list-cells list-cells-inner">
			<div class="list-cells-row d-cb js-show-details">
				<?foreach($arResult["ITEMS_NEWARRAY"] as $key => $arItem):?>
						<?foreach($arItem as $key_list => $arSection_list):?>
							<div class="<?/*newslist*/?> slide">
								<div class="slide-i">
									<?if($arSection_list["PREVIEW_PICTURE"]["SRC"] != ""):?>
										<div class="img d-hb"><a href="<?=$arSection_list["DETAIL_PAGE_URL"]?>"><img src="<?=$arSection_list["PREVIEW_PICTURE"]["SRC"]?>" alt="" /></a></div>
									<?else:?>
										<div class="img d-hb"><a href="<?=$arSection_list["DETAIL_PAGE_URL"]?>"><img src="<?=SITE_DIR?>files/no_photo.jpg" alt="" /></a></div>
									<?endif;?>
									<div class="descr">
										<div class="title"><a style="text-decoration: none;" href="<?=$arSection_list["DETAIL_PAGE_URL"]?>"><?=$arSection_list["NAME"]?></a></div>
										<div class="txt"><a style="text-decoration: none;" href="<?=$arSection_list["DETAIL_PAGE_URL"]?>"><?=$arSection_list["PREVIEW_TEXT"]?></a></div>
									</div>
								</div>
							</div><!-- /slide -->
						<?endforeach;?>
				<?endforeach;?>
			</div><!-- /vacancies-row -->
		</div><!-- /partners -->
	<?endif;?>
<?endif;?>

<?/*
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
*/?>
