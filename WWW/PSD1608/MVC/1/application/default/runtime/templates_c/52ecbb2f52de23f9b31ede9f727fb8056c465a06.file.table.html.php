<?php /* Smarty version Smarty-3.1.16, created on 2016-11-16 10:30:35
         compiled from "application\view\table.html" */ ?>
<?php /*%%SmartyHeaderCode:20808582bc4cb100a64-58957458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52ecbb2f52de23f9b31ede9f727fb8056c465a06' => 
    array (
      0 => 'application\\view\\table.html',
      1 => 1479263385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20808582bc4cb100a64-58957458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROOT' => 0,
    'newsInfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582bc4cb13daf3_00447363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582bc4cb13daf3_00447363')) {function content_582bc4cb13daf3_00447363($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>多表查询</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/public/css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <table border="1" align="center" width="600">
      <tr>
        <td>新闻ID</td>
        <td>分类名称</td>
        <td>新闻标题</td>
        <td>发表时间</td>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['typeName'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dateandtime'];?>
</td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>









<?php }} ?>
