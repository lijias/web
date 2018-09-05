<?php 
	@include_once 'conn/DbConn.php';
	@include_once '../conn/DbConn.php';
	
	//新闻表
	class NewsArticles
	{
		//热点
		static function getRD(){
			$getNewType = DbConn::getInstance();
			$result=$getNewType->queryAll("select * from newsArticles as a 
					                                          inner join newsTypes as t 
					                                          on a.typeId=t.typeId 
					                                          order by hints desc limit 0,6");
			return $result;
		}
		//新闻总数量
		static function getZ(){
			$getNewType = DbConn::getInstance();
			$result=$getNewType->queryOne("select count(*) from newsArticles");
		    return  $result[0];
		}
		//左边只显示2条新闻
		static function getLT2($a){
			$getNewType = DbConn::getInstance();
			$result=$getNewType->queryAll("select *  from newsArticles where typeId=$a order by articleId desc limit 2");
			return $result;
		}
		//类型总数
		static function getZType($a){
			$getZType= DbConn::getInstance();
			$result=$getZType->queryOne("select count(*) from newsArticles where typeId=$a");
			return $result[0];
		}
		//标题
		static function getTitle($a){
			$getNewType = DbConn::getInstance();
			$result=$getNewType->queryAll("select articleId,title  from newsArticles where typeId=$a ");
			
			return $result;
		}
		//新闻类型
		static function getNewsType($a){
			$getNewsType = DbConn::getInstance();
			$result=$getNewsType->queryOne("select * from newsArticles as a
					                                          inner join newsTypes as t
					                                          on a.typeId=t.typeId
					                                          where articleId=$a");
			return $result;
		}
		//新闻标题
		static function getNewsTitle($a){
			$getNewsTitle = DbConn::getInstance();
			$result=$getNewsTitle->queryOne("select title from newsArticles as a
					                                                 inner join newsTypes as t
				                                                   	on a.typeId=t.typeId
					                                                where articleId=$a");
			return $result[0];
		}
		//新闻正文
		static function getNewsContent ($a){
			$getNewsContent = DbConn::getInstance();
			$result=$getNewsContent->queryOne("select content  from newsArticles as a
					inner join newsTypes as t
					on a.typeId=t.typeId
					where articleId=$a");
			return $result[0];
		}
		//新闻发表时间
		static function getNewsTime ($a){
			$getNewsTime = DbConn::getInstance();
			$result=$getNewsTime->queryOne("select dateandtime  from newsArticles as a
					inner join newsTypes as t
					on a.typeId=t.typeId
					where articleId=$a");
			return $result[0];
		}
		//图片路径
		static function getNewsImg ($a){
			$getNewsImg = DbConn::getInstance();
			$result=$getNewsImg->queryOne("select imagepath  from newsArticles as a
					inner join newsTypes as t
					on a.typeId=t.typeId
					where articleId=$a");
			return $result[0];
		}
		//关键字搜索
		static function getAll($a,$b){
			$getAll = DbConn::getInstance();
			$result=$getAll->queryAll("select *  from newsArticles where $a like '%$b%'");
			return $result;
		}
		//hints增加
		static function insertHints($a){
			$insertHints = DbConn::getInstance();
			$result=$insertHints->exec("update newsArticles set  hints=hints+1 where articleId=$a");
			return $result;
		}
		//添加新闻
		static  function  insertNews($content,$title,$typeId,$writer,$source,$imagepath){
			$insertNews = DbConn::getInstance();	
			if ($imagepath == Null) {
				$result=$insertNews->exec("insert into newsArticles
					                                 (content,title,typeid,writer,source)
					                                  values
					                                  ('{$content}','{$title}','{$typeId}','{$writer}','{$source}')");
			}else {
				$result=$insertNews->exec("insert into newsArticles
						(content,title,typeid,writer,source,imagepath)
						values
						('{$content}','{$title}','{$typeId}','{$writer}','{$source}','{$imagepath}')");
			}
			return $result;
		}
		//查看所有新闻
		static function getAllNews($offset, $page_size,$keyword,$searchType){
			$getAllNews = DbConn::getInstance();
			if ($keyword!=NULL) {
				$result=$getAllNews->queryAll("select *from newsArticles as a  
						                                       inner join newsTypes as t 
						                                       on a.typeId=t.typeId 
						                                       where {$searchType} like '%{$keyword}%'
						                                       order by articleId asc 
						                                       limit $offset,$page_size");
			}else {
				$result=$getAllNews->queryAll("select *from newsArticles as a
						inner join newsTypes as t
						on a.typeId=t.typeId
						order by articleId asc
						limit $offset,$page_size");
			}
			
			return $result;
		}
		static function getAllN(){
			$getNewType = DbConn::getInstance();
			$result=$getNewType->queryAll("select * from newsArticles ");
			$result = count($result);
			return  $result;
		}
		static function getKeyN($searchType,$keyword){
			$getNewType = DbConn::getInstance();
			$result=$getNewType->queryAll("select * from newsArticles  where {$searchType} like '%{$keyword}%'");
			$result = count($result);
			return  $result;
		}
		//更新新闻
		static  function  updateNews($content,$title,$typeId,$writer,$source,$imagepath,$articleId){
			$updateNews = DbConn::getInstance();
					if ($imagepath == Null) {
			$result=$updateNews->exec("update newsArticles set
					content='{$content}',title='{$title}',typeid={$typeId},writer='{$writer}',source='{$source}'
					where articleId='{$articleId}'");
			}else {
			$result=$updateNews->exec("update newsArticles set
						content='{$content}',title='{$title}',typeid='{$typeId}',writer='{$writer}',source='{$source}',imagepath='{$imagepath}'
						where articleId='{$articleId}'");
			}
			return $result;
			}
	  //
			static function getOneN($articleId){
				$getOneN = DbConn::getInstance();
				$result=$getOneN->queryOne("select * from newsArticles as a
						                                      inner join newsTypes as t
						                                      on a.typeId=t.typeId 
						                                      where articleId={$articleId}");
				return  $result;
			}
			//
			static function deleteNews($articleId){
				$deleteNews = DbConn::getInstance();
				$result1=$deleteNews->exec("delete from reviews where articleId={$articleId}");
				$result2=$deleteNews->exec("delete from newsArticles where articleId={$articleId}");
						return  $result2;
			}
	}

	
	//print_r($re);
	/*foreach ($result as $v)
	{
		echo $v['typeName']."<br/>";
		echo $v['title']."<br/>";
		echo $v['dateandtime']."<br/>";
	} */
?>