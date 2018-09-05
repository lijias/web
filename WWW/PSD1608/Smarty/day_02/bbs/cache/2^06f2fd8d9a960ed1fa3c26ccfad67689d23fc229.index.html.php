<?php /*%%SmartyHeaderCode:821457fc9487a40831-24708440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1476154143,
      2 => 'file',
    ),
    '993a4f4a79418d6aa41c40045b97b005c86ba121' => 
    array (
      0 => '.\\templates\\header.html',
      1 => 1476152563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '821457fc9487a40831-24708440',
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fc99b5487ab4_47107953',
  'has_nocache_code' => false,
  'cache_lifetime' => 240,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fc99b5487ab4_47107953')) {function content_57fc99b5487ab4_47107953($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>网站首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <center>
  <a href="index.php">网站首页</a> | 
  <a href="login.php">会员登陆</a> | 
  <a href="writer.php">发表文章</a> | 
  <a href="ajax.php">ajax功能</a> | 
  <a href="var.php">变量调节器</a> | 
  <a href="config.php">configs用法</a> | 
  <a href="cache1.php">页面缓存</a> | 
  <a href="cache2.php">局部不缓存</a>
</center>
<br><br>
    
    <table border="1" align="center" width="600">
      <tr>
        <td>编号</td>
        <td>标题</td>
        <td>点击次数</td>
        <td>时间</td>
      </tr>
            <tr>
        <td>4</td>
        <td>web.config的作用</td>
        <td>5</td>
        <td>2016-10-02 17:00:59</td>
      </tr>
            <tr>
        <td>5</td>
        <td>第三方插件开发</td>
        <td>70</td>
        <td>2016-10-02 17:00:59</td>
      </tr>
            <tr>
        <td>6</td>
        <td>连接池技术</td>
        <td>10</td>
        <td>2016-10-02 17:00:59</td>
      </tr>
            <tr>
        <td colspan="4" align="center">
                                    <a href="index.php?currentPage=1">[1]</a>&nbsp;&nbsp;&nbsp;
                                                [2]&nbsp;&nbsp;&nbsp;
                                                <a href="index.php?currentPage=3">[3]</a>&nbsp;&nbsp;&nbsp;
                                                <a href="index.php?currentPage=4">[4]</a>&nbsp;&nbsp;&nbsp;
                                                <a href="index.php?currentPage=5">[5]</a>&nbsp;&nbsp;&nbsp;
                              </td>
      </tr>
      <tr>
        <td colspan="4" align="center">
                    <a href="index.php?currentPage=1">首页</a>&nbsp;&nbsp;&nbsp;
          <a href="index.php?currentPage=1">上一页</a>&nbsp;&nbsp;&nbsp;
                    
                    <a href="index.php?currentPage=3">下一页</a>&nbsp;&nbsp;&nbsp;
          <a href="index.php?currentPage=5">尾页</a>&nbsp;&nbsp;&nbsp;
                  </td>
      </tr>
    </table>
  </body>
</html>






<?php }} ?>
