<?php
include "./common/config.inc.php";
//用户退出
//删除用户保存的session信息
$_SESSION=array(); 
//删除用户的sesssion文件
session_destroy();
//跳转回首页
header("location:index.php");
?>