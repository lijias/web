<?php /* Smarty version Smarty-3.1.16, created on 2017-10-31 16:01:38
         compiled from "application/core/success.html" */ ?>
<?php /*%%SmartyHeaderCode:70475052759f82de2c64874-43518963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b94315cdb1f604c4e0a8541828968fadb7d586a4' => 
    array (
      0 => 'application/core/success.html',
      1 => 1488855708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70475052759f82de2c64874-43518963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jumpUrl' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f82de2d02651_58006783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f82de2d02651_58006783')) {function content_59f82de2d02651_58006783($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>系统提示信息</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript">
      var index = 5;
      function changeTime()
      {
    	  document.getElementById("timeSpan").innerHTML = index;
    	  index--;
    	  if(index < 0){
    		  window.location = "<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
";
    	  }
    	  else{
    		  window.setTimeout("changeTime()",1000);
    	  }
      }
    </script>
  </head>
  <body onload="changeTime()">
    <h2><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
    页面将在 <span id="timeSpan">5</span> 秒钟内自动跳转！<br><br>
    如果没有跳转，<a href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
">请点击这里</a>。
  </body>
</html>









<?php }} ?>
