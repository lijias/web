<?php 
	@include_once '../conn/DbConn.php';
	@include_once 'conn/DbConn.php';
	//用户
	class admin
	{
        static  function selAdmin($username,$password){
        	$sql = "select * from admin where username='{$username}'&&password='{$password}'";
        	$conn = DbConn::getInstance();
        	$result = $conn->queryOne($sql);
        	return $result;
        }
	}

