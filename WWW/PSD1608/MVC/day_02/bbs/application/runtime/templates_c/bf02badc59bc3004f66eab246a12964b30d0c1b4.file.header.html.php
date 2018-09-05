<?php /* Smarty version Smarty-3.1.16, created on 2016-11-15 09:39:57
         compiled from "application\view\header.html" */ ?>
<?php /*%%SmartyHeaderCode:12604582a676d0e4c89-96778537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf02badc59bc3004f66eab246a12964b30d0c1b4' => 
    array (
      0 => 'application\\view\\header.html',
      1 => 1479173976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12604582a676d0e4c89-96778537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'APP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582a676d0e4c83_86662270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582a676d0e4c83_86662270')) {function content_582a676d0e4c83_86662270($_smarty_tpl) {?><center>
  <a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Index/index.html">网站首页</a> | 
  <a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Add/index.html">添加记录</a> | 
  <a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Sql/index.html">执行sql语句</a> | 
  <a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Page/index.html">数据库分页</a>
</center>
<br><br><?php }} ?>
