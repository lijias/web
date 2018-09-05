<?php /* Smarty version Smarty-3.1.16, created on 2016-10-11 09:57:37
         compiled from ".\templates\show.html" */ ?>
<?php /*%%SmartyHeaderCode:481257fc465d989689-34783138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282b9e763eb116b81bba4e3cb11d0b1a96bc71f9' => 
    array (
      0 => '.\\templates\\show.html',
      1 => 1476151056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '481257fc465d989689-34783138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fc465d989688_07315169',
  'variables' => 
  array (
    'wordInfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fc465d989688_07315169')) {function content_57fc465d989688_07315169($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>查看留言</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  </head>
  <body>
    <font color="pink" face="隶书" size="5">留言信息</font>
    <hr/>
    <a href="index.php">发表留言</a><br>
    <table border="1" align="left" width="600" bordercolor="blue">
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wordInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <tr>
        <td>昵称：<?php echo $_smarty_tpl->tpl_vars['v']->value['userName'];?>
</td>
        <td>留言时间：<?php echo $_smarty_tpl->tpl_vars['v']->value['wordTime'];?>
</td>
      </tr>
      <tr>
        <td colspan="2">留言内容：</td>
      </tr>
      <tr>
        <td colspan="2" height="50" valign="top"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>










<?php }} ?>
