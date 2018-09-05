<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 原有文件test.txt,有内容123,读取出原有文件中的一个字符.在原有文件末尾追加hello
 */
$filename="test.txt";
$fh=fopen($filename,"a+");
// 
while ($d=fgetc($fh)){
echo $d;
}
echo "<hr/>";
var_dump(fwrite($fh,"hello"));
//
fclose($fh);
