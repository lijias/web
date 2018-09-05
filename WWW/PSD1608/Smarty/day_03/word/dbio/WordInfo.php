<?php 
	include_once 'conn/DbConn.php';
	
	class WordInfo
	{
		//查询所有留言
		public static function getWordInfo()
		{
			$sql = "select * from wordInfo a inner join userInfo b on a.sender=b.userId order by wordId";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
		//添加留言
		public static function addWord($sender,$accpter,$content)
		{
			$sql = "insert into wordInfo(sender,accpter,content)values({$sender},'{$accpter}','{$content}')";
			$conn = DbConn::getInstance();
			$result = $conn->exec($sql);
			return $result;
		}
	}
?>







