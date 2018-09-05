<?php 
	include_once 'conn/DbConn.php';
	
	class BbsInfo
	{
		public static function getBbsInfo($currentPage)
		{
			//分页变量
			$pageSize = 3;//每页的记录数
			$totalRow = 0;//总记录数
			$totalPage = 0;//总页数
			$start = ($currentPage-1)*$pageSize;//每页记录的起始值
			
			$sql1 = "select count(*) from bbsInfo";
			$sql2 = "select * from bbsInfo limit {$start},{$pageSize}";
			$conn = DbConn::getInstance();
			//求总记录数、总页数
			$result = $conn->queryOne($sql1);
			$totalRow = $result[0];//总记录数
			$totalPage = ceil($totalRow/$pageSize);//总页数
			//查询记录
			$result = $conn->queryAll($sql2);
			
			return array($totalPage,$result);
		}
	}
?>








