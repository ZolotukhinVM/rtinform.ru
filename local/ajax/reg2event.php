
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
$data = $_POST;
$return = array(
    "STATUS" => 'ok',
    "MESSAGE" => "Спасибо, заявка отправлена!",
    "TYPE" => "success"
);
$forms_data = array(
    'event' => array(
        'fields' => array(
            'organization' => 0,
            'post' => 1,
            'surname' => 1,
            'name' => 1,
            'patronymic' => 1,
            'phone' => 1,
            'email' => 1,
            'event' => 1,
        ),
        'event' => 'REG2EVENT'
    ),
);
$subject_id = $data['subject'];
$cp_word = $data["v-code"];
$csid = $data['captcha_sid'];
$error = false;
if ( $APPLICATION->CaptchaCheckCode($cp_word, $csid) ) {
    if(is_array($forms_data[$subject_id])) {
        foreach ($forms_data[$subject_id]['fields'] as $field => $required) {
            if ($required && !$data[$field]) {
                $error = true;
            }
        }
        if (!$error) {
            CModule::IncludeModule("iblock");
            if(!$data['organization']){
                $data['organization']= 'физ. лицо';
            }
            $arSendFields = array();
            foreach ($forms_data[$subject_id]['fields'] as $field => $required) {
                $arSendFields[strtoupper(preg_replace('/\-/', '_', $field))] = htmlspecialcharsbx($data[$field]);
            }

            $eventRes = CIBlockElement::GetByID($data['event']);
            if($arEvent = $eventRes->GetNext()){
                $arSendFields['EVENT_NAME'] = $arEvent['NAME'];
                $arSendFields['STATUS'] = 1;

                $newEvent = new CIBlockElement;
                $PROP = $arSendFields;

                $arLoadOrderArray = Array(
                    "IBLOCK_SECTION_ID" => false,
                    "IBLOCK_ID"      => 14,
                    "PROPERTY_VALUES"=> $PROP,
                    "NAME"           => $data['organization'],
                    "ACTIVE"         => "Y"
                );

                if($ORDER_ID = $newEvent->Add($arLoadOrderArray)) {
                    $arSendFields['ID'] = $ORDER_ID;
                    CEvent::SendImmediate($forms_data[$subject_id]['event'], "s1", $arSendFields);
                }
                    //else
                   //Error: $newEvent->LAST_ERROR;
            }
        } else {
            $return = array(
                "STATUS" => 'error',
                "MESSAGE" => "Заполните обязательные поля",
                "TYPE" => "warning"
            );
        }
    }
}else{
    $return = array(
        "STATUS" => 'error',
        "TYPE" => 'warning',
        "MESSAGE" => "Введите правильно проверочный код"
    );
}

echo json_encode($return);
?>