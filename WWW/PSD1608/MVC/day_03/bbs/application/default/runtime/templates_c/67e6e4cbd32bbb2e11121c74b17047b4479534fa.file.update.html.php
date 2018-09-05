<?php /* Smarty version Smarty-3.1.16, created on 2016-11-15 15:45:30
         compiled from "application\view\update.html" */ ?>
<?php /*%%SmartyHeaderCode:22574582aba4c7cecd4-34999157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67e6e4cbd32bbb2e11121c74b17047b4479534fa' => 
    array (
      0 => 'application\\view\\update.html',
      1 => 1479195908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22574582aba4c7cecd4-34999157',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582aba4c80bd65_23342592',
  'variables' => 
  array (
    'ROOT' => 0,
    'APP' => 0,
    'bbsInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582aba4c80bd65_23342592')) {function content_582aba4c80bd65_23342592($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>修改记录</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/public/css/bbs.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
      function checkAdd()
      {
    	  if(document.frm.title.value == ""){
    		  alert("请输入标题！");
    		  document.frm.title.focus();
    		  return false;
    	  }
    	  else if(document.frm.clickTimes.value == ""){
    		  alert("请输入点击次数！");
    		  document.frm.clickTimes.focus();
    		  return false;
    	  }
      }
    </script>
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <form name="frm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Update/update/bbsId/<?php echo $_smarty_tpl->tpl_vars['bbsInfo']->value['bbsId'];?>
.html" onsubmit="return checkAdd()">
    <table border="1" align="center">
      <tr>
        <td>标题：</td>
        <td><input type="text" name="title" size="20" value="<?php echo $_smarty_tpl->tpl_vars['bbsInfo']->value['title'];?>
"></td>
      </tr>
      <tr>
        <td>点击次数：</td>
        <td><input type="text" name="clickTimes" size="20" value="<?php echo $_smarty_tpl->tpl_vars['bbsInfo']->value['clickTimes'];?>
"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="修改">
          &nbsp;&nbsp;&nbsp;
          <input type="reset" value="重置">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>









<?php }} ?>
