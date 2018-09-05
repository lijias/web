<?php
session_start();
//删除一个session值
unset($_SESSION["id"]);
//将整个session文件清空
$_SESSION=array();
//删除掉session文件
session_destroy();