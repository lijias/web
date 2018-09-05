<?php
header('Content-Type:text/html;charset=utf-8');
$pdo=new PDO("mysql:host=localhost;dbname=cms2", "root", "root");
if($_POST){
	$username=isset($_POST['username'])?$_POST['username']:"";
	$password=isset($_POST['password'])?$_POST['password']:"";
	
	if($username==""){
		echo 1;
		exit;
	}else if($password==""){
		echo 2;
		exit;
	}
	$statement="insert cms_user (username,password) value (:username,:password)";
	$p=$pdo->prepare($statement);
	$p->bindParam(":username", $username);
	$p->bindParam(":password", $password);
	//var_dump($statement);exit;
	$result=$p->execute();
	if ($result) {
		echo 3;
	}else{
		echo 4;
	}
}else{
	echo 4;
}