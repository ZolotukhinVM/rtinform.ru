<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="wk_services_blocks">
	<div class="jcarousel">
		<ul>

		<?foreach($arResult["ITEMS"] as $arItem):?>

			<li>
				<a href="<?=$arItem['DETAIL_TEXT']?>">
					<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>" />
					<p>
						<b><?=$arItem['NAME']?></b>
						<span><?=TruncateText(strip_tags($arItem['PREVIEW_TEXT']), 300)?></span>
					</p>
				</a>
			</li>

		<?endforeach;?>

		</ul>
	</div>
	<a class="jcarousel-control-prev" href="javascript:;">‹</a>
	<a class="jcarousel-control-next" href="javascript:;">›</a>
</div>
