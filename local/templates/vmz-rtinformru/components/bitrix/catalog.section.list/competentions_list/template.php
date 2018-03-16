<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?//Пиздец внутри ссылок это = Проверяем ищем секции у которых нед посекций и только один элемент чтобы СРАЗУ выводить на них ссылку?>
<div id="catalogNew" class="container">
<div class="row">
		<?foreach($arResult["SECTIONS"] as $key => $arItem):?>
			<?//dump($arItem);?>
			<div class="col-md-3">

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

							<?else:?><?=$arItem["SECTION_PAGE_URL"]?><?endif;?>"><img style="height:75px;padding-bottom:1em;" src="<?=$arItem["PICTURE"]["SRC"]?>"></a></div>
						<?else:?>
							<div><a href="<?if($arItem["ELEMENT_CNT"] == 1 && $arItem["DEPTH_LEVEL"] == 1):?>
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
						
					<div class="title"> <!-- nadme -->
						<a class="rootLink" href="<?if($arItem["ELEMENT_CNT"] == 1 && $arItem["DEPTH_LEVEL"] == 1):?>
						<?$arSelect = Array("DETAIL_PAGE_URL");
						$arFilter = Array("IBLOCK_ID" => $arItem["IBLOCK_ID"], "SECTION_ID" => $arItem["ID"], "ACTIVE"=>"Y");
						$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
							while($ob = $res->GetNextElement())
							{
								$arFields = $ob->GetFields();
								echo($arFields["DETAIL_PAGE_URL"]);
							}?>
						<?else:?><?=$arItem["SECTION_PAGE_URL"]?><?endif;?>"><?=$arItem["NAME"]?></a>
					</div><br>
					
					<? /*								
					<div class="txt"> <!-- description -->
						Описание: <a style="text-decoration: none;" href="<?if($arItem["ELEMENT_CNT"] == 1 && $arItem["DEPTH_LEVEL"] == 1):?>
						<?$arSelect = Array("DETAIL_PAGE_URL");
						$arFilter = Array("IBLOCK_ID" => $arItem["IBLOCK_ID"], "SECTION_ID" => $arItem["ID"], "ACTIVE"=>"Y");
						$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
						while($ob = $res->GetNextElement())
						{
							$arFields = $ob->GetFields();
							echo($artFields["DETAIL_PAGE_URL"]);
						}?>
						
						<?else:?><?=$arItem["SECTION_PAGE_URL"]?><?endif;?>"><?=trim($arItem["DESCRIPTION"])?></a> 
					</div>
					*/ ?>

					<div class="serviceList">
					<?
					// echo $arItem["ID"];
					$arSelect = Array("ID", "IBLOCK_ID", "IBLOCK_SECTION_ID", "NAME", "DETAIL_PAGE_URL");
					$arFilter = Array("IBLOCK_ID"=>$arItem["IBLOCK_ID"], "SECTION_ID"=>$arItem["ID"], "ACTIVE"=>"Y");
					$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
					echo "<ul>";
					while($ob = $res->GetNextElement()):
						$arFields = $ob->GetFields();  
						// print_r($arFields);
						echo "<li><a href='".$arFields["DETAIL_PAGE_URL"]."'>".$arFields["NAME"]."</a>";
					endwhile;
					?>
					</ul>
					</div>
					
			</div><!-- /slide -->
		<?endforeach;?>
	</div><!-- /vacancies-row -->
</div><!-- /partners -->