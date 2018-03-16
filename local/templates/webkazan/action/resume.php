<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");

require 'class.phpmailer.php';
$data=$_POST;
$file=$_FILES;
$return = array(
    "STATUS" => 'error',
    "MESSAGE" => "Вы забыли прикрепить файл"
);
$cp_word = $data["v-code"];
$csid = $data['captcha_sid'];
if ( $APPLICATION->CaptchaCheckCode($cp_word, $csid) ) {
    if (is_array($file['add_file']) && $file['add_file']['error'] == 0) {

        $message = "Дата отправки: " . date('d.m.Y H:i');

        $rmail = new PHPMailer();
        $rmail->CharSet = "utf-8";
        $rmail->setFrom('noreply@rtinform.ru', 'site_inform');
        $rmail->addAddress('eduardev@rtinform.ru');
        $rmail->Subject = 'Новое резюме. Вакансия: ' . htmlspecialchars($data['vacancy']);
        $rmail->msgHTML($message);
        $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/upload/resume/';
        $uploadfile = $uploaddir . basename($_FILES['add_file']['name']);
        $i = 0;
        while (is_file(uploadfile)) {
            $i++;
            $uploadfile = $uploaddir . $i . "_" . basename($_FILES['add_file']['name']);
        }
        if (move_uploaded_file($_FILES['add_file']['tmp_name'], $uploadfile)) {
            $rmail->addAttachment($uploadfile); // прикрепить файл
            if (!$rmail->send()) {
                // echo $mail->ErrorInfo;
                $return['MESSAGE'] = "Не удалось отправить резюме";
            } else {
                $return = array(
                    "STATUS" => 'ok',
                    "MESSAGE" => "Ваше резюме успешно отправлено"
                );
            }
        } else {
            $return['MESSAGE'] = "Не удалось отправить резюме";
        }
    }
}else{
    $return = array(
        "STATUS" => 'error',
        "MESSAGE" => "Введите правильно проверочный код"
    );
}
echo json_encode($return);
?>
