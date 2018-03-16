<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
$data = $_REQUEST;
$return = array(
    "STATUS" => 'ok',
    "TYPE" => 'success',
    "MESSAGE" => "Ваше сообщение отправлено"
);

$cp_word = $data["v-code"];
$csid = $data['captcha_sid'];

if($data['qname'] && $data['qphone']){
    if ( $APPLICATION->CaptchaCheckCode($cp_word, $csid) ){
        $arSendFields = array(
            "NAME" => htmlspecialcharsbx($data['qname']),
            "PHONE" => htmlspecialcharsbx($data['qphone']),
            "MAIL" => htmlspecialcharsbx($data['qemail']),
            "MESSAGE" => htmlspecialcharsbx($data['qquestion']),
        );
        CEvent::SendImmediate("QUESTION_FORM","s1",$arSendFields);
    }else{
        $return = array(
            "STATUS" => 'error',
            "TYPE" => 'warning',
            "MESSAGE" => "Введите правильно проверочный код"
        );
    }
}else{
    $return = array(
        "STATUS" => 'error',
        "TYPE" => 'warning',
        "MESSAGE" => "Заполните все обязательные поля"
    );
}
echo json_encode($return);
?>
