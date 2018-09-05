<?php /* Smarty version Smarty-3.1.16, created on 2017-10-31 17:36:37
         compiled from "./templates/mailContent.html" */ ?>
<?php /*%%SmartyHeaderCode:38985111959f8442511d282-70772571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e208ee48e39cee4cd394f0fafe3fb83d5fac77f0' => 
    array (
      0 => './templates/mailContent.html',
      1 => 1488855708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38985111959f8442511d282-70772571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selectOne' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f8442516f638_82970109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f8442516f638_82970109')) {function content_59f8442516f638_82970109($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>
<font size='5'><?php echo $_smarty_tpl->tpl_vars['selectOne']->value['title'];?>
</font>
<hr>
<?php echo $_smarty_tpl->tpl_vars['selectOne']->value['content'];?>

</body>
</html><?php }} ?>
