<?php
header('Content-Type:text/html;charset=utf-8');
//退出
//删除保存的cookie
setcookie("username","",time()-1);
setcookie("id","",time()-1);
header("location:index.php");