<?php
header('Content-Type:text/html;charset=utf-8');
include_once 'smarty/Smarty.class.php';
include_once 'dbio/NewsArticles.php';

$smarty = new Smarty();
$u=$_POST['username'];
$l=$_POST['leaveword'];
if ($u != null) {
	$result = leaveWord::addLeaveWord($u,$l);	
	if ($result>0) {
		echo "<script>";
		echo "alert('留言成功');";	
		echo "window.location = 'index.php';";
		echo "</script>";
	}else {
		echo "<script>";
		echo "alert('留言失败');";
		echo "window.location = 'index.php';";	
		echo "</script>";
	}
}
$smarty->display("index.html");
