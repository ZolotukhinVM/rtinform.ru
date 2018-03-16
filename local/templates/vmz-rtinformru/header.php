<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$pageIsIndex = ($APPLICATION->GetCurPage(false) == SITE_DIR)?true:false;
/* $wkThisAddr - определяем текущий раздел или страницу */
if ($_SERVER['PHP_SELF'] != '/bitrix/urlrewrite.php'):
	$wkThisAddr = $_SERVER['PHP_SELF'];
elseif(isset($_SERVER['REAL_FILE_PATH'])):
	$wkThisAddr = $_SERVER['REAL_FILE_PATH'];
else:
	$wkThisAddr = '/404.php';
endif;
$wkThisAddr = str_replace('index.php', '', $wkThisAddr);
if (!CModule::IncludeModule("iblock")) return;
$wkBlockShow = Array();
$arSelect = Array("ID", "NAME", "PROPERTY_SPISOK");
$arFilter = Array("IBLOCK_ID" => 8, "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while ($ob = $res->GetNext()) $wkBlockShow[$ob['ID']][] = $ob['PROPERTY_SPISOK_VALUE'];?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="yandex-verification" content="945dd562ffdf7ade" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/css/main.css">		
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/css/search.css">
	<?$APPLICATION->ShowHead();?>
	<?
	// $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.jcarousel.js');
	// $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/modernizr.custom.js');
	// $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/sweetalert2/sweetalert2.min.js');

	// $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/fancybox/jquery.fancybox.js');
	// $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/scripts.js');
	// $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.parallax.js');
	// $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.cslider.js');
 //    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.form.js');
	// $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/normalize.css');
	// $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/js/fancybox/jquery.fancybox.css');
	// $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/js/sweetalert2/sweetalert2.min.css');
	?>
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->	
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<?
// $bg_path = SITE_TEMPLATE_PATH . "/img/main-bg-v2.jpg";
// $fullFolder = $APPLICATION->GetCurPage(false);
// $curFolder = explode('/', $fullFolder);
// $IBLOCK_ID_BG = 3;
// $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_LINK", "PREVIEW_PICTURE", "PROPERTY_FULL_LINK");
// $arFilter = Array("IBLOCK_ID"=>IntVal($IBLOCK_ID_BG), "ACTIVE"=>"Y");
// $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
// while($ob = $res->GetNextElement()):
// 	$arFields = $ob->GetFields();
// 	if ($fullFolder != "/" and $fullFolder == $arFields['PROPERTY_FULL_LINK_VALUE']):
// 		$bg_path = CFile::GetPath($arFields['PREVIEW_PICTURE']);
// 		break;
// 	else:
// 		if(!empty($arFields['PROPERTY_LINK_VALUE']) and $arFields['PROPERTY_LINK_VALUE'] == $curFolder[1])
// 			$bg_path = CFile::GetPath($arFields['PREVIEW_PICTURE']);
// 	endif;
// endwhile;
$bg = vmzBackground($APPLICATION->GetCurPage(false));
?> 

<header id="header" class="<?=$pageIsIndex?'bg-index':'bg-noindex'?>" style="background:url(<?=$bg?>)">
<!-- <div id="rti-vetka" style="position:absolute;top:0px;left:0px;width:380px;height:163px;background:url('/local/templates/vmz-rtinformru/img/rti-vetka380_v2.png')"></div> -->
<div id="panel">
	<div class="<?=$pageIsIndex?'index vh_height100':'noindex'?>">
		<div id="rtmenu" class="navbar">
		<div class="rtmenu-bg"></div>
			<div class="container">
				 <div id="rtsearch"><a class="fa fa-search" href="#search"></a></div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse">
					<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"vmz.menu.top", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "3",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "vmz.menu.top"
	),
	false
);?>
				</div>
			</div>
		</div>
	<?if($USER->isAuthorized() == false):?>
		<div id="about-company" class="block1-about">
			<div class="container">
				<div class="about-company-block">
					<div class="about-company-cube"></div>
					<span>
						<h3><a href="/about/o-nas/">О КОМПАНИИ</a></h3>
						<?$APPLICATION->IncludeFile(SITE_DIR."include/main_about.inc", Array(), Array("MODE"=>"text"));?>
					</span>
				</div>	
			</div>
		</div>
	<?endif;?>
	<div id="logo">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<a href="/">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_v2.png">
					</a>
				</div>
				<div class="col-md-1 hidden-xs hidden-sm"></div>
				<div class="col-md-8 col-sm-8 slogan">
					<span><?$APPLICATION->IncludeFile(SITE_DIR."include/main_slogan.inc", Array(), Array("MODE"=>"text"));?></span>
				</div>
			</div> <!-- /row -->
		</div> <!-- /container -->
	</div>

	</div> <!-- /index or / -->

	<?if(!$pageIsIndex):?>
		<div id="main-title">
			<div class="container">
			<div class="line"></div>
				<div class="row">
					<div class="col-md-9">
						<?$arrURL = explode('/', $APPLICATION->GetCurPage());?>
						<?if(in_array("news", $arrURL)):?>
							<h1>Новости</h1>
						<?else:?>
							<h1><?=$APPLICATION->ShowTitle();?></h1>
						<?endif;?>
					</div>
				</div>
			</div>
		</div>	
	<?endif;?>
</header>

<?if(!$pageIsIndex):?>
	<section id="content">
	<div class="container">
<?endif;?>

<?if($APPLICATION->GetProperty('isset_breadcrumb') && !$pageIsIndex):?>
	<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","wk.main",Array("START_FROM" => "0","PATH" => "","SITE_ID" => "-"));?>
<?endif;?>
<?/*$APPLICATION->ShowProperty("pagetitle")*/?>