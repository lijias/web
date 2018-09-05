<?php /* Smarty version Smarty-3.1.16, created on 2016-11-12 11:47:37
         compiled from ".\templates\mailContent.html" */ ?>
<?php /*%%SmartyHeaderCode:2695658268c850f4241-83638096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '344b467b2a067b1764d89bd78a553d17ba12d8ea' => 
    array (
      0 => '.\\templates\\mailContent.html',
      1 => 1478922454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2695658268c850f4241-83638096',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58268c850f4245_74897482',
  'variables' => 
  array (
    'selectOne' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58268c850f4245_74897482')) {function content_58268c850f4245_74897482($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
