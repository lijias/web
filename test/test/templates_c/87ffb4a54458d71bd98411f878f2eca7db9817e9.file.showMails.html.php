<?php /* Smarty version Smarty-3.1.16, created on 2016-11-12 11:43:08
         compiled from ".\templates\showMails.html" */ ?>
<?php /*%%SmartyHeaderCode:106175826872266ff36-34129378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87ffb4a54458d71bd98411f878f2eca7db9817e9' => 
    array (
      0 => '.\\templates\\showMails.html',
      1 => 1478922163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106175826872266ff36-34129378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582687226acfc1_63790944',
  'variables' => 
  array (
    'select' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582687226acfc1_63790944')) {function content_582687226acfc1_63790944($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>所有邮件</title>
<script>
 function con($id){
	 if(confirm("确定要删除这封邮件吗?")){
		 window.location = "showMails.php?id="+$id;
	 }
 }
</script>

</head>
<body>
<center><font size='5'>所有邮件</font></center>
<form action='showMails.php' method='post'>
	<table align='center' border='1' cellspacing='0' cellpadding='0'>
 		<tr>
 			<th>邮件ID</th><th>邮件标题</th><th>邮件日期</th><th>是否删除</th>
 		</tr>
 		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
 		 <tr>
 			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
</td>
 			<td><a href='mailContent.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
 			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['dataandtime'];?>
</td>
 			<td><a href='#' onclick='con(<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
)'>删除</a></td>
 		</tr>
 		<?php } ?>
	</table>
</form>
</body>
</html><?php }} ?>
