<?php /* Smarty version Smarty-3.1.16, created on 2016-10-12 10:33:11
         compiled from ".\templates\success.html" */ ?>
<?php /*%%SmartyHeaderCode:1410357fda0e7487ab3-40630232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b42a513eaff292caaee9bdceabe8cd22655c0df5' => 
    array (
      0 => '.\\templates\\success.html',
      1 => 1476239324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1410357fda0e7487ab3-40630232',
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
  'unifunc' => 'content_57fda0e7487ab5_28366721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fda0e7487ab5_28366721')) {function content_57fda0e7487ab5_28366721($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>系统提示信息</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript">
      var index = 5;//时间
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
