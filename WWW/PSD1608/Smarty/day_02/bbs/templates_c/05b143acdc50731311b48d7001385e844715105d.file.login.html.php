<?php /* Smarty version Smarty-3.1.16, created on 2016-10-11 10:58:07
         compiled from ".\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1166357fc543cbebc28-21726760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b143acdc50731311b48d7001385e844715105d' => 
    array (
      0 => '.\\templates\\login.html',
      1 => 1476154680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1166357fc543cbebc28-21726760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fc543cc28cb5_80812600',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fc543cc28cb5_80812600')) {function content_57fc543cc28cb5_80812600($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>会员登陆</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <form name="frm" method="post" action="login.php">
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
        <td><input type="text" name="checkCode" size="10"><img src="image.php" align="absmiddle"></td>
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
