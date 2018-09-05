<?php /* Smarty version Smarty-3.1.16, created on 2016-10-11 09:51:46
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2078857fc4177d59f80-00424573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1476150704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2078857fc4177d59f80-00424573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fc4177d97012_13317794',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fc4177d97012_13317794')) {function content_57fc4177d97012_13317794($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>添加留言</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript">
      function checkAdd()
      {
    	  if(document.frm.userName.value == ""){
    		  alert("请输入留言人的昵称！");
    		  document.frm.userName.focus();
    		  return false;
    	  }
    	  else if(document.frm.content.value == ""){
    		  alert("请输入留言内容！");
    		  document.frm.content.focus();
    		  return false;
    	  }
      }
    </script>
  </head>
  <body>
    <font color="pink" face="隶书" size="5">小小留言本</font>
    <hr/>
    <form name="frm" method="post" action="index.php" onsubmit="return checkAdd()">
    <table border="1" align="left" bordercolor="blue">
      <tr>
        <td>
          <table border="0" align="center">
            <tr>
              <td colspan="2" align="left">
                <a href="show.php">查看留言</a>
              </td>
            </tr>
            <tr>
              <td>昵称：</td>
              <td><input type="text" name="userName" size="30"/><font color="red">昵称的长度为2~16</font></td>
            </tr>
            <tr>
              <td>留言：</td>
              <td><font color="red">留言内容长度为2~200</font></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><textarea name="content" cols="50" rows="5"></textarea></td>
            </tr>
            <tr>
              <td colspan="2" align="center">
                <input type="submit" value="提交"/>
                &nbsp;&nbsp;&nbsp;
                <input type="reset" value="重写"/>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>










<?php }} ?>
