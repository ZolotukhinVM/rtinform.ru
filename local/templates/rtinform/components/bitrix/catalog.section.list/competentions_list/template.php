<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?//Пиздец внутри ссылок это = Проверяем ищем секции у которых нед посекций и только один элемент чтобы СРАЗУ выводить на них ссылку?>
<div class="partners list-cells list-cells-inner list-cells-common">
	<div class="list-cells-row d-cb js-show-details">
		<?foreach($arResult["SECTIONS"] as $key => $arItem):?>
			<?//dump($arItem);?>
			<div class=" slide">
				<div class="slide-i">

					<?if($arItem["PICTURE"]["SRC"] != ""):?>
						<div class="img d-hb"><a href="<?if($arItem["ELEMENT_CNT"] == 1 && $arItem["DEPTH_LEVEL"] == 1):?>
						<?$arSelect = Array("DETAIL_PAGE_URL");
						$arFilter = Array("IBLOCK_ID" => $arItem["IBLOCK_ID"], "SECTION_ID" => $arItem["ID"], "ACTIVE"=>"Y");
						$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
						while($ob = $res->GetNextElement())
						{
							$arFields = $ob->GetFields();
							echo($arFields["DETAIL_PAGE_URL"]);
						}?>
						
						<?else:?><?=$arItem["SECTION_PAGE_URL"]?><?endif;?>"><img width="25%" src="<?=$arItem["PICTURE"]["SRC"]?>" alt="" /></a></div>
						<?else:?>
							<div class="img d-hb"><a href="<?if($arItem["ELEMENT_CNT"] == 1 && $arItem["DEPTH_LEVEL"] == 1):?>
						<?$arSelect = Array("DETAIL_PAGE_URL");
						$arFilter = Array("IBLOCK_ID" => $arItem["IBLOCK_ID"], "SECTION_ID" => $arItem["ID"], "ACTIVE"=>"Y");
						$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
						while($ob = $res->GetNextElement())
						{
							$arFields = $ob->GetFields();
							echo($arFields["DETAIL_PAGE_URL"]);
						}?>
						<?else:?><?=$arItem["SECTION_PAGE_URL"]?><?endif;?>"><img src="<?=SITE_DIR?>files/no_photo.jpg" alt="" /></a></div>
					<?endif;?>
						
					<div class="title"> <!-- name -->
						Name: <a style="text-decoration: none;" href="<?if($arItem["ELEMENT_CNT"] == 1 && $arItem["DEPTH_LEVEL"] == 1):?>
						<?$arSelect = Array("DETAIL_PAGE_URL");
						$arFilter = Array("IBLOCK_ID" => $arItem["IBLOCK_ID"], "SECTION_ID" => $arItem["ID"], "ACTIVE"=>"Y");
						$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
							while($ob = $res->GetNextElement())
							{
								$arFields = $ob->GetFields();
								echo($arFields["DETAIL_PAGE_URL"]);
							}?>
						<?else:?><?=$arItem["SECTION_PAGE_URL"]?><?endif;?>"><?=$arItem["NAME"]?></a>
					</div>
														
					<div class="txt"> <!-- description -->
						Descriprion: <a style="text-decoration: none;" href="<?if($arItem["ELEMENT_CNT"] == 1 && $arItem["DEPTH_LEVEL"] == 1):?>
						<?$arSelect = Array("DETAIL_PAGE_URL");
						$arFilter = Array("IBLOCK_ID" => $arItem["IBLOCK_ID"], "SECTION_ID" => $arItem["ID"], "ACTIVE"=>"Y");
						$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
						while($ob = $res->GetNextElement())
						{
							$arFields = $ob->GetFields();
							echo($arFields["DETAIL_PAGE_URL"]);
						}?>
						
						<?else:?><?=$arItem["SECTION_PAGE_URL"]?><?endif;?>"><?=trim($arItem["DESCRIPTION"])?></a> 
					</div>
					
					</div>
				</div>
			</div><!-- /slide -->
		<?endforeach;?>
	</div><!-- /vacancies-row -->
</div><!-- /partners -->