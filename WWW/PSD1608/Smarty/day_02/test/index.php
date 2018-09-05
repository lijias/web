<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
include_once 'smarty/Smarty.class.php';
include_once 'dbio/NewsArticles.php';
unset($_SESSION['msg']);
$smarty = new Smarty();


$username = $_POST['username'];
$password = $_POST['password'];

if ($username !=null) {
	$result = admin::selAdmin($username,$password);
	if ($result) {
		$_SESSION['msg'] = $result;
		echo "<script>";
		echo "alert('登陆成功');";
		echo "window.location = 'show.php'";
		echo "</script>";
	}else {
		echo "<script>";
		echo "alert('登陆失败');";
		echo "window.location = 'index.php';";
		echo "</script>";
	}
}


$smarty->display("index.html");