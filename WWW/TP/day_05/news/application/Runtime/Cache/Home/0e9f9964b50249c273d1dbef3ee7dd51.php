<?php if (!defined('THINK_PATH')) exit();?><html>
  <head>
    <title>天天新闻网</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="/TP/day_05/news/public/css/news.css" type="text/css" rel="stylesheet" />
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
	  <!-- 左侧 -->
	  <div class="leftDiv">
	    <!-- 登陆 -->
	    <div class="loginDiv">
	      <div class="loginDiv1">会员登陆</div>
	      <div class="loginDiv2 clear">
	        <div class="loginDiv20">用户名</div>
	        <div class="loginDiv21"><input type="text" name="userName" value="admin" class="txt1">*</div>
	      </div>
	      <div class="loginDiv2 clear">
	        <div class="loginDiv20">密码</div>
	        <div class="loginDiv21"><input type="password" name="password" value="123" class="txt1">*</div>
	      </div>
	      <div class="loginDiv2 clear">
	        <div class="loginDiv20">验证码</div>
	        <div class="loginDiv21"><input type="text" name="checkCode" size="8" maxlength="4"><img id="myImg" src="" align="absmiddle"></div>
	      </div>
	      <div class="loginDiv2 clear">
	        <div class="loginDiv20">&nbsp;</div>
	        <div class="loginDiv21"><input type="submit" value="登陆"></div>
	      </div>
	    </div>
	    <!-- 一个分类带两条新闻 -->
	    <?php if(is_array($newsTypes)): $i = 0; $__LIST__ = $newsTypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="twoNews">
	      <div class="twoNews1">&nbsp;<a href="/TP/day_05/news/index.php/NewsType/index/typeId/<?php echo ($v["typeId"]); ?>.html" class="a"><?php echo ($v["typeName"]); ?></a></div>
	      <div class="twoNews2"><a href="/TP/day_05/news/index.php/NewsType/index/typeId/<?php echo ($v["typeId"]); ?>.html" class="a">更多</a>&nbsp;</div>
	    </div>
	    <?php if(is_array($v["news"])): $i = 0; $__LIST__ = $v["news"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><div class="twoNews3"><img src="/TP/day_05/news/public/images/makealltop.gif"><a href="/TP/day_05/news/index.php/News/index/articleId/<?php echo ($vv["articleId"]); ?>.html"><?php echo ($vv["title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
	  </div>
	  <!-- 右侧 -->
	  <div class="rightDiv">
	    <!-- 热点要闻 -->
	    <div class="hotNews">热点要闻</div>
	    <?php if(is_array($hotNews)): $i = 0; $__LIST__ = $hotNews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="hotNews1">
	      [<a href="/TP/day_05/news/index.php/NewsType/index/typeId/<?php echo ($v["typeId"]); ?>.html"><?php echo ($v["typeName"]); ?></a>] <a href="/TP/day_05/news/index.php/News/index/articleId/<?php echo ($v["articleId"]); ?>.html"><?php echo ($v["title"]); ?></a> <?php echo ($v["dateandtime"]); ?> <img src="/TP/day_05/news/public/images/new1.gif">
	    </div><?php endforeach; endif; else: echo "" ;endif; ?>
	    
	    <!-- 新闻分类导航 -->
	    <div class="hotNews">新闻分类导航</div>
	    <div class="newsDh">
	      <div class="newsDh1"><span class="newsCount">新闻总数：</span></div>
	      <div class="newsDh2"><?php echo ($newsCount); ?></div>
	      <div class="newsDh3">&nbsp;</div>
	    </div>
	    <?php if(is_array($newsTypes)): $i = 0; $__LIST__ = $newsTypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="newsDh">
	      <div class="newsDh1"><a href="/TP/day_05/news/index.php/NewsType/index/typeId/<?php echo ($v["typeId"]); ?>.html"><?php echo ($v["typeName"]); ?>：</a></div>
	      <div class="newsDh2"><?php echo ($v["articleNums"]); ?></div>
	      <div class="newsDh3"><a href="/TP/day_05/news/index.php/NewsType/index/typeId/<?php echo ($v["typeId"]); ?>.html"><img src="/TP/day_05/news/public/images/sch.gif" border="0" class="goImg"></a></div>
	    </div><?php endforeach; endif; else: echo "" ;endif; ?>
	  </div>
	</div>
    
    
    <!-- 网页脚 -->
    <div class="footDiv">
  网站简介 - 广告服务 - 网站地图 - 帮助信息 - 联系方式<br>
  Copyrights &copy; 2014 hys.com All Rights Reserved
</div>
  </body>
</html>