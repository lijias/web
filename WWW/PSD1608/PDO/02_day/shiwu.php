<?php
header('Content-Type:text/html;charset=utf-8');
$dsn="mysql:host=localhost;dbname=cms2";
$username="root";
$password="root";
$pdo=new PDO($dsn, $username, $password);
//guan
$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
//shiwu
$pdo->beginTransaction();
//
$statement_g="update dell set money=money-50 where id=1 ";
$result_g=$pdo->exec($statement_g);
$statement_d="update dell set money=money+50 where id=2 ";
$result_d=$pdo->exec($statement_d);
//panduan
if ($result_g&&$result_d){
	echo "交易成功";
	$pdo->commit();
}else{
	echo "交易失败";
	$pdo->rollBack();
}
//kai
$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 1);
