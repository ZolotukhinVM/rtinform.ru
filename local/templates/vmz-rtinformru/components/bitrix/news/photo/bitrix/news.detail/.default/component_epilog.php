<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/fotorama/fotorama.js');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/js/fotorama/fotorama.css');

$APPLICATION->SetPageProperty("ish2", "Y");