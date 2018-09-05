<?php 
	include_once 'conn/DbConn.php';
	
	class UserInfo
	{
		//会员登陆
		public static function checkLogin($userName,$password)
		{
			$sql = "select * from userInfo where userName='{$userName}' and password='{$password}'";
			$conn = DbConn::getInstance();
			$result = $conn->queryOne($sql);
			return $result;
		}
	}
?>






