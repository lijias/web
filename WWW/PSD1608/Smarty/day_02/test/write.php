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

$name = $_POST['name'];
$content = $_POST['content'];
$result = array();
$result = $_SESSION['msg'];
$aid = $result['id'];


if ($name!=NULL) {
	$result = info::addInfo($name, $content, $aid);
	if ($result > 0) {
		echo "<script>";
		echo "alert('添加留言成功');";
		echo "window.location = 'show.php';";
		echo "</script>";
	}else {
		echo "<script>";
		echo "alert('添加留言失败');";
		echo "window.location = 'write.php';";
		echo "</script>";
	}
}

$smarty->display("write.html");