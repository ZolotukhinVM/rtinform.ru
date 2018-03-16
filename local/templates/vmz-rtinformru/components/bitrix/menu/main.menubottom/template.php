<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
	<div class="container">
		<div class="row">
			<?
			$previousLevel = 0;
			foreach($arResult as $arItem):?>
				<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
					<?=str_repeat("</ul></div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
				<?endif?>
				<?if($arItem["IS_PARENT"]):?>
						<div class="col-md-2"><a href="<?=$arItem["LINK"]?>" class="root-link"><?=$arItem["TEXT"]?></a>
						<ul>
				<?else:?>
					<?if ($arItem["DEPTH_LEVEL"] == 1):?>
						<div class="col-md-2"><a href="<?=$arItem["LINK"]?>" class="root-link"><?=$arItem["TEXT"]?></a></div>
					<?else:?>
						<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
					<?endif?>
				<?endif?>
				<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
			<?endforeach?>
			<?if ($previousLevel > 1):?>
				<?=str_repeat("</ul></div>", ($previousLevel-1) );?>
			<?endif?>
		</div>
	</div>
<?endif?>