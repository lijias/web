<?php 
	@include_once 'conn/DbConn.php';
	@include_once '../conn/DbConn.php';
	
	//管理员表
	class Manager
	{
		//查询管理员表
		static function getAdmin($u,$p){
			$getAdmin = DbConn::getInstance();
			$result=$getAdmin->queryOne("select * from manager where userName='$u' && password='$p' ");
			return $result;
		}
		static function insertAdmin($a,$b,$c){
			$insertAdmin = DbConn::getInstance();
			$result=$insertAdmin->exec("insert manager (userName,password,userType) value ('{$a}','{$b}','{$c}')");
			return $result;
		}
	}
	
?>