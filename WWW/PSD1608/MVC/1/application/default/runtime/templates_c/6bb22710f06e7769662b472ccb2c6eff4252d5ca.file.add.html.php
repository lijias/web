<?php /* Smarty version Smarty-3.1.16, created on 2016-11-15 11:54:39
         compiled from "application\view\add.html" */ ?>
<?php /*%%SmartyHeaderCode:24065582a857319be34-37462333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb22710f06e7769662b472ccb2c6eff4252d5ca' => 
    array (
      0 => 'application\\view\\add.html',
      1 => 1479182074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24065582a857319be34-37462333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582a85731d8ec9_20647397',
  'variables' => 
  array (
    'ROOT' => 0,
    'APP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582a85731d8ec9_20647397')) {function content_582a85731d8ec9_20647397($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>添加记录</title>
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
/Add/add.html" onsubmit="return checkAdd()">
    <table border="1" align="center">
      <tr>
        <td>标题：</td>
        <td><input type="text" name="title" size="20"></td>
      </tr>
      <tr>
        <td>点击次数：</td>
        <td><input type="text" name="clickTimes" size="20"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="添加">
          &nbsp;&nbsp;&nbsp;
          <input type="reset" value="重置">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>









<?php }} ?>
