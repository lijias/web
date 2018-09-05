<?php 
	@include_once 'conn/DbConn.php';
	@include_once '../conn/DbConn.php';
	
	//新闻分类表
	class NewsTypes
	{
		static function getNewType(){
			$getNewType = DbConn::getInstance();
			$result=$getNewType->queryAll("select * from NewsTypes");
			return $result;
		}
			static function getType($a){
			$getType = DbConn::getInstance();
			$result=$getType->queryOne("select * from NewsTypes where typeId=$a");
			return $result;
		}
		//添加分类
		static function insertType($a){
			$insertType = DbConn::getInstance();
			$result=$insertType->exec("insert newsTypes (typeName) value ('{$a}')");
			return $result;
		}
		//删除分类
		static function delType($typeId){
			$sql1="delete from reviews where articleId in (select articleId from newsArticles where typeId={$typeId})";//删除评论                                                    
			$sql2="delete from newsArticles where  typeId='{$typeId}'";//删除新闻
			$sql3="delete from newsTypes where  typeId='{$typeId}'";//删除新闻分类			
			$delType = DbConn::getInstance();
			$result=$delType->exec("$sql1");
			$result=$delType->exec("$sql2");
			$result=$delType->exec("$sql3");
			return $result;
		}
        //修改分类	
		static function updateType($typeName,$articleNums,$typeId){
			$updateType = DbConn::getInstance();
			$result=$updateType->exec("update newsTypes set typeName='{$typeName}',articleNums={$articleNums} where typeId={$typeId}");
			return $result;
		}
		//添加新闻数量
		static function addNews($typeId){
			$insertHints = DbConn::getInstance();
			$result=$insertHints->exec("update newsTypes set  articleNums=articleNums+1 where typeId=$typeId");
			return $result;
		}
	}
	/*$g= new NewsTypes();
	$re=$g->getNewType();
	//print_r($re);
	foreach ($re as $v)
	{
       echo $v['typeName'];
	}*/
?>
