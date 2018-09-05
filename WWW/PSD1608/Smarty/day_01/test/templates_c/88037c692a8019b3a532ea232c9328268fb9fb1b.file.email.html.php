<?php /* Smarty version Smarty-3.1.16, created on 2016-11-09 15:31:44
         compiled from ".\templates\email.html" */ ?>
<?php /*%%SmartyHeaderCode:107625822d0048d24d7-64316112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88037c692a8019b3a532ea232c9328268fb9fb1b' => 
    array (
      0 => '.\\templates\\email.html',
      1 => 1478676702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107625822d0048d24d7-64316112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5822d00490f566_52952447',
  'variables' => 
  array (
    'selectEmail' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5822d00490f566_52952447')) {function content_5822d00490f566_52952447($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selectEmail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

<hr>
<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>

<?php } ?>
</body>
</html><?php }} ?>
