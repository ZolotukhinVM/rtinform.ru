<?
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$GLOBALS['APPLICATION']->RestartBuffer(); 
mail("v.zolotukhin@rtinform.ru", "test", $_GET["name"]);