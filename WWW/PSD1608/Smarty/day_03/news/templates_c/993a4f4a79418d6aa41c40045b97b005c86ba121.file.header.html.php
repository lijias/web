<?php /* Smarty version Smarty-3.1.16, created on 2016-11-11 14:56:41
         compiled from ".\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:3164857fdd5231312d9-42263414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993a4f4a79418d6aa41c40045b97b005c86ba121' => 
    array (
      0 => '.\\templates\\header.html',
      1 => 1476253450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3164857fdd5231312d9-42263414',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fdd5231312d7_10506861',
  'variables' => 
  array (
    'newsTypes' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fdd5231312d7_10506861')) {function content_57fdd5231312d7_10506861($_smarty_tpl) {?><!-- 网站头 -->
<div class="headDiv">
  <div class="headDiv1">
    <div class="headDiv10">www.<b>ttnewS</b>.com</div>
    <div class="headDiv11"><img src="images/banner17.gif" width="370" height="50"></div>
  </div>
  <div class="headDiv2">天天新闻网</div>
</div>
<!-- 导航菜单 -->
<div class="menuDiv">
  <a href="index.php" class="a">首页</a> | 
  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
  <a href="newstype.php?typeId=<?php echo $_smarty_tpl->tpl_vars['v']->value['typeId'];?>
" class="a"><?php echo $_smarty_tpl->tpl_vars['v']->value['typeName'];?>
</a> | 
  <?php } ?>
  <a href="search.php" class="a">搜索</a>
</div>






<?php }} ?>
