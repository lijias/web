<?php 
header("Content-Type:text/html;charset=utf-8");
//正则替换
$subject = "我是一个含有<span style='color:red;'>HTML</span>标签
		的<b>字符</b>串";
$pattern = "/<\/?[\w\s\=\'\:\;\"]+>/";
$replace = "";
echo $subject;
echo "<hr/>";
echo preg_replace($pattern,$replace,$subject);



















