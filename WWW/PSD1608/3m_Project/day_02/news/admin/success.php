<?php 
include_once 'onlogin.php';
	header("content-type:text/html;charset=utf-8");
	session_start();
	$act = $_GET["act"];//操作类型
	$rst = $_GET["rst"];//操作结果
	$message = "";//提示信息
	$jumpUrl = "";//跳转地址
	
	if($act == "logout")//管理员退出登陆
	{
		unset($_SESSION["userMsg"]);
		$message = "退出登陆成功！";
		$jumpUrl = "../index.php";
	}else if ($act == 'onlogin'){
		$message = "用户没有登录！";
		$jumpUrl = "../index.php";
	}
	elseif($act == "adduser")//添加管理员
	{
		if($rst > 0)
		{
			$message = "添加管理员成功！";
			$jumpUrl = "adduser.php";
		}
		else
		{
			$message = "添加管理员失败！";
			$jumpUrl = "adduser.php";
		}
	}
	elseif($act == "addtype")//添加分类
	{
		if($rst > 0)
		{
			$message = "添加分类成功！";
			$jumpUrl = "addtype.php";
		}
		else
		{
			$message = "添加分类失败！";
			$jumpUrl = "addtype.php";
		}
	}
	elseif($act == "deltype")
	{
		if($rst > 0)
		{
			$message = "删除分类成功！";
			$jumpUrl = "modtype.php";
		}
		else
		{
			$message = "删除分类失败！";
			$jumpUrl = "modtype.php";
		}
	}
	elseif($act == "udtype")
	{
		if($rst > 0)
		{
			$message = "编辑分类成功！";
			$jumpUrl = "modtype.php";
		}
		else
		{
			$message = "编辑分类失败！";
			$jumpUrl = "modtype.php";
		}
	}
	elseif($act == "insertNews")
	{
		if($rst > 0)
		{
			$message = "添加新闻成功！";
			$jumpUrl = "addnews.php";
		}
		else
		{
			$message = "添加新闻失败！";
			$jumpUrl = "addnews.php";
		}
	}
	elseif($act == "deletenews")
	{
		if($rst > 0)
		{
			$message = "删除新闻成功！";
			$jumpUrl = "modnews.php";
		}
		else
		{
			$message = "删除新闻失败！";
			$jumpUrl = "modnews.php";
		}
	}
	elseif($act == "updateNews")
	{
		if($rst > 0)
		{
			$message = "修改新闻成功！";
			$jumpUrl = "modnews.php";
		}
		else
		{
			$message = "修改新闻失败！";
			$jumpUrl = "modnews.php";
		}
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
	    var index = 5;//时间
	    function changeTime()
	    {
	        document.getElementById("timeSpan").innerHTML = index;
	        index--;
	        if(index < 0)
	        {
	            //时间到了，跳转页页
	            window.location = "<?php echo $jumpUrl?>";
	        }
	        else
	        {
	            //时间没到，继续倒计时
	            window.setTimeout("changeTime()",1000);
	        }
	    }
    </script>
  </head>
  <body onload="changeTime()">
    <br><br><br><br>
    <table bgcolor="white" border="1" align="center" width="600">
      <tr>
        <td align="left"><b>系统提示信息</b></td>
      </tr>
      <tr>
        <td align="center">
          <br><?php echo $message?> 页面将在 <span id="timeSpan">5</span> 秒钟内自动跳转！<br>
          <br>如果没有自动跳转，<a href="<?php echo $jumpUrl?>">请点击这里</a>。<br><br>
        </td>
      </tr>
    </table>
  </body>
</html>







