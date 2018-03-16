<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<!-- <div class="menu_icon">Меню</div> -->

<style type="text/css">
	.navbar-nav {
		/*padding: 0;*/
		/*margin: 0;*/
	}
.rtmenu{
background: transparent;
/*opacity: 0.85;*/
z-index: 10;
/*width: 80%;*/
}

.rtmenu .rtmenu-line {
	position: absolute;
	right: -100%;
	background: #fff;
	width: 150%;
	height: 100%;
	/*border: 2px solid red;*/
}

/*.rtmenu .nav > li {
	color: #fff !important;
    display: inline-block;
    background: #fff; 
    margin-right: 3px; /
    -webkit-transform: skewX(-20deg);
    -moz-transform: skewX(-20deg); 
    -o-transform: skewX(-20deg);
    -ms-transform: skewX(-20deg); 
    transform: skewX(-20deg); 
}

.rtmenu .nav li a, .rtmenu .dropdown-menu {
    display: block; 
    padding: -1em; 
    text-decoration: none; 
    -webkit-transform: skewX(20deg); 
    -moz-transform: skewX(20deg); 
    -o-transform: skewX(20deg); 
    -ms-transform: skewX(20deg); 
    transform: skewX(20deg); 
}

.rtmenu .dropdown-menu li a {
    text-decoration: none; 
    -webkit-transform: skewX(0deg); 
    -moz-transform: skewX(0deg); 
    -o-transform: skewX(0deg); 
    -ms-transform: skewX(0deg); 
    transform: skewX(0deg); 	
}
*/

.rtmenu  {
	/*border: 2px solid red !important;*/
	padding: 0 !important;
	margin: 0 !important;

}

.rtmenu ul li a{
color: #000;
}
.rtmenu ul li a:hover{
background: transparent;
color: #555;
}


.rtmenu .navbar-collapse > ul {
	padding: 1em;
	background: #fff;
		-webkit-transform: skewX(-20deg); 
	-moz-transform: skewX(-20deg);
	-o-transform: skewX(-20deg); 
	-ms-transform: skewX(-20deg); 
	transform: skewX(-20deg); 
}
/*delete*/
.rtmenu .navbar-collapse > ul > li {
		-webkit-transform: skewX(20deg); 
	-moz-transform: skewX(20deg);
	-o-transform: skewX(20deg); 
	-ms-transform: skewX(20deg); 
	transform: skewX(20deg); 
}

.navbar-nav > li > .dropdown-menu {
/*		-webkit-transform: skewX(-20deg); 
	-moz-transform: skewX(-20deg);
	-o-transform: skewX(-20deg); 
	-ms-transform: skewX(-20deg); 
	transform: skewX(-20deg); 	*/
}

.rtmenu .dropdown-menu > li {
-webkit-transform: skewX(20deg); 
	-moz-transform: skewX(20deg);
	-o-transform: skewX(20deg); 
	-ms-transform: skewX(20deg); 
	transform: skewX(20deg); 	
}


.rtmenu .collapse:hover {
	background: transparent;
}
.nav>li>a:focus,.nav>li>a:hover {
	background: #fff;
}
.rtmenu .nav .open>a, .nav .open>a:focus,.rtmenu  .nav .open>a:hover {
	background: transparent;
}

.rtmenu li.dropdown {
	-webkit-transform: skewX(0); 
	-moz-transform: skewX(0);
	-o-transform: skewX(0); 
	-ms-transform: skewX(0); 
	transform: skewX(0); 
}


/*.rtmenu li.dropdown {
	.rtmenu li.dropdown:hover  {
	-webkit-transform: skewX(0); 
	-moz-transform: skewX(0);
	-o-transform: skewX(0); 
	-ms-transform: skewX(0); 
	transform: skewX(0); 
}
*/
.rtmenu ul.nav > li.dropdown:hover  {
	-webkit-transform: skewX(0); 
	-moz-transform: skewX(0);
	-o-transform: skewX(0); 
	-ms-transform: skewX(0); 
	transform: skewX(0); 	
	background: #4da6bd;

}

/*.rtmenu ul.nav > li.dropdown:hover .dropdown-menu {
	display: none;
}
*/
.rtmenu ul.nav > li.dropdown:hover > ul.dropdown-menu {
	-webkit-transform: skewX(0); 
	-moz-transform: skewX(0);
	-o-transform: skewX(0); 
	-ms-transform: skewX(0); 
	transform: skewX(0);
}

.rtmenu .dropdown > a:hover {
	color: #fff;
	-webkit-transform: skewX(20deg); 
	-moz-transform: skewX(20deg);
	-o-transform: skewX(20deg); 
	-ms-transform: skewX(20deg); 
	transform: skewX(20deg); 
}

.rtmenu ul.dropdown-menu{
	/*border: 2px solid green;*/
	/*margin: 2em;*/
	-webkit-transform: skewX(-20deg); 
	-moz-transform: skewX(-20deg);
	-o-transform: skewX(-20deg); 
	-ms-transform: skewX(-20deg); 
	transform: skewX(-20deg); 
	/*border: 2px solid green;*/
}

.rtmenu .navbar-brand {
color: transparent;
}
/*	ul.nav li.dropdown:hover ul.dropdown-menu {
		display: block;
	}*/
</style>


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
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
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