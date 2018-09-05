<?php
header('Content-Type:text/html;charset=utf-8');
//7、应用PDO准备语句，对cms_user表进行查询，将获取的结果以关联数组返回。循环获取查询的结果。
$pdo=new PDO("mysql:host=localhost;dbname=cms2", "root", "root");
$statement="select id,username,password from cms_user";
$p=$pdo->prepare($statement);
$p->execute();
while ($row=$p->fetch($pdo::FETCH_ASSOC)){
	echo "id为".$row['id'];
	echo "username为".$row['username'];
	echo "password为".$row['password'];
	echo "<br/>";
}