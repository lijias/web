<?php 
	@include_once 'conn/DbConn.php';
	@include_once '../conn/DbConn.php';
	
	//管理员表
	class Manager
	{
		//添加管理员
		public static function addUser($userName,$password,$userType,$remark)
		{
			$sql = "insert into manager(userName,password,userType,remark)values('{$userName}','{$password}','{$userType}','{$remark}')";
			$conn = DbConn::getInstance();
			$result = $conn->exec($sql);
			return $result;
		}
		//管理员登陆
		public static function checkLogin($userName,$password)
		{
			$sql = "select * from manager where userName='{$userName}' and password='{$password}'";
			$conn = DbConn::getInstance();
			$result = $conn->queryOne($sql);
			return $result;
		}
	}
?>









