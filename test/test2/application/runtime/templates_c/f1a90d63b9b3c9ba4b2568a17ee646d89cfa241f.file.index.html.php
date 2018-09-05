<?php /* Smarty version Smarty-3.1.16, created on 2017-10-31 17:20:01
         compiled from "application/view/index.html" */ ?>
<?php /*%%SmartyHeaderCode:185253597658be2f27143099-95772146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1a90d63b9b3c9ba4b2568a17ee646d89cfa241f' => 
    array (
      0 => 'application/view/index.html',
      1 => 1509441599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185253597658be2f27143099-95772146',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58be2f27180e01_54540098',
  'variables' => 
  array (
    'APP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58be2f27180e01_54540098')) {function content_58be2f27180e01_54540098($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>小小笔记本</title>
</head>
<body>
<hr>
<form action="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Index/add" method="post">
	<table border=1 bordercolor='#00aaFF' width='400' height='200'>
		<tr>
			<td valign='top' width='400' height='200'>
				<table>
				<tr>
					<th><a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/index/select.html">查看留言</a></th>
				</tr>
				<tr>
					<th>昵称:</th>
					<th><input type="text" name="username" style="border:1px solid #8b8b8b"/></th>
				</tr>	
				<tr>
					<th>内容:</th>
					<th><textarea name="content" cols="20" rows="5"></textarea></th>
				</tr>
				<tr>
					<th><input type='submit' value='提交'/></th>
				</tr>											
				</table>
			</td>
		</tr>
	</table>
</form>
</body>
</html><?php }} ?>
