<?php
	 include_once 'conn/DbConn.php';

	//bbsInfo表的操作类
	class BbsInfo
	{
		//查询所有记录
		public static function getBbsInfo()
		{
			$sql = "select * from bbsInfo";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
		//添加记录
		public static function addBbs()
		{
		}
	}

	
	
	
	
	
	
	
	
	