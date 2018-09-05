<?php /* Smarty version Smarty-3.1.16, created on 2016-11-09 20:24:35
         compiled from ".\templates\select.html" */ ?>
<?php /*%%SmartyHeaderCode:859058230e94c28cb5-10199035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d9da50e922ff7c6d02c4361fc8b1ceaf54264ce' => 
    array (
      0 => '.\\templates\\select.html',
      1 => 1478694272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '859058230e94c28cb5-10199035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58230e94c28cb8_91367667',
  'variables' => 
  array (
    'select' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58230e94c28cb8_91367667')) {function content_58230e94c28cb8_91367667($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
留言信息
<hr>
<a href='index.php'>返回留言页面</a>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<table border='1' width='500' cellpadding='0' cellspacing='0' bordercolor='#0cf'>
<tr>
<td>昵称:<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
<td>留言时间:<?php echo $_smarty_tpl->tpl_vars['v']->value['Mytime'];?>
</td>
</tr>
<tr>
<td colspan=2>留言内容:</td>
</tr>
<tr>
<td colspan=2 height=100 valign='top'><?php echo $_smarty_tpl->tpl_vars['v']->value['leaveword'];?>
</td>
</tr>
<?php } ?>
</table>
</body>
</html><?php }} ?>
