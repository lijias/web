<?php /* Smarty version Smarty-3.1.16, created on 2016-11-16 09:49:33
         compiled from "application\view\page.html" */ ?>
<?php /*%%SmartyHeaderCode:6005582bb9deb41291-48832180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faf2d76686fe038cf5e0cac539bd72402ad624c5' => 
    array (
      0 => 'application\\view\\page.html',
      1 => 1479260966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6005582bb9deb41291-48832180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582bb9deb7e320_93260773',
  'variables' => 
  array (
    'ROOT' => 0,
    'bbsInfo' => 0,
    'v' => 0,
    'APP' => 0,
    'currentPage' => 0,
    'totalPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582bb9deb7e320_93260773')) {function content_582bb9deb7e320_93260773($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>数据库分页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/public/css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <table border="1" align="center" width="600">
      <tr>
        <td>编号</td>
        <td>标题</td>
        <td>点击次数</td>
        <td>时间</td>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bbsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bbsId'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['clickTimes'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bbsTime'];?>
</td>
      </tr>
      <?php } ?>
      <tr>
        <td colspan="4" align="center">
          <a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Page/index/currentPage/1.html">首页</a>&nbsp;&nbsp;&nbsp;
          <a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Page/index/currentPage/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
.html">上一页</a>&nbsp;&nbsp;&nbsp;
          <a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Page/index/currentPage/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
.html">下一页</a>&nbsp;&nbsp;&nbsp;
          <a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Page/index/currentPage/<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
.html">尾页</a>
        </td>
      </tr>
    </table>
  </body>
</html>









<?php }} ?>
