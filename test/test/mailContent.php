<?php
header('Content-Type:text/html;charset=utf-8');
include_once 'smarty/Smarty.class.php';
include_once 'dbio/email.php';
$smarty = new Smarty();

$id = $_GET['id'];

$selectOne = Email::getOneEmails($id);

$smarty->assign("selectOne",$selectOne);
$smarty->display("mailContent.html");