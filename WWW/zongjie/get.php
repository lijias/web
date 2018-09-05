<?php
$content=file_get_contents("http://news.qq.com/a/20161130/023840.htm");
//标题
$preg="/<h1>(.*?)<\/h1>/";
$re=preg_match_all($preg,$content,$arr);
$title=$arr[1][0];//11 12
//内容
$cpreg="/<div id=\"Cnt-Main-Article-QQ\" class=\"Cnt-Main-Article-QQ\" bossZone=\"content\">(.*?)<\/div>/s";
$re=preg_match_all($cpreg,$content,$cArr);
var_dump($cArr);