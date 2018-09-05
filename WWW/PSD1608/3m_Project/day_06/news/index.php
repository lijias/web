<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'dbio/NewsArticles.php';
	include_once  'dbio/Manager.php';
	session_start();
	//
	$result1=NewsArticles::getRD();
	//
	//var_dump($_POST);
    if ($_POST) {
    	$yzm=$_POST["checkCode"];
    	$username=$_POST["userName"];
        $password=$_POST["password"];
        $trueyzm=$_SESSION['trueCode'];
        if ($yzm == $trueyzm) {
        	$userInfo=Manager::getAdmin($username,$password);
        	if ($userInfo==null) {
        		header("location:success.php?act=cuo&rst=2");
        	}else{
        		$_SESSION['userMsg'] = $userInfo;
        		header("location:success.php?act=cuo&rst=3");
        	}
        }else{
        	header("location:success.php?act=cuo&rst=1");
        }  
    }


    
?>
<html>
  <head>
    <title>天天新闻网</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="css/news.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
      //验证码的看不清换一张
      function changeImage()
      {
          document.getElementById("myImg").src = "image.php?id="+new Date();
      }
      function check(){
               if( document.getElementById("checkCode").value==""){
                   alert("验证码不能空");
                   
                   return false;
               }  
               if( document.getElementById("userName").value==""){
                        alert("用户名不能空");
                        return false;
                   }
               if( document.getElementById("password").value==""){
                        alert("密码不能空");
                        return false;
              }
          }
    </script>
  </head>
  <body>
    <!-- 网站头 -->
    <?php include_once 'header.php';?>
	
	<!-- 正文内容 -->
	<div class="mainDiv clear">
	  <!-- 左侧 -->
	  <div class="leftDiv">
	    <!-- 登陆 -->
	    <form name="frm" method="post" action="index.php" onsubmit="return check()">
	    <div class="loginDiv">
	      <div class="loginDiv1">会员登陆</div>
	      <div class="loginDiv2 clear">
	        <div class="loginDiv20">用户名</div>
	        <div class="loginDiv21"><input type="text" id="userName" name="userName" value="admin" class="txt1">*</div>
	      </div>
	      <div class="loginDiv2 clear">
	        <div class="loginDiv20">密码</div>
	        <div class="loginDiv21"><input type="password" id="password" name="password" value="123" class="txt1">*</div>
	      </div>
	      <div class="loginDiv2 clear">
	        <div class="loginDiv20">验证码</div>
	        <div class="loginDiv21"><input type="text" id="checkCode" name="checkCode" size="8" maxlength="4"><img id="myImg" src="image.php" onclick="changeImage()" style="cursor:pointer;" title="看不清换一张" alt="看不清换一张" align="absmiddle"></div>
	      </div>
	      <div class="loginDiv2 clear">
	        <div class="loginDiv20">&nbsp;</div>
	        <div class="loginDiv21"><input type="submit" value="登陆"></div>
	      </div>
	    </div>
	    </form>
	    <!-- 一个分类带两条新闻 -->
	    <?php foreach ($result as $v){?>
	   <div class="twoNews">
	      <div class="twoNews1">&nbsp;<a href="newstype.php?typeId=<?php echo $v['typeId'];?>" class="a"><?php echo $v['typeName'];?></a></div>
	      <div class="twoNews2"><a href="newstype.php?typeId=<?php echo $v['typeId'];?>" class="a">更多</a>&nbsp;</div>
	    </div>
	    <?php  $a=$v['typeId'];?> 
	    <!--  -->
	    <?php $result4=NewsArticles::getLT2($a);
	
	    ?>
	    <?php foreach ($result4 as $value){?>
	    <?php if (mb_strlen($value['title'],'utf-8')>16) {
	    	$p=mb_substr($value['title'], 0,15,'utf-8')."...";
	    }else {
	    	$p=$value['title'];
	    }         
	    ?>
	    <div class="twoNews3"><img src="images/makealltop.gif"><a href="news.php?articleId=<?php echo $value['articleId'];?>"><?php echo $p;?></a></div>   
	    <?php }?>
	<?php }?>
	  </div>
	  <!-- 右侧 -->
	  <div class="rightDiv">
	    <!-- 热点要闻 -->
	    <div class="hotNews">热点要闻</div>
	   <div class="hotNews1">
	      <?php foreach ($result1 as $v)
	      {
	      ?>
	      
	      [<a href="newstype.php?typeId=<?php echo $v['typeId']?>"><?php echo $v['typeName'];?></a>] 
	      <a href="news.php?articleId=<?php echo $v['articleId'];?>"><?php echo $v['title'];?></a> <?php echo $v['dateandtime'];?> <img src="images/new1.gif"><br/><br/>
	   
	     <?php 
	      }
	      ?>
	      </div>
	    
	    
	    <!-- 新闻分类导航 -->
	    <div class="hotNews">新闻分类导航</div>
	    <div class="newsDh">
	      <div class="newsDh1"><span class="newsCount">新闻总数：</span></div>
	      <div class="newsDh2"><?php echo NewsArticles::getZ();?></div>
	      <div class="newsDh3">&nbsp;</div>
	    </div>
	    <?php 
	    foreach ($result as $v){
	    ?>
	    <div class="newsDh">    
	      <div class="newsDh1"><a href="newstype.php?typeId=<?php echo $v['typeId'];?>"><?php echo $v['typeName'];?></a></div>
	      <div class="newsDh2"><?php echo $v['articleNums'];?></div>
	      <div class="newsDh3"><a href="newstype.php?typeId=<?php echo $v['typeId'];?>"><img src="images/sch.gif" border="0" class="goImg"></a></div>
	    </div>
	    <?php 
         };
	    ?>
	</div>
   </div>
    
    <!-- 网页脚 -->
    <?php include_once 'footer.php';?>
  </body>
</html>




