<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
include_once 'smarty/Smarty.class.php';
include_once 'dbio/Info.php';

if ($_SESSION==null) {
	echo    "<script>";
	echo		 "alert('没有权限登录');";
	echo		 "window.location='index.php';";
	echo		"</script>";
}

$smarty = new Smarty();

$result = info::selInfo();

$smarty->assign("result",$result);

$smarty->display("show.html");