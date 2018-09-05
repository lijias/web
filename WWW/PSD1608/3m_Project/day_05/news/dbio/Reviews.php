<?php 
	@include_once 'conn/DbConn.php';
	@include_once '../conn/DbConn.php';
	
	//评论表
	class Reviews
	{
		static function inesrt($a,$b,$c,$d){
			$inesrt=DbConn::getInstance();
			$result=$inesrt->exec("insert reviews (userName,body,face,articleId) value ('$a','$b','$c',$d)");
			return $result;
		}
		static function select($a){
			$select=DbConn::getInstance();
			$result=$select->queryAll("select * from reviews  where articleId=$a order by id desc limit 0,5");
			return $result;
		}
		static function selectOneArticle($a){
			$selectOneArticle=DbConn::getInstance();
			$result=$selectOneArticle->queryAll("select * from newsArticles as a  inner join reviews as b on a.articleId=b.articleId where title='{$a}'");
			//print_r($result);
			return $result;
		}
	}
?>                                                         