<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

foreach ($arResult['SECTIONS'] as $arSection):
    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
?>
<?
$countVacanciesCity = CIBlockElement::GetList( 
                         Array("SORT"=>"ASC"),
                         Array("IBLOCK_ID"=>$arSection["IBLOCK_ID"], "SECTION_ID"=>$arSection["ID"], "ACTIVE"=>"Y"),
                         false,
                         false,
                         Array("ID")
                        )->SelectedRowsCount();
if($countVacanciesCity!=0):
?>
    <span class="vacancies-section-title" id="<?=$this->GetEditAreaId($arSection['ID']);?>"><?=$arSection['NAME']?></span>
    <?$APPLICATION->IncludeComponent("bitrix:news.list","wk.vacancy.list",
        Array(
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => "section",
            "IBLOCK_ID" => "5",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "NAME",
            "SORT_ORDER1" => "ASC",
            "SORT_BY2" => "ID",
            "SORT_ORDER2" => "DESC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(),
            "PROPERTY_CODE" => array(),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_META_DESCRIPTION" => "Y",
            "SET_STATUS_404" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => $arSection['ID'],
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_NOTES" => "",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "PAGER_TEMPLATE" => "modern",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Вакансии",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N"
        )
    );?>
    </span>
<?endif //countVacanciesCity!=0?>
<?endforeach;?>