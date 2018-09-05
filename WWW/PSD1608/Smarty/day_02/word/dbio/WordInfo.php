<?php 
	include_once 'conn/DbConn.php';
	
	class WordInfo
	{
		//查询所有记录
		public static function getWordInfo()
		{
			$sql = "select * from wordInfo";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
		//添加留言
		public static function addWordInfo($userName,$content)
		{
			$sql = "insert into wordInfo(userName,content)values('{$userName}','{$content}')";
			$conn = DbConn::getInstance();
			$result = $conn->exec($sql);
			return $result;
		}
	}
?>












