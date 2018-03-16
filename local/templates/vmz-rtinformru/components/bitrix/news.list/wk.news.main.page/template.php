<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
	<?$num=0;?>
	<div id="news-list" class="main-list">
		<div class="row">
			<?foreach($arResult["ITEMS"] as $key => $arItem):?>
				<?$num++;?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

				   $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 260, "height" => 200),BX_RESIZE_IMAGE_EXACT,true);
				?>   
				<div class="col-md-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<?if($arItem["PREVIEW_PICTURE"]["SRC"] != ""):?>
						<div class="img">
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
								<img src="<?=$renderImage['src']?>">
							</a>
						<div class="date"><span><?=$arItem['ACTIVE_FROM']?></span></div>
						</div>
					<?endif;?>
					<div class="title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
				<?if ($num%4 == 0):?>
					</div><div class="row">
				<?endif;?>
				</div><!-- /col-md-* -->
			<?endforeach;?>
		</div>
	</div><!-- /main-list -->
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>