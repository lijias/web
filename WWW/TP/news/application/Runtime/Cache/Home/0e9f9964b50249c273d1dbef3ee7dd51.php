<?php if (!defined('THINK_PATH')) exit();?><html>
  <head>
    <title>天天新闻网</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="/TP/news/public/css/news.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <!-- 网站头 -->
        <div class="headDiv">
      <div class="headDiv1">
        <div class="headDiv10">www.<b>ttnewS</b>.com</div>
        <div class="headDiv11"><img src="/TP/news/public/images/banner17.gif" width="370" height="50"></div>
      </div>
      <div class="headDiv2">天天新闻网</div>
    </div>
	<!-- 导航菜单 -->
	<div class="menuDiv">
	  <a href="index.html" class="a">首页</a> | 
	  <?php if(is_array($result)): foreach($result as $key=>$v): ?><a href="/TP/news/index.php/newstype/index/typeId/<?php echo ($v["typeId"]); ?>.html" class="a"><?php echo ($v["typeName"]); ?></a> |<?php endforeach; endif; ?>
	  <a href="search.html" class="a">搜索</a>
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
	    <div class="twoNews">
	      <div class="twoNews1">&nbsp;<a href="newstype.html" class="a">国内新闻</a></div>
	      <div class="twoNews2"><a href="newstype.html" class="a">更多</a>&nbsp;</div>
	    </div>
	    <div class="twoNews3"><img src="/TP/news/public/images/makealltop.gif"><a href="news.html">山东济南再次遭受雷暴雨袭击</a></div>
	    <div class="twoNews3"><img src="/TP/news/public/images/makealltop.gif"><a href="news.html">山东济南再次遭受雷暴雨袭击</a></div>
	    <div class="twoNews">
	      <div class="twoNews1">&nbsp;<a href="newstype.html" class="a">国内新闻</a></div>
	      <div class="twoNews2"><a href="newstype.html" class="a">更多</a>&nbsp;</div>
	    </div>
	    <div class="twoNews3"><img src="/TP/news/public/images/makealltop.gif"><a href="news.html">山东济南再次遭受雷暴雨袭击</a></div>
	    <div class="twoNews3"><img src="/TP/news/public/images/makealltop.gif"><a href="news.html">山东济南再次遭受雷暴雨袭击</a></div>
	    <div class="twoNews">
	      <div class="twoNews1">&nbsp;<a href="newstype.html" class="a">国内新闻</a></div>
	      <div class="twoNews2"><a href="newstype.html" class="a">更多</a>&nbsp;</div>
	    </div>
	    <div class="twoNews3"><img src="/TP/news/public/images/makealltop.gif"><a href="news.html">山东济南再次遭受雷暴雨袭击</a></div>
	    <div class="twoNews3"><img src="/TP/news/public/images/makealltop.gif"><a href="news.html">山东济南再次遭受雷暴雨袭击</a></div>
	    <div class="twoNews">
	      <div class="twoNews1">&nbsp;<a href="newstype.html" class="a">国内新闻</a></div>
	      <div class="twoNews2"><a href="newstype.html" class="a">更多</a>&nbsp;</div>
	    </div>
	    <div class="twoNews3"><img src="/TP/news/public/images/makealltop.gif"><a href="news.html">山东济南再次遭受雷暴雨袭击</a></div>
	    <div class="twoNews3"><img src="/TP/news/public/images/makealltop.gif"><a href="news.html">山东济南再次遭受雷暴雨袭击</a></div>
	
	  </div>
	  <!-- 右侧 -->
	  <div class="rightDiv">
	    <!-- 热点要闻 -->
	    <div class="hotNews">热点要闻</div>
	    <div class="hotNews1">
	      [<a href="newstype.html">国内新闻</a>] <a href="news.html">山东济南再次遭受雷暴雨袭击山东</a> 2015-3-7 13:10:37 <img src="/TP/news/public/images/new1.gif">
	    </div>
	    <div class="hotNews1">
	      [<a href="newstype.html">国内新闻</a>] <a href="news.html">山东济南再次遭受雷暴雨袭击山东济南</a> 2015-3-7 13:10:37 <img src="/TP/news/public/images/new1.gif">
	    </div>
	    <div class="hotNews1">
	      [<a href="newstype.html">国内新闻</a>] <a href="news.html">山东济南再次遭受雷暴雨袭击山东济南再次遭受雷</a> 2015-3-7 13:10:37 <img src="/TP/news/public/images/new1.gif">
	    </div>
	    <div class="hotNews1">
	      [<a href="newstype.html">国内新闻</a>] <a href="news.html">山东济南再次遭受雷暴雨袭击山东济南再次遭受雷</a> 2015-3-7 13:10:37 <img src="/TP/news/public/images/new1.gif">
	    </div>
	    <div class="hotNews1">
	      [<a href="newstype.html">国内新闻</a>] <a href="news.html">山东济南再次遭受雷暴雨袭击山东济南再</a> 2015-3-7 13:10:37 <img src="/TP/news/public/images/new1.gif">
	    </div>
	    <div class="hotNews1">
	      [<a href="newstype.html">国内新闻</a>] <a href="news.html">山东济南再次遭受雷暴雨袭击山东济</a> 2015-3-7 13:10:37 <img src="/TP/news/public/images/new1.gif">
	    </div>
	    
	    <!-- 新闻分类导航 -->
	    <div class="hotNews">新闻分类导航</div>
	    <div class="newsDh">
	      <div class="newsDh1"><span class="newsCount">新闻总数：</span></div>
	      <div class="newsDh2">100</div>
	      <div class="newsDh3">&nbsp;</div>
	    </div>
	    <div class="newsDh">
	      <div class="newsDh1"><a href="newstype.html">国内新闻：</a></div>
	      <div class="newsDh2">30</div>
	      <div class="newsDh3"><a href="newstype.html"><img src="/TP/news/public/images/sch.gif" border="0" class="goImg"></a></div>
	    </div>
	    <div class="newsDh">
	      <div class="newsDh1"><a href="newstype.html">国内新闻：</a></div>
	      <div class="newsDh2">30</div>
	      <div class="newsDh3"><a href="newstype.html"><img src="/TP/news/public/images/sch.gif" border="0" class="goImg"></a></div>
	    </div>
	    <div class="newsDh">
	      <div class="newsDh1"><a href="newstype.html">国内新闻：</a></div>
	      <div class="newsDh2">30</div>
	      <div class="newsDh3"><a href="newstype.html"><img src="/TP/news/public/images/sch.gif" border="0" class="goImg"></a></div>
	    </div>
	    <div class="newsDh">
	      <div class="newsDh1"><a href="newstype.html">国内新闻：</a></div>
	      <div class="newsDh2">30</div>
	      <div class="newsDh3"><a href="newstype.html"><img src="/TP/news/public/images/sch.gif" border="0" class="goImg"></a></div>
	    </div>
	  </div>
	</div>
    
    
    <!-- 网页脚 -->
       <div class="footDiv">
      网站简介 - 广告服务 - 网站地图 - 帮助信息 - 联系方式<br>
      Copyrights &copy; 2014 hys.com All Rights Reserved
    </div>
  </body>
</html>