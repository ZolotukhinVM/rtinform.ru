<?
AddEventHandler("iblock", "OnAfterIBlockElementUpdate", "AfterProductUpd");
AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("ClassForIBlock", "OnAfterIBlockElementAddHandler"));
AddEventHandler("iblock", "OnAfterIBlockElementUpdate", Array("ClassForIBlock", "OnAfterIBlockElementUpdateHandler"));

class ClassForIBlock 
{
    function OnAfterIBlockElementAddHandler(&$arFields) {
        if($arFields["IBLOCK_ID"] == 18 or $arFields["IBLOCK_ID"] == 20):
            $rsProps = CIBlockElement::GetProperty($arFields['IBLOCK_ID'],$arFields['ID'], "sort", "asc", array());
            $arPropsValue = array();
            while($arProps = $rsProps->Fetch()):
                $arPropsValue[$arProps['CODE']] = $arProps["VALUE"];
            endwhile;
			$TMPL_EMAIL_NAME = ($arFields["IBLOCK_ID"]==18)?"KIGR":"KIBR";
			CEvent::SendImmediate($TMPL_EMAIL_NAME."_START", "s1", array('USERNAME' => $arFields["NAME"]." ".$arPropsValue["FIRST_NAME"]." ".$arPropsValue["THIRD_NAME"],'EMAIL' => $arPropsValue["EMAIL"]));
        endif;
    }

    function OnAfterIBlockElementUpdateHandler(&$arFields)
    {
     if($arFields["IBLOCK_ID"] == 18):
         $rsProps = CIBlockElement::GetProperty($arFields['IBLOCK_ID'],$arFields['ID'], "sort", "asc", array());
         while($arProps = $rsProps->Fetch()):
             $arPropsValue[$arProps['CODE']] = $arProps["VALUE"];
            endwhile;        
         $userName = $arFields["NAME"]." ".$arPropsValue["FIRST_NAME"]." ".$arPropsValue["THIRD_NAME"];
            if( $arPropsValue["STATUS"] == 5  and $arFields["STATUS"]["VALUE"] != $arPropsValue["STATUS"]):
                mail("v.zolotukhin@rtinform.ru", "subject", "fieild" . $arFields["STATUS"]["VALUE"]."<br>"."status".$arPropsValue["STATUS"]);
                CEvent::SendImmediate("KIGR_OK", "s1", array('USERNAME' => $arFields["NAME"]." ".$arPropsValue["FIRST_NAME"]." ".$arPropsValue["THIRD_NAME"],'EMAIL' => $arPropsValue["EMAIL"]));
            elseif ( $arPropsValue["STATUS"] == 6 ):
                CEvent::SendImmediate("KIGR_CANCEL", "s1", array('USERNAME' => $arFields["NAME"]." ".$arPropsValue["FIRST_NAME"]." ".$arPropsValue["THIRD_NAME"],'EMAIL' => $arPropsValue["EMAIL"]));
            endif;
            
            
     endif;
    }
}

function vmzBackground($fullFolder){
    $bg_path = SITE_TEMPLATE_PATH . "/img/main-bg.jpg";
    // $bg_path = SITE_TEMPLATE_PATH . "/img/main-bg-kigr.jpg";
    $curFolder = explode('/', $fullFolder);
    $IBLOCK_ID_BG = 3;
    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_LINK", "PREVIEW_PICTURE", "PROPERTY_FULL_LINK");
    $arFilter = Array("IBLOCK_ID"=>IntVal($IBLOCK_ID_BG), "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNextElement()):
        $arFields = $ob->GetFields();
        if ($fullFolder != "/" and $fullFolder == $arFields['PROPERTY_FULL_LINK_VALUE']):
            $bg_path = CFile::GetPath($arFields['PREVIEW_PICTURE']);
            break;
        else:
            if(!empty($arFields['PROPERTY_LINK_VALUE']) and $arFields['PROPERTY_LINK_VALUE'] == $curFolder[1])
                $bg_path = CFile::GetPath($arFields['PREVIEW_PICTURE']);
        endif;
    endwhile;
    return $bg_path;
}

function AfterProductUpd(&$arFields){
    if($arFields['IBLOCK_ID'] == 14){
        $eventName = getValue($arFields['PROPERTY_VALUES'][27]);
        $fio = getValue($arFields['PROPERTY_VALUES'][18])." ".getValue($arFields['PROPERTY_VALUES'][19])." ".getValue($arFields['PROPERTY_VALUES'][20]);
        if($arFields['PROPERTY_VALUES'][24][0]['VALUE'] == 2){
            CEvent::SendImmediate("REG2EVENT_OK", "s1", array(
                'FIO' => $fio,
                'EVENT' => $eventName
            ));
        }
        if($arFields['PROPERTY_VALUES'][24][0]['VALUE'] == 3){
            CEvent::SendImmediate("REG2EVENT_CANCEL", "s1", array(
                'FIO' => $fio,
                'EVENT' => $eventName,
                'EMAIL' => getValue($arFields['PROPERTY_VALUES'][22])
            ));
        }

    }
}
?>