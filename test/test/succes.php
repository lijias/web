<?php
header('Content-Type:text/html;charset=utf-8');
include_once 'smarty/Smarty.class.php';
include_once 'dbio/email.php';
$smarty = new Smarty();



$act = $_GET["act"];//操作类型
$rst = $_GET["rst"];//操作结果
$message = "";//提示信息
$jumpUrl = "";//跳转地址

if($act == "del")//没查到新闻
{
	if ($rst == 0) {
		$message = "删除失败";
		$jumpUrl = "showMails.php";
	}else if ($rst == 1) {
		$message = "删除成功";
		$jumpUrl = "showMails.php";
	}

}


$smarty->assign("message",$message);
$smarty->assign("jumpUrl",$jumpUrl);

$smarty->display("succes.html");