<?php
header('Content-Type:text/html;charset=utf-8');
$i = 5;  $n = &$i;  unset($i);  echo $n;
?> 
<?php
//从新闻分类表中读取出新闻分类(cms_type)
//1、连接数据库
$link=mysql_connect("localhost","root","root");
//2、选择默认数据库
mysql_select_db("cms2");
mysql_query("set names utf8");
//3、操作
$query="select id,tname from cms_type order by id asc";
$result=mysql_query($query);
while ($row=mysql_fetch_assoc($result)){
	 var_dump($row) ;
	 echo '</br>';
	 
}
?>