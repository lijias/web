<?php 
include_once'dbio/NewsArticles.php';


?>
<html>
  <head>
    <title>天天新闻网</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="css/news.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <!-- 网站头 -->
    <?php include_once 'header.php';
    $tId=isset($_GET['typeId'])?$_GET['typeId']:"";
    $result5=array();
    if ($tId!="") {
    	$result5=NewsTypes::getType($tId);
    	$result6=NewsArticles::getZType($tId);
    	$result7=NewsArticles::getTitle($tId);
    }
    ?>
	
	<!-- 正文内容 -->
	<div class="mainDiv clear">
	  <div class="newsTypeDiv">
	    <div class="newsTypeDiv1">&nbsp;<a href="index.php" class="a">新闻主页</a> &raquo; <?php echo $result5['typeName']?></div>
	    <div class="newsTypeDiv2">本类共有<?php echo $result6 ?>条新闻</div>
	  </div>
	  <?php foreach ($result7 as $v){?>
	  <div class="newsTypeDiv3">
	    <img src="images/makealltop.gif"><a href="news.php?articleId=<?php echo $v['articleId'];?>"><?php echo $v['title'];?></a>
	  </div>
	  <?php }?>
	  
	  
	  <div class="newsTypeDiv3">&nbsp;</div>
	</div>
    
    
    <!-- 网页脚 -->
    <?php include_once 'footer.php';?>
  </body>
</html>




