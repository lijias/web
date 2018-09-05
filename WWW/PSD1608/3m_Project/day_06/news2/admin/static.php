<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'nologin.php';
	include_once '../plus/StaticHtml.php';//静态化的封装类
	
	//获得url中的参数
	$act = $_GET["act"];
	
	//开始静态化
	if($act == "static")
	{
		$obj = new StaticHtml();
		$obj->index();//index.html静态化
		$obj->newstype();//newstype.html静态化
		$obj->news();//news.html静态化
		
		echo "<script type='text/javascript'>";
		echo "	alert('静态化成功！');";
		echo "	window.location='static.php';";
		echo "</script>";
		
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../css/admin.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="../jquery/jquery-1.4.js"></script>
    <script type="text/javascript">
      function staticWeb()
      {
          if(confirm("是否全站静态化？"))
          {
              window.location = "static.php?act=static";
          }
      }    
    </script>
  </head>
  <body>
    <!-- 网站的头 -->
    <?php include_once 'header.php';?>
    
    <!-- 当前位置 -->
    <div class="locationDiv">&nbsp;: 后台管理 : 静态化</div>
    
    <!-- 正文内容 -->
    <div class="mainDiv clear">
      
      <!-- 左侧树状列表 -->
      <div class="leftDiv"><?php include_once 'left.php';?></div>
      
      <!-- 右侧页面内容 -->
      <div class="rightDiv">
        <br><br><br>
        <a href="#" onclick="staticWeb()">全站静态化</a>
      </div>
      
    </div>
  </body>
</html>







