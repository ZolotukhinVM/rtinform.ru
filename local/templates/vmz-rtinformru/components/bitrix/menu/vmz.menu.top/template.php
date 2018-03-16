<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<ul class="nav navbar-nav navbar-right">
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>
	<?if ($arItem["IS_PARENT"]):?>
		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="dropdown">
				<a href="<?=$arItem["LINK"]?>" class="dropdown-toggle" data-toggle="dropdown">
					<?=$arItem["TEXT"]?>
					<b class="caret"></b>
				</a>
					<ul class="dropdown-menu">
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?><i></i></a>
				<ul>
		<?endif?>
	<?else:?>
		<?if ($arItem["PERMISSION"] > "D"):?>
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="<?if ($arItem["SELECTED"]):?>active<?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<?if ($arItem["DEPTH_LEVEL"]<3):?>
				<li><a href="<?=$arItem["LINK"]?$arItem["LINK"]:'javascript:;'?>"><?=$arItem["TEXT"]?></a>
					<!-- <pre><?print_r($arItem)?></pre> -->
				<?endif;?>
				</li>
			<?endif?>
		<?else:?>
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="javascript:;" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="javascript:;" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>
		<?endif?>
	<?endif?>
	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
<?endforeach?>
<?if ($previousLevel > 1):?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
</ul>
<?endif?>