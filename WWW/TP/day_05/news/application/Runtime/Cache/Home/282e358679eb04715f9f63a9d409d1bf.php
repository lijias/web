<?php if (!defined('THINK_PATH')) exit();?><html>
  <head>
    <title>天天新闻网</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="/TP/day_05/news/public/css/news.css" type="text/css" rel="stylesheet" />
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
  <div class="headDiv">
  <div class="headDiv1">
    <div class="headDiv10">www.<b>ttnewS</b>.com</div>
    <div class="headDiv11"><img src="/TP/day_05/news/public/images/banner17.gif" width="370" height="50"></div>
  </div>
  <div class="headDiv2">天天新闻网</div>
</div>
<!-- 导航菜单 -->
<div class="menuDiv">
  <a href="/TP/day_05/news/index.php/Index/index.html" class="a">首页</a> | 
  <?php if(is_array($newsTypes)): $i = 0; $__LIST__ = $newsTypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="/TP/day_05/news/index.php/NewsType/index/typeId/<?php echo ($v["typeId"]); ?>.html" class="a"><?php echo ($v["typeName"]); ?></a> |<?php endforeach; endif; else: echo "" ;endif; ?>
  <a href="/TP/day_05/news/index.php/Search/index.html" class="a">搜索</a>
</div>





	
	<!-- 正文内容 -->
	<div class="mainDiv clear">
	  <!-- 搜索条件 -->
	  <form name="frm" method="post" action="/TP/day_05/news/index.php/Search/index.html" onsubmit="return checkSearch()">
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
	    <div class="newsTypeDiv1">&nbsp;<a href="/TP/day_05/news/index.php/index/index.html" class="a">新闻主页</a> &raquo; 搜索新闻</div>
	    <div class="newsTypeDiv2">本类共有<?php if($countnews): echo ($countnews); else: ?>0<?php endif; ?>条新闻</div>
	  </div>
	  <?php if(is_array($result)): foreach($result as $key=>$v): ?><div class="newsTypeDiv3">
	    <img src="/TP/day_05/news/public/images/makealltop.gif"><a href="/TP/day_05/news/index.php/News/index/articleId/<?php echo ($v["articleId"]); ?>.html"><?php echo ($v["title"]); ?></a>
	  </div><?php endforeach; endif; ?>
	  
	  <div class="newsTypeDiv3">&nbsp;</div>
	</div>
    
    
    <!-- 网页脚 -->
<div class="footDiv">
  网站简介 - 广告服务 - 网站地图 - 帮助信息 - 联系方式<br>
  Copyrights &copy; 2014 hys.com All Rights Reserved
</div>
  </body>
</html>