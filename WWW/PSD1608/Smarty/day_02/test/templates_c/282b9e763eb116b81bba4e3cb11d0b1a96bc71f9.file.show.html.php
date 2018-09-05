<?php /* Smarty version Smarty-3.1.16, created on 2016-11-10 20:55:04
         compiled from ".\templates\show.html" */ ?>
<?php /*%%SmartyHeaderCode:314582441328d24d8-53377542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282b9e763eb116b81bba4e3cb11d0b1a96bc71f9' => 
    array (
      0 => '.\\templates\\show.html',
      1 => 1478782500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314582441328d24d8-53377542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5824413290f563_11941652',
  'variables' => 
  array (
    'result' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5824413290f563_11941652')) {function content_5824413290f563_11941652($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>查看留言</title>
<script src='jquery/jquery-1.4.js'></script>
<script>
 function out(){
	 if(confirm("是否要退出!!")){
     	window.location =" index.php";
         }
 }
</script>
</head>
<body>
<a href='write.php'>发布信息</a>&nbsp;&nbsp;&nbsp;<a href='#' id="out" onclick="out()">退出系统</a>
<br/><br/>
留言信息:
<br/><br/>
<table border=1 cellspacing=0 cellpadding=0 width=700 bordercolor='blue'>
	<tr>
		<th>发送人</th><th>发送时间</th><th>接收人</th><th>信息内容</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	<tr>
 		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
 		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['dateandtime'];?>
</td>
 		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
 		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td>
	</tr>
	<?php } ?>
</table>
</body>
</html><?php }} ?>
