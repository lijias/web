<?php /* Smarty version Smarty-3.1.16, created on 2017-10-31 18:42:49
         compiled from "./templates/succes.html" */ ?>
<?php /*%%SmartyHeaderCode:97093344958be2e05a8b4b4-66940419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddfc728b1c74ad69ade20d93e6a45115febb7c5f' => 
    array (
      0 => './templates/succes.html',
      1 => 1509446565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97093344958be2e05a8b4b4-66940419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58be2e05ac6b51_02977805',
  'variables' => 
  array (
    'jumpUrl' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58be2e05ac6b51_02977805')) {function content_58be2e05ac6b51_02977805($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>提示</title>
    <script type="text/javascript">
        var index = 5;//时间
        function changeTime() {
            document.getElementById("timeSpan").innerHTML = index;
            index--;
            if (index < 0) {
                //时间到了，跳转页页
                window.location = "<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
";
            }
            else {
                //时间没到，继续倒计时
                window.setTimeout("changeTime()", 1000);
            }
        }
    </script>
</head>
<body onload="changeTime()">
<div style="position: absolute; left: 40%; top: 25%;">
    <h2><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
    页面将在 <span id="timeSpan">5</span> 秒钟内自动跳转！<br><br>
    如果没有跳转，<a href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
">请点击这里</a>。
</div>
</body>
</html><?php }} ?>
