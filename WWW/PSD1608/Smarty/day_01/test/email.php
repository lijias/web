<?php
header('Content-Type:text/html;charset=utf-8');
include_once 'smarty/Smarty.class.php';
include_once 'dbio/NewsArticles.php';
$smarty = new Smarty();
$emailId=$_GET['emailId'];
$selectEmail = Email::selEmail($emailId);
$smarty->assign("selectEmail",$selectEmail);

$smarty->display("email.html");