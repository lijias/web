<?php 
	@include_once 'conn/DbConn.php';
	@include_once '../conn/DbConn.php';
	
	//评论表
	class Reviews
	{
		//查询某新闻的所有评论
		public static function getReviewByArticleId($articleId)
		{
			$sql = "select * from reviews where articleId={$articleId}";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
		//添加评论
		public static function addReview($articleId,$userName,$content,$face)
		{
			$sql = "insert into reviews(articleId,userName,body,face)values({$articleId},'{$userName}','{$content}','{$face}')";
			$conn = DbConn::getInstance();
			$result = $conn->exec($sql);
			return $result;
		}
	}
?>






