<?php /* Smarty version Smarty-3.1.16, created on 2016-10-11 11:58:21
         compiled from ".\templates\var.html" */ ?>
<?php /*%%SmartyHeaderCode:2765457fc5eb12dc6c9-43242835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2258888f4c05573ede9683c1e81aecf6442868a9' => 
    array (
      0 => '.\\templates\\var.html',
      1 => 1476158285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2765457fc5eb12dc6c9-43242835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fc5eb12dc6c0_03790593',
  'variables' => 
  array (
    'userName' => 0,
    'str1' => 0,
    'str2' => 0,
    'str3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fc5eb12dc6c0_03790593')) {function content_57fc5eb12dc6c0_03790593($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\php\\bbs\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html>
<html>
  <head>
    <title>变量调节器</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <table border="1" align="center" width="600">
      <tr>
        <td>
          
          <br><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userName']->value)===null||$tmp==='' ? "此处没有值" : $tmp);?>
<br>
          
          <br><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['str1']->value, ENT_QUOTES, 'UTF-8', true);?>
<br>
          
          <br><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str2']->value,15,"===");?>
<br>
          
          <br><?php echo nl2br($_smarty_tpl->tpl_vars['str3']->value);?>
<br>
          
          
        </td>
      </tr>
    </table>
  </body>
</html>






<?php }} ?>
