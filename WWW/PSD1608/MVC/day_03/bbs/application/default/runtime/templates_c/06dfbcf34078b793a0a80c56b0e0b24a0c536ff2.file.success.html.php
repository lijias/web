<?php /* Smarty version Smarty-3.1.16, created on 2016-11-16 11:38:50
         compiled from "application\view\success.html" */ ?>
<?php /*%%SmartyHeaderCode:15329582bd4cada3839-26223016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06dfbcf34078b793a0a80c56b0e0b24a0c536ff2' => 
    array (
      0 => 'application\\view\\success.html',
      1 => 1479267468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15329582bd4cada3839-26223016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROOT' => 0,
    'jumpUrl' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582bd4cade08c6_53068739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582bd4cade08c6_53068739')) {function content_582bd4cade08c6_53068739($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>系统提示信息</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/public/css/bbs.css" type="text/css" rel="stylesheet" />
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
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <table border="1" align="center" width="600">
      <tr>
        <td><b>系统提示信息</b></td>
      </tr>
      <tr>
        <td align="center">
          <br><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 页面将在 <span id="timeSpan">5</span> 秒钟内自动跳转！<br>
          <br>如果没有自动跳转，<a href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
">请点击这里</a>。<br><br>
        </td>
      </tr>
    </table>
  </body>
</html>









<?php }} ?>
