<?php /* Smarty version Smarty-3.1.16, created on 2016-11-12 16:42:17
         compiled from ".\templates\succes.html" */ ?>
<?php /*%%SmartyHeaderCode:1844658269272d59f80-07186403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '601da3113ae5f3aa9caaa63b373595fddfde9e93' => 
    array (
      0 => '.\\templates\\succes.html',
      1 => 1478940133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1844658269272d59f80-07186403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58269272d59f82_37079247',
  'variables' => 
  array (
    'jumpUrl' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58269272d59f82_37079247')) {function content_58269272d59f82_37079247($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
    <script type="text/javascript">
      var index = 5;//时间
      function changeTime()
      {
          document.getElementById("timeSpan").innerHTML = index;
          index--;
          if(index < 0)
          {
              //时间到了，跳转页页
              window.location = "<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
";
          }
          else
          {
              //时间没到，继续倒计时
              window.setTimeout("changeTime()",1000);
          }
      }
    </script>
</head>
<body onload="changeTime()">
<br><br><br><br><br><br><br><br><br>
      <table align='center' >
      	<tr>
      		<th>系统提示信息</th>
      	</tr>
      	 <tr>
      		<td><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 页面将在 <span id="timeSpan">5</span> 秒钟内自动跳转！</td>
      	</tr>
 		<tr>
      		<td>如果没有跳转，<a href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
">请点击这里</a>。</td>
      	</tr>
      </table>
</body>
</html><?php }} ?>
