<?php /* Smarty version Smarty-3.1.16, created on 2016-11-16 09:40:59
         compiled from "application\view\sql.html" */ ?>
<?php /*%%SmartyHeaderCode:5215582bb627e97a74-36526396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30972eb87168e181a106d0786cc8d8ba1feaefe9' => 
    array (
      0 => 'application\\view\\sql.html',
      1 => 1479260351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5215582bb627e97a74-36526396',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582bb627f11b94_66616859',
  'variables' => 
  array (
    'ROOT' => 0,
    'APP' => 0,
    'bbsInfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582bb627f11b94_66616859')) {function content_582bb627f11b94_66616859($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>执行sql语句</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/public/css/bbs.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
      function delBbs(bbsId)
      {
    	  if(confirm("是否删除该记录？")){
    		  window.location = "<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Sql/delete/bbsId/"+bbsId;
    	  }
      }
    </script>
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <table border="1" align="center" width="600">
      <tr>
        <td>编号</td>
        <td>标题</td>
        <td>点击次数</td>
        <td>时间</td>
        <td>操作</td>
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
        <td>
          <input type="button" value="删除" onclick="delBbs(<?php echo $_smarty_tpl->tpl_vars['v']->value['bbsId'];?>
)">
        </td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>









<?php }} ?>
