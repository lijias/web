<?php
date_default_timezone_set("PRC");
$path="a/b/c.jpg";
// 例子：获取文件名称及扩展名
// 1、获取最后一个/的位置
$pos=strrpos($path,"/");
// 2、从这个位置开始截取，到最后。
$fileName=substr($path,$pos+1);
echo $fileName;
echo "<hr/>";
$t=time();
echo date("Y-m-d H:i:s",$t);
