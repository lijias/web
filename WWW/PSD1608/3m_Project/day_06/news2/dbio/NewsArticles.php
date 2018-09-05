<?php 
	@include_once 'conn/DbConn.php';
	@include_once '../conn/DbConn.php';
	
	//新闻表
	class NewsArticles
	{
		//查询所有新闻
		public static function getAllNews()
		{
			$sql = "select * from newsArticles a inner join newsTypes b on a.typeId=b.typeId";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
		//查询新闻，加分页
		public static function getNews($currentPage,$keyword,$searchType)
		{
			//分页变量
			$pageSize = 6;//每页的记录数
			$totalRow = 0;//总记录数
			$totalPage = 0;//总页数
			$start = ($currentPage-1)*$pageSize;//每页记录的起始值
			
			$sql1 = "select count(*) from newsArticles";
			$sql2 = "select * from newsArticles a inner join newsTypes b on a.typeId=b.typeId order by articleId limit {$start},{$pageSize}";
			if($keyword != NULL)
			{
				$sql1 = "select count(*) from newsArticles where {$searchType} like '%{$keyword}%'";
				$sql2 = "select * from newsArticles a inner join newsTypes b on a.typeId=b.typeId where {$searchType} like '%{$keyword}%' order by articleId limit {$start},{$pageSize}";
			}
			
			$conn = DbConn::getInstance();
			//查询总记录数、总页数
			$result = $conn->queryOne($sql1);
			$totalRow = $result[0];//总记录数
			$totalPage = ceil($totalRow/$pageSize);//总页数
			//查询页面显示的记录
			$result = $conn->queryAll($sql2);
			//返回值
			return array($totalPage,$result);
		}
		//添加新闻
		public static function addNews($content,$title,$typeId,$userName,$writer,$source,$imagepath)
		{
			$sql = "insert into newsArticles(content,title,typeId,userName,writer,source,imagepath)values('{$content}','{$title}',{$typeId},'{$userName}','{$writer}','{$source}','{$imagepath}')";
			if($imagepath == NULL)
			{
				$sql = "insert into newsArticles(content,title,typeId,userName,writer,source)values('{$content}','{$title}',{$typeId},'{$userName}','{$writer}','{$source}')";
			}
			$conn = DbConn::getInstance();
			$result = $conn->exec($sql);
			return $result;
		}
		//增加点击量
		public static function addHints($articleId)
		{
			$sql = "update newsArticles set hints=hints+1 where articleId={$articleId}";
			$conn = DbConn::getInstance();
			$result = $conn->exec($sql);
			return $result;
		}
		//搜索新闻
		public static function searchNews($searchType,$keyword)
		{
			$sql = "select * from newsArticles where {$searchType} like '%{$keyword}%'";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
		//通过id查询某一个新闻
		public static function getNewsById($articleId)
		{
			$sql = "select * from newsArticles a inner join newsTypes b on a.typeId=b.typeId where articleId={$articleId}";
			$conn = DbConn::getInstance();
			$result = $conn->queryOne($sql);
			return $result;
		}
		//查询某分类下的所有新闻
		public static function getNewsByTypeId($typeId)
		{
			$sql = "select * from newsArticles where typeId={$typeId}";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
		//查询某分类下的最新发表的两条新闻
		public static function getNewsTwo($typeId)
		{
			$sql = "select * from newsArticles where typeId={$typeId} order by dateandtime desc limit 0,2";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
		//新闻总数
		public static function getNewsCount()
		{
			$sql = "select count(*) from newsArticles";
			$conn = DbConn::getInstance();
			$result = $conn->queryOne($sql);
			return $result[0];
		}
		//热点要闻
		public static function getHotNews()
		{
			$sql = "select * from newsArticles a inner join newsTypes b on a.typeId=b.typeId order by hints desc limit 0,6";
			$conn = DbConn::getInstance();
			$result = $conn->queryAll($sql);
			return $result;
		}
	}
?>









