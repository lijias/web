<?php
include './common/config.inc.php';
include './common/db.inc.php';
//读取出新闻内容 
$query = "select id,title,contents,addtime
		 from article where id=".(int)$_GET['id'];
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻视界_国内新闻_李克强：有“红顶中介”打政府旗号搞垄断</title>
<link type="text/css" rel="stylesheet" media="all" href="styles/reset.css"/>
<link type="text/css" rel="stylesheet" media="all" href="styles/layout.css"/>
<link type="text/css" rel="stylesheet" media="all" href="styles/common.css"/>
</head>
<body>
<!-- 通用顶部导航开始-->
<?php include "header.php"; ?>
<!--导航结束-->
<div class="section">
	<h1 class="article-title"><?php echo $row['title']; ?></h1>
	<div class="clear">
		<div class="side-left-680" id="article">		
			<div class="article-info"><?php echo $row['addtime']; ?><a href="#">评论(6,638)</a></div>
			<div class="article-body">
				<?php echo $row['contents'];?>
			</div>
			<div id="comment">
				<p class="comment-count"><a href="#">已有<span>226</span>条评论，共<span>7,438人</span>参与</a></p>
				<textarea class="comment-content">请输入评论内容</textarea>
				<div class="comment-user-cont clear">
					<div class="comment-user-username"><input type="text" name="username"     class="comment-input" value="请输入账号"/></div>
					<div class="comment-user-password"><input type="password" name="password" class="comment-input" value="请输入密码"/></div>
					<div class="comment-user-link"><input type="checkbox" name="remember" checked="checked" value="1"/> 下次自动登录<a href="#">注册</a><a href="#">忘记密码？</a></div>					
					<div class="comment-user-logined">
						<span><a href="#">淘气的松鼠</a></span>
						<span><a href="#">退出</a></span>
						<a href="#" class="comment-publishing-btn">发布</a>
					</div>
				</div>
				
			</div>
		</div>
		<div class="side-right-300">
			<h3 class="hot-title">24小时排行榜</h3>
			<ol class="list-hot">
				<li class="hot"><span class="top-num num1">01</span><a href="http://news.sina.com.cn/c/2015-03-01/021731553483.shtml" target="_blank">广东:遇台风黄色预警等四种信号即可自行停课</a></li>
				<li class="hot"><span class="top-num num2">02</span><a href="http://news.sina.com.cn/c/2015-03-01/020931553472.shtml" target="_blank">上海迪斯尼回应单日票价500元:仍在研究</a></li>
				<li class="hot"><span class="top-num num3">03</span><a href="http://news.sina.com.cn/c/2015-03-01/020431553512.shtml" target="_blank">西安市环保局原局长等5人涉嫌受贿被捕</a></li>
				<li><span class="top-num">04</span><a href="http://news.sina.com.cn/c/2015-03-01/005931553346.shtml" target="_blank">北京国土局:暂不发放新版房产证 </a></li>
				<li><span class="top-num">05</span><a href="http://news.sina.com.cn/c/2015-02-28/233331553297.shtml" target="_blank">江西为3.36万名农民工追讨工资及赔偿金4.79亿</a></li>
				<li><span class="top-num">06</span><a href="http://news.sina.com.cn/c/2015-02-28/230931553282.shtml" target="_blank">江西乐平煤矿煤与瓦斯突出事故已确认4矿工被</a></li>
				<li><span class="top-num">07</span><a href="http://news.sina.com.cn/c/2015-02-28/225631553279.shtml" target="_blank">南昌符合标准校车仅1辆获标牌 安全隐患巨大</a></li>
				<li><span class="top-num">08</span><a href="http://news.sina.com.cn/c/2015-02-28/211631553192.shtml" target="_blank">广东化州政协副主席李沛涉嫌严重违纪被调查</a></li>
				<li><span class="top-num">09</span><a href="http://news.sina.com.cn/c/2015-02-28/202131553113.shtml" target="_blank">青海狱警违规为17名罪犯办理减刑一审获刑18年</a></li>
				<li><span class="top-num">10</span><a href="http://news.sina.com.cn/c/2015-02-28/200431553106.shtml" target="_blank">湖北黄冈人大常委会主任龙福清等2人被调查</a></li>
			</ol>		
		
		</div>
	</div>
</div>
<!--版权区 start-->
<div class="section footer">
  <p>24小时客户服务热线：4006900000 010-82623378 <a href="#">常见问题解答</a> <a target="_blank" href="http://www.12377.cn/">互联网违法和不良信息举报</a></p>
  <p><a target="_blank" href="#">新闻中心意见反馈留言板</a></p>
  <p><a href="http://www.tarena.com.cn/">达内简介</a> | <a href="#">关于达内</a> | <a href="#">广告服务</a> | <a href="#">联系我们</a> | <a href="#">招聘信息</a> | <a href="#">网站律师</a> |  <a href="#">通行证注册</a> | <a href="#">产品答疑</a></p>
  <p>Copyright &copy; 1996-2015 TARENA Corporation, All Rights Reserved</p>
</div>
<!--版权区 end-->

</body>
</html>
