<?php /* Smarty version Smarty-3.1.16, created on 2016-11-16 11:56:11
         compiled from "application\view\login.html" */ ?>
<?php /*%%SmartyHeaderCode:19288582bd7cb827b43-57291717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9ae5b48fa10ccb10e7be4b62cff2d218a964dad' => 
    array (
      0 => 'application\\view\\login.html',
      1 => 1479268551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19288582bd7cb827b43-57291717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582bd7cb864bd2_35637907',
  'variables' => 
  array (
    'ROOT' => 0,
    'APP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582bd7cb864bd2_35637907')) {function content_582bd7cb864bd2_35637907($_smarty_tpl) {?><!DOCTYPE html>
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
