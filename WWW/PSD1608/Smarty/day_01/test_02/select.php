<?php
header('Content-Type:text/html;charset=utf-8');
include_once 'smarty/Smarty.class.php';
include_once 'dbio/NewsArticles.php';
$smarty = new Smarty();

$select = leaveWord::selLeaveWord();
$smarty->assign("select",$select);
$smarty->display("select.html");