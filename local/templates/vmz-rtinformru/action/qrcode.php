<?
require($_SERVER["DOCUMENT_ROOT"]."/local/templates/vmz-rtinformru/action/phpqrcode/qrlib.php");
QRcode::png("http://rtinform.ru".$_GET["url"], false, "L", 3, 1);
?>