<?php 
	@include_once '../conn/DbConn.php';
	@include_once 'conn/DbConn.php';
	
	class NewsArticles
	{
		//通过typeId查询某分类下两条新闻
		public static function getNewsTwo($typeId)
		{
			$sql = "select * from newsArticles where typeId={$typeId} order by dateandtime desc limit 0,2";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
		//热点新闻
		public static function getNewsHot()
		{
			$sql = "select * from newsArticles as a inner join newsTypes as b on a.typeId=b.typeId order by hints desc limit 0,6";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
		//新闻总数
		public static function getAllNews()
		{
			$sql = "select count(*) from newsArticles";
			$conn = DbConn::getInstance();
			$result = $conn->queryOne($sql);
			return $result[0];
		}
		//每种分类下的所有新闻数
		public static function getAllTypeNews($typeId)
		{
			$sql = "select count(*) from newsArticles where typeId={$typeId} ";
			$conn = DbConn::getInstance();
			$result = $conn->queryOne($sql);
			return $result[0];
		}
	}
?>






