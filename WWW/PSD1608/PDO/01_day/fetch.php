<?php
header('Content-Type:text/html;charset=utf-8');
//7、应用PDO准备语句，对cms_user表进行查询，将获取的结果以关联数组返回。循环获取查询的结果。
$pdo=new PDO("mysql:host=localhost;dbname=cms2", "root", "root");
//编译
$query="select id,username,password from cms_user where id=:id ";
$p=$pdo->prepare($query);
//
$n=7;
$p->bindParam(":id", $n);
//执行
$p->execute();
//var_dump($p->execute());exit;
//
while($row=$p->fetch(PDO::FETCH_ASSOC)){
	echo $row['id']."<br/>";
	echo $row['username']."<br/>";
	echo $row['password']."<br/>";
	echo "<hr/>";
}
