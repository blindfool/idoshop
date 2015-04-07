<?
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
if ($_GET['form']) {
    sendMails();
}

function  sendMails() {
    if ($_GET['form'] == "order") {
        $toSend = $_GET;
		$toSend["user_name"] = iconv("utf-8", "windows-1251", $toSend["user_name"]);
		$toSend["email"] = iconv("utf-8", "windows-1251", $toSend["email"]);
		$toSend["phone"] = iconv("utf-8", "windows-1251", $toSend["phone"]);
		$toSend["message"] = iconv("utf-8", "windows-1251", $toSend["message"]);
		$toSend["NAME"] = iconv("utf-8", "windows-1251", $toSend["NAME"]);
		$toSend["SKU"] = iconv("utf-8", "windows-1251", $toSend["SKU"]);
		$toSend["OBIVKA"] = iconv("utf-8", "windows-1251", $toSend["OBIVKA"]);
		$toSend["COLOR"] = iconv("utf-8", "windows-1251", $toSend["COLOR"]);
		$toSend["PODLOKOTNIK"] = iconv("utf-8", "windows-1251", $toSend["PODLOKOTNIK"]);
		$toSend["MECHANICS"] = iconv("utf-8", "windows-1251", $toSend["MECHANICS"]);
		$toSend["GAZPATRON"] = iconv("utf-8", "windows-1251", $toSend["GAZPATRON"]);
		$toSend["PYATILUCHIE"] = iconv("utf-8", "windows-1251", $toSend["PYATILUCHIE"]);
		$toSend["ROLIKI"] = iconv("utf-8", "windows-1251", $toSend["ROLIKI"]);		
		$toSend["price"] = iconv("utf-8", "windows-1251", $toSend["price"]);
		$toSend["ammount"] = iconv("utf-8", "windows-1251", $toSend["ammount"]);
		$toSend["result_price"] = iconv("utf-8", "windows-1251", $toSend["result_price"]);
        CEvent::SendImmediate("ORDER_FORM", s1, $toSend,"N",8);
         exit("<div class='okSend' style='margin-top: 10px;'>Ваше сообщение отправленно</div>");
    }
}
?>

