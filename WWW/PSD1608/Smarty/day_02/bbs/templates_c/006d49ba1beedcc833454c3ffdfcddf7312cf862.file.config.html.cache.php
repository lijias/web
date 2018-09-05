<?php /* Smarty version Smarty-3.1.16, created on 2016-10-11 15:28:04
         compiled from ".\templates\config.html" */ ?>
<?php /*%%SmartyHeaderCode:3065757fc948481b324-90578557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '006d49ba1beedcc833454c3ffdfcddf7312cf862' => 
    array (
      0 => '.\\templates\\config.html',
      1 => 1476166959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3065757fc948481b324-90578557',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fc94848583b2_98542716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fc94848583b2_98542716')) {function content_57fc94848583b2_98542716($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("hello.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>configs用法</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
    <table border="1" align="center" width="600">
      <tr>
        <td>
          
          <br>公司名称：<?php echo $_smarty_tpl->getConfigVariable('companyName');?>
<br>
          
          <br>联系人：<?php echo $_smarty_tpl->getConfigVariable('person');?>
<br>
          
          <br>联系电话：<?php echo $_smarty_tpl->getConfigVariable('tel');?>
<br><br>
          
        </td>
      </tr>
    </table>
  </body>
</html>






<?php }} ?>
