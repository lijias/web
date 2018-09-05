<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>后台管理页面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/bbs/public/css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <table border="1" ailgn="center" width="600">
      <tr>
        <td colspan="2">网站的头</td>
      </tr>
      <tr>
        <td width="150"><script type=text/javascript src="/bbs/library/dtree/js/dtree.js"></script>
<script  type=text/javascript> 
  function hello()
  {
    d = new dTree('d','/bbs/library/dtree/');

    d.add(0,-1,'后台管理','');

    d.add(1,0,'重新登陆','javascript:logout()');

    d.add(2,0,'新闻管理','');
    d.add(21,2,'添加新闻','addnews.html');
    d.add(22,2,'修改新闻','modnews.html');

    d.add(3,0,'分类管理','');
    d.add(31,3,'添加分类','addtype.html');
    d.add(32,3,'修改分类','modtype.html');

    d.add(4,0,'用户管理','');
    d.add(41,4,'添加用户','adduser.html');

    d.add(5,0,'返回首页','index.html');

    document.write(d);
  }

  hello();
</script>





</td>
        <td>右侧正文内容</td>
      </tr>
    </table>
  </body>
</html>