<?php /* Smarty version Smarty-3.1.16, created on 2017-10-31 16:59:52
         compiled from "application/view/search.html" */ ?>
<?php /*%%SmartyHeaderCode:57283270459f8304ee2d292-29125496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51d73a9218afd8633f440201e1a1438013aabea1' => 
    array (
      0 => 'application/view/search.html',
      1 => 1509440390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57283270459f8304ee2d292-29125496',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f8304ee9c707_58491577',
  'variables' => 
  array (
    'APP' => 0,
    'result' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f8304ee9c707_58491577')) {function content_59f8304ee9c707_58491577($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>历史留言</title>
</head>
<body>
<a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/index/index">返回留言页面</a>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <table border=1 width="500" cellspacing=0 cellpadding=0 bordercolor="#0cf">
        <tr>
            <td width="150">昵称: <?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td><td>留言时间: <?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</td>
        </tr>
        <tr>
            <td colspan=2>留言内容:</td>
        </tr>
        <tr>
            <td colspan=2 height="100" valign="top"><?php echo $_smarty_tpl->tpl_vars['v']->value['leaveword'];?>
</td>
        </tr>
    </table>
<?php } ?>
</body>
</html><?php }} ?>
