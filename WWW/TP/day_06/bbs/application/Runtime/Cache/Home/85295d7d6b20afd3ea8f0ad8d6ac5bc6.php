<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>Ajax功能</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/bbs/public/css/bbs.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/bbs/library/jquery/jquery-1.4.js"></script>
    <script type="text/javascript">
      function hello()
      {
    	  $.ajax({
    		  type:"post",
    		  url:"/bbs/index.php/Ajax/haha",
    		  data:"msg="+$("#msg").val(),
    		  success:function(re){
    			  $("#mySpan").html(re);
    		  }
    	  });
      }
    </script>
  </head>
  <body>
    <center>
  <a href="/bbs/index.php/Index/index.html">网站首页</a> | 
  <a href="/bbs/index.php/Add/index.html">添加记录</a> | 
  <a href="/bbs/index.php/Sql/index.html">执行sql语句</a> | 
  <a href="/bbs/index.php/Page1/index.html">数据库分页</a> | 
  <a href="/bbs/index.php/Page2/index.html">分页类</a> | 
  <a href="/bbs/index.php/Login/index.html">会员登陆</a> | 
  <a href="/bbs/index.php/Upload1/index.html">文件上传</a> | 
  <a href="/bbs/index.php/Upload2/index.html">多文件上传</a> | 
  <a href="/bbs/index.php/Common/index.html">Common用法</a> | 
  <a href="/bbs/index.php/Write/index.html">发表文章</a> | 
  <a href="/bbs/index.php/Ajax/index.html">Ajax功能</a> | 
  <a href="/bbs/index.php/Cache1/index.html">数据缓存</a> | 
  <a href="/bbs/index.php/Cache2/index.html">快速缓存</a> | 
  <a href="/bbs/index.php/Cache3/index.html">查询缓存</a>
</center>
<br><br>







    
    <table border="1" align="center" width="600">
      <tr>
        <td>
          请输入：<input type="text" id="msg" size="20">
          <input type="button" value="按扭" onclick="hello()">
          <span id="mySpan"></span>
        </td>
      </tr>
    </table>
  </body>
</html>