<?php
header('Content-Type:text/html;charset=utf-8');
$pdo=new PDO("mysql:host=localhost;dbname=protwo", "root", "root");
$pdo->query("set names utf8");
$key="啦";
//第一步：
require_once"sphinxapi.php";//我的coreseek安装在E:/coreseek目录下，你需要根据你的coreseek的位置进行调整
//第二步：
$sphinx=new SphinxClient();
$sphinx->SetServer('localhost',9312);//coreseek的主机名和端口
$sphinx->SetArrayResult(true);//设置返回结果集为php数组格式
$sphinx->SetLimits(0,20,1000);//匹配结果的偏移量，参数的意义依次为：起始位置，返回结果条数，最大匹配条数
$sphinx->SetMaxQueryTime(10);//最大搜索时间
//第三步：
$result=$sphinx->query($key,"mysql");//xxxx是查询的内容，mysql是测试的配置文件中系统默认的类名
//结果：
//print_r($sphinx);//显示所有SphinxClient()类的内容，如果发生查询错误，也可以在这里找到。
//print_r($result);//显示查询结果信息，
echo "<ul>";
foreach ($result['matches'] as $v)
{
	$id=$v['id'];
	$re=$pdo->query("select * from product where id=$id");
	$obj=$re->fetch(PDO::FETCH_ASSOC);
	echo "<li>{$obj['title']}</li>";
}
echo "</ul>";