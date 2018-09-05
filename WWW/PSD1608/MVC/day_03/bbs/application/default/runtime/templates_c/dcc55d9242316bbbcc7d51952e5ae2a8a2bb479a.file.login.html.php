<?php /* Smarty version Smarty-3.1.16, created on 2016-11-16 17:39:30
         compiled from "application\default\view\login.html" */ ?>
<?php /*%%SmartyHeaderCode:7619582bff88864bd4-78424558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcc55d9242316bbbcc7d51952e5ae2a8a2bb479a' => 
    array (
      0 => 'application\\default\\view\\login.html',
      1 => 1479268552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7619582bff88864bd4-78424558',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582bff88864bd6_44518890',
  'variables' => 
  array (
    'ROOT' => 0,
    'APP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582bff88864bd6_44518890')) {function content_582bff88864bd6_44518890($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>会员登陆</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/public/css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <form name="frm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Login/login.html">
    <table border="1" align="center">
      <tr>
        <td>登陆名称：</td>
        <td><input type="text" name="userName" size="20"></td>
      </tr>
      <tr>
        <td>登陆密码：</td>
        <td><input type="password" name="password" size="20"></td>
      </tr>
      <tr>
        <td>验证码：</td>
        <td><input type="text" name="checkCode" size="8"><img src="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Login/hello" align="absmiddle"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="登陆">
          &nbsp;&nbsp;&nbsp;
          <input type="reset" value="重置">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>









<?php }} ?>
