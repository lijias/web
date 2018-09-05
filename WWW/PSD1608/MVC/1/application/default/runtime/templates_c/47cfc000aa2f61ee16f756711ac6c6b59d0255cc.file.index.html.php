<?php /* Smarty version Smarty-3.1.16, created on 2016-11-15 15:33:26
         compiled from "application\view\index.html" */ ?>
<?php /*%%SmartyHeaderCode:16654582a66f430a196-22262711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47cfc000aa2f61ee16f756711ac6c6b59d0255cc' => 
    array (
      0 => 'application\\view\\index.html',
      1 => 1479195097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16654582a66f430a196-22262711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582a66f43842b3_22118996',
  'variables' => 
  array (
    'ROOT' => 0,
    'APP' => 0,
    'bbsInfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582a66f43842b3_22118996')) {function content_582a66f43842b3_22118996($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>网站首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/public/css/bbs.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
      function delBbs(bbsId)
      {
    	  if(confirm("是否删除该记录？")){
    		  window.location = "<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Index/delete/bbsId/"+bbsId;
    	  }
      }
      function updateBbs(bbsId)
      {
    	  window.location = "<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Update/index/bbsId/"+bbsId+".html";
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
          <input type="button" value="修改" onclick="updateBbs(<?php echo $_smarty_tpl->tpl_vars['v']->value['bbsId'];?>
)">
          <input type="button" value="删除" onclick="delBbs(<?php echo $_smarty_tpl->tpl_vars['v']->value['bbsId'];?>
)">
        </td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>









<?php }} ?>
