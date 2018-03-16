<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Опрос");
?><?$APPLICATION->IncludeComponent(
	"bitrix:voting.form", 
	"vmz_vote_kigr", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"VOTE_ID" => "2",
		"VOTE_RESULT_TEMPLATE" => "result.php?VOTE_ID=#VOTE_ID#",
		"COMPONENT_TEMPLATE" => "vmz_vote_kigr"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>