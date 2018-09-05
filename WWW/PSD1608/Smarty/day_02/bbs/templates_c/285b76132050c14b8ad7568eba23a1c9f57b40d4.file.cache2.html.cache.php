<?php /* Smarty version Smarty-3.1.16, created on 2016-10-11 15:40:53
         compiled from ".\templates\cache2.html" */ ?>
<?php /*%%SmartyHeaderCode:1108457fc9747d59f85-64831244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '285b76132050c14b8ad7568eba23a1c9f57b40d4' => 
    array (
      0 => '.\\templates\\cache2.html',
      1 => 1476171621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1108457fc9747d59f85-64831244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fc9747d97011_18852581',
  'variables' => 
  array (
    't1' => 0,
    't2' => 1,
    't3' => 0,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fc9747d97011_18852581')) {function content_57fc9747d97011_18852581($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>局部不缓存</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
    <table border="1" align="center" width="600">
      <tr>
        <td>
          
          <br><?php echo $_smarty_tpl->tpl_vars['t1']->value;?>
<br>
          
          
          <br><?php echo '/*%%SmartyNocache:1108457fc9747d59f85-64831244%%*/<?php echo $_smarty_tpl->tpl_vars[\'t2\']->value;?>
/*/%%SmartyNocache:1108457fc9747d59f85-64831244%%*/';?>
<br>
          
          
          <br><?php echo $_smarty_tpl->tpl_vars['t3']->value;?>
<br><br>
          
        </td>
      </tr>
    </table>
  </body>
</html>






<?php }} ?>
