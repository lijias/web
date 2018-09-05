<?php 
	@include_once '../conn/DbConn.php';
	@include_once 'conn/DbConn.php';
	
	class NewsTypes
	{
		//查询所有分类
		public static function getNewsTypes()
		{
			$sql = "select * from newsTypes";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
		
	}
?>





