<?php /* Smarty version Smarty-3.1.16, created on 2016-10-12 11:19:57
         compiled from ".\templates\writer.html" */ ?>
<?php /*%%SmartyHeaderCode:3254657fdab96319752-36484226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cd484ce3bc3d7c354c863bcd889f7a5b8440269' => 
    array (
      0 => '.\\templates\\writer.html',
      1 => 1476242393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3254657fdab96319752-36484226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fdab963567e7_19387962',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fdab963567e7_19387962')) {function content_57fdab963567e7_19387962($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>发表留言</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript">
      function logout()
      {
    	  if(confirm("是否退出登陆？")){
    		  window.location = "success.php?act=logout";
    	  }
      }
      function checkAdd()
      {
    	  if(document.frm.accpter.value == ""){
    		  alert("请输入接收人的姓名！");
    		  document.frm.accpter.focus();
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
    <a href="show.php">查看留言</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#" onclick="logout()">退出登陆</a>
    <br><br>
    <form name="frm" method="post" action="writer.php" onsubmit="return checkAdd()">
    <table border="1" align="left" bordercolor="blue">
      <tr>
        <td>接收人：</td>
        <td><input type="text" name="accpter" size="30"></td>
      </tr>
      <tr>
        <td>内容：</td>
        <td><textarea name="content" cols="30" rows="5"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="发表留言">
          &nbsp;&nbsp;&nbsp;
          <input type="reset" value="全部重写">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>










<?php }} ?>
