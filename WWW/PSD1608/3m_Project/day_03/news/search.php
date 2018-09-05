<?php 
include_once 'dbio/NewsArticles.php';
$f="";
$k="";
if (!empty($_POST)) {
$f=$_POST["searchType"];
$k=$_POST["keyword"];
$re5=NewsArticles::getAll($f, $k);
}

?>
<html>
  <head>
    <title>天天新闻网</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="css/news.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
	  function checkSearch()
	  {
		  if(document.frm.keyword.value == "")
		  {
			  alert("搜索关键字不能为空！");
			  document.frm.keyword.focus();
			  return false;
		  }
	  }
	</script>
  </head>
  <body>
    <!-- 网站头 -->
    <?php include_once 'header.php';  ?>
	
	<!-- 正文内容 -->
	<div class="mainDiv clear">
	  <!-- 搜索条件 -->
	  <form name="frm" method="post" action="" onsubmit="return checkSearch()">
	  <div class="newsTypeDiv" style="border:1px solid #990100;">
	    <div class="newsTypeDiv1">&nbsp;搜索新闻</div>
	    <div class="newsTypeDiv2">&nbsp;</div>
	  </div>
	  <div class="searchDiv">
	    搜索类型：
	    <select name="searchType">
	      <option value="title">标题</option>
	      <option value="content">内容</option>
	    </select>
	    关键字：
	    <input type="text" name="keyword" size="20">
	    <input type="submit" value="Search">
	  </div>
	  </form>
	  <!-- 显示搜索到的新闻 -->
	  <div class="newsTypeDiv">
	    <div class="newsTypeDiv1">&nbsp;<a href="index.html" class="a">新闻主页</a> &raquo; 搜索新闻</div>
	    <div class="newsTypeDiv2">本类共有<?php  if ($_POST) { echo  count($re5);}?>条新闻</div>
	  </div>
	  <?php 
	    if ($_POST) {
	    foreach ($re5 as $v){?>
	  <div class="newsTypeDiv3">
	    <img src="images/makealltop.gif"><a href="news.php?articleId=<?php echo $v['articleId'];?>"><?php echo $v['title'];?></a>	   
	  </div>
	  <?php }}?>
	  
	  <div class="newsTypeDiv3">&nbsp;</div>
	</div>
    
    
    <!-- 网页脚 -->
    <?php include_once 'footer.php';?>
  </body>
</html>