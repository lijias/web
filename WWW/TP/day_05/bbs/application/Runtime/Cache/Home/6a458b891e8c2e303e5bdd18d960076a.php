<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>修改记录</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/bbs/public/css/bbs.css" type="text/css" rel="stylesheet" />
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







    
    <form name="frm" method="post" action="/bbs/index.php/Update/update/bbsId/<?php echo ($bbsInfo["bbsId"]); ?>">
    <table border="1" align="center">
      <tr>
        <td>标题：</td>
        <td><input type="text" name="title" size="20" value="<?php echo ($bbsInfo["title"]); ?>"></td>
      </tr>
      <tr>
        <td>点击次数：</td>
        <td><input type="text" name="clickTimes" size="20" value="<?php echo ($bbsInfo["clickTimes"]); ?>"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="修改">
          &nbsp;&nbsp;&nbsp;
          <input type="reset" value="重置">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>