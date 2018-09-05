<?php
header('Content-Type:text/html;charset=utf-8');
include_once 'smarty/Smarty.class.php';
include_once 'dbio/NewsArticles.php';
$smarty = new Smarty();
$selectEmail = Email::selectEmail();
$smarty->assign("selectEmail",$selectEmail);

$emailId=$_GET['emailId'];
//删除邮件
$delEmail = Email::delEmail($emailId);
if ($delEmail>0) {
	header("location:showMails.php");
}
$smarty->display("showMails.html");