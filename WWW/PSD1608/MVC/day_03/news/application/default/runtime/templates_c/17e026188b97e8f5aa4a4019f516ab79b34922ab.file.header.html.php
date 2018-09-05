<?php /* Smarty version Smarty-3.1.16, created on 2016-11-16 17:25:03
         compiled from "application\default\view\header.html" */ ?>
<?php /*%%SmartyHeaderCode:7032582c0e641f4ca7-69836516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17e026188b97e8f5aa4a4019f516ab79b34922ab' => 
    array (
      0 => 'application\\default\\view\\header.html',
      1 => 1479282458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7032582c0e641f4ca7-69836516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582c0e641f4ca4_79658658',
  'variables' => 
  array (
    'ROOT' => 0,
    'APP' => 0,
    'newsTypes' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c0e641f4ca4_79658658')) {function content_582c0e641f4ca4_79658658($_smarty_tpl) {?><div class="headDiv">
  <div class="headDiv1">
    <div class="headDiv10">www.<b>ttnewS</b>.com</div>
    <div class="headDiv11"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/public/images/banner17.gif" width="370" height="50"></div>
  </div>
  <div class="headDiv2">天天新闻网</div>
</div>
<!-- 导航菜单 -->
<div class="menuDiv">
  <a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Index/index.html" class="a">首页</a> | 
  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/NewsType/index/typeId/<?php echo $_smarty_tpl->tpl_vars['v']->value['typeId'];?>
.html" class="a"><?php echo $_smarty_tpl->tpl_vars['v']->value['typeName'];?>
</a> | 
  <?php } ?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Search/index.html" class="a">搜索</a>
</div>





<?php }} ?>
