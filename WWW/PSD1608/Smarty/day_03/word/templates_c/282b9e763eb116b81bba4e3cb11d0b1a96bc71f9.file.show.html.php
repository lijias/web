<?php /* Smarty version Smarty-3.1.16, created on 2016-10-12 11:47:48
         compiled from ".\templates\show.html" */ ?>
<?php /*%%SmartyHeaderCode:998857fda19fa037a5-58120086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282b9e763eb116b81bba4e3cb11d0b1a96bc71f9' => 
    array (
      0 => '.\\templates\\show.html',
      1 => 1476244060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '998857fda19fa037a5-58120086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fda19fa40838_86869128',
  'variables' => 
  array (
    'wordInfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fda19fa40838_86869128')) {function content_57fda19fa40838_86869128($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>所有留言</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript">
      function logout()
      {
    	  if(confirm("是否退出登陆？")){
    		  window.location = "success.php?act=logout";
    	  }
      }
    </script>
  </head>
  <body>
    <a href="writer.php">发表留言</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#" onclick="logout()">退出登陆</a>
    <br><br>
    <table border="1" align="left" bordercolor="blue">
      <tr>
        <td>发送人</td>
        <td>发送时间</td>
        <td>接收人</td>
        <td>信息内容</td>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wordInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['userName'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['wordTime'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['accpter'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>










<?php }} ?>
