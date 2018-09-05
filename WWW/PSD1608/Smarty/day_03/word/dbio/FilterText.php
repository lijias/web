<?php 
	include_once 'conn/DbConn.php';
	
	class FilterText
	{
		//查询所有过滤字
		public static function getFilterText()
		{
			$sql = "select * from filterText";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
	}
?>






