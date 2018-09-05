<?php /* Smarty version Smarty-3.1.16, created on 2016-11-16 10:27:19
         compiled from "application\view\index.html" */ ?>
<?php /*%%SmartyHeaderCode:11875582ada686ea056-30432707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47cfc000aa2f61ee16f756711ac6c6b59d0255cc' => 
    array (
      0 => 'application\\view\\index.html',
      1 => 1479263237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11875582ada686ea056-30432707',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582ada687270e2_89737358',
  'variables' => 
  array (
    'APP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582ada687270e2_89737358')) {function content_582ada687270e2_89737358($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<font size='5'>小小笔记本</font>
<hr>
<form action="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Index/add.html" method="post">
	<table border=1 bordercolor='blue' width='400' height='200'>
		<tr>
			<td valign='top' width='400' height='200'>
				<table>
				<tr>
					<td colspan=2><a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Select/select.html">查看留言</a></td>
				</tr>
				<tr>
					<td>昵称:    <input type="text" name="username"/></td>
				</tr>	
				<tr>
					<td>内容:</td>
				</tr>
				<tr>
					<td align="center"><textarea name="content"></textarea></td>
				</tr>						
				</table>
			</td>
		</tr>
	</table>
</form>
</body>
</html><?php }} ?>
