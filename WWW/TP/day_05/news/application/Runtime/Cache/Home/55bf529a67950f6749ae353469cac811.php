<?php if (!defined('THINK_PATH')) exit();?>
<html>
  <head>
    <title>天天新闻网</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="/TP/day_05/news/public/css/news.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
	  var editor;
	  function initEditor()
	  {
		  editor = CKEDITOR.replace("content",{
			  width:"560",
			  height:"200",
			  toolbar:"Basic",
			  skin:"v2"
		  });
		  editor.setData("");
	  }
	  function checkReview()
	  {
		  if(editor.getData() == "")
		  {
			  alert("请输入评论内容！");
			  editor.focus();
			  return false;
		  }
		  else if(document.frm.userName.value == "")
		  {
			  alert("请输入评论人的姓名！");
			  document.frm.userName.focus();
			  return false;
		  }
	  }
	  document.body.onload = initEditor;
	</script>
  </head>
  <body onload="initEditor()">
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
	  <!-- 显示的新闻 -->
	  <div class="newsTypeDiv" style="border:1px solid #990100;">
	    <div class="newsTypeDiv1">
	      &nbsp;<a href="index.html" class="a">新闻主页</a> &raquo; 国内新闻
	    </div>
	  </div>
	  <div class="newsTitle"><?php echo ($result["title"]); ?></div>
	  <div class="newsTime"><?php echo ($result["dateandtime"]); ?></div>
	  <div class="newsImg">
	  <?php if($imagepath==''): else: ?>
	  <img src="/TP/day_05/news/public/<?php echo ($imagepath); ?>" width="400" height="300"><?php endif; ?>
	  </div>
	  <div class="newsContent"><?php echo ($result["content"]); ?></div>
	  <!-- 发表评论 -->
	  <form name="frm" method="post" action="" onsubmit="return checkReview()">
	  <div class="newsTypeDiv" style="border:1px solid #990100;">
	    <div class="newsTypeDiv1">&nbsp;&raquo; 发表评论</div>
	  </div>
	  <div class="newsContent">
	    <img src="/TP/day_05/news/public/images/face/em01.gif"><input type="radio" name="face" value="em01.gif" checked>
	    <img src="/TP/day_05/news/public/images/face/em02.gif"><input type="radio" name="face" value="em02.gif">
	    <img src="/TP/day_05/news/public/images/face/em03.gif"><input type="radio" name="face" value="em03.gif">
	    <img src="/TP/day_05/news/public/images/face/em04.gif"><input type="radio" name="face" value="em04.gif">
	    <img src="/TP/day_05/news/public/images/face/em05.gif"><input type="radio" name="face" value="em05.gif">
	    <img src="/TP/day_05/news/public/images/face/em06.gif"><input type="radio" name="face" value="em06.gif">
	    <img src="/TP/day_05/news/public/images/face/em07.gif"><input type="radio" name="face" value="em07.gif">
	    <img src="/TP/day_05/news/public/images/face/em08.gif"><input type="radio" name="face" value="em08.gif">
	    <img src="/TP/day_05/news/public/images/face/em09.gif"><input type="radio" name="face" value="em09.gif">
	    <img src="/TP/day_05/news/public/images/face/em10.gif"><input type="radio" name="face" value="em10.gif">
	    <img src="/TP/day_05/news/public/images/face/em11.gif"><input type="radio" name="face" value="em11.gif">
	  </div>
	  <div class="newsImg"><textarea name="content"></textarea></div>
	  <div class="newsContent">
	    姓名：<input type="text" name="userName" size="20">
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="submit" value="发表">
	  </div>
	  </form>
	  <!-- 评论内容 -->
	  <div class="newsTypeDiv" style="border:1px solid #990100;">
	    <div class="newsTypeDiv1">&nbsp;&raquo; 新闻点评</div>
	  </div>
	    <?php if(is_array($reviews)): foreach($reviews as $k=>$v): if($k%2==0): ?><div class="reviewDiv" style="background-color:#FFFBD6;">
	  <?php else: ?>
	   		<div class="reviewDiv" style="background-color:#CDE7F0;"><?php endif; ?>
	    <div class="reviewDiv1">
	      <img src="/TP/day_05/news/public/images/face/<?php echo ($v["face"]); ?>">游客：<?php echo ($v["userName"]); ?> 于 [<?php echo ($v["dateandtime"]); ?>] 发表评论：
	    </div>
	    <div class="reviewDiv1"><?php echo ($v["body"]); ?></div>
	    <div class="reviewDiv1"><hr class="hr1"></div>
	  </div><?php endforeach; endif; ?>
	  <br>
	</div>
    
    
    <!-- 网页脚 -->
<div class="footDiv">
  网站简介 - 广告服务 - 网站地图 - 帮助信息 - 联系方式<br>
  Copyrights &copy; 2014 hys.com All Rights Reserved
</div>
  </body>
</html>