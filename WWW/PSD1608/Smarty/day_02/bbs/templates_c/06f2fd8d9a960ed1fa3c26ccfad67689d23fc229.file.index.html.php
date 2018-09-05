<?php /* Smarty version Smarty-3.1.16, created on 2016-10-11 10:49:05
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:402457fc4c6bca2dd1-97356608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1476154143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '402457fc4c6bca2dd1-97356608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fc4c6bca2dd3_11752055',
  'variables' => 
  array (
    'bbsInfo' => 0,
    'v' => 0,
    'totalPage' => 0,
    'i' => 0,
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fc4c6bca2dd3_11752055')) {function content_57fc4c6bca2dd3_11752055($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>网站首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bbs.css" type="text/css" rel="stylesheet" />
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
          <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['totalPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['totalPage']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['currentPage']->value) {?>
              [<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]&nbsp;&nbsp;&nbsp;
            <?php } else { ?>
              <a href="index.php?currentPage=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]</a>&nbsp;&nbsp;&nbsp;
            <?php }?>
          <?php }} ?>
        </td>
      </tr>
      <tr>
        <td colspan="4" align="center">
          <?php if ($_smarty_tpl->tpl_vars['currentPage']->value==1) {?>
            首页&nbsp;&nbsp;&nbsp;上一页&nbsp;&nbsp;&nbsp;
          <?php } else { ?>
          <a href="index.php?currentPage=1">首页</a>&nbsp;&nbsp;&nbsp;
          <a href="index.php?currentPage=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
">上一页</a>&nbsp;&nbsp;&nbsp;
          <?php }?>
          
          <?php if ($_smarty_tpl->tpl_vars['currentPage']->value==$_smarty_tpl->tpl_vars['totalPage']->value) {?>
          下一页&nbsp;&nbsp;&nbsp;尾页&nbsp;&nbsp;&nbsp;
          <?php } else { ?>
          <a href="index.php?currentPage=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
">下一页</a>&nbsp;&nbsp;&nbsp;
          <a href="index.php?currentPage=<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
">尾页</a>&nbsp;&nbsp;&nbsp;
          <?php }?>
        </td>
      </tr>
    </table>
  </body>
</html>






<?php }} ?>
