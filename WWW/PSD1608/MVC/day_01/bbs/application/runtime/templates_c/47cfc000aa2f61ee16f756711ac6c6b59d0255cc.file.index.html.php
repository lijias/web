<?php /* Smarty version Smarty-3.1.16, created on 2016-11-14 17:27:18
         compiled from "application\view\index.html" */ ?>
<?php /*%%SmartyHeaderCode:75985829837607a126-55818331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47cfc000aa2f61ee16f756711ac6c6b59d0255cc' => 
    array (
      0 => 'application\\view\\index.html',
      1 => 1476521786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75985829837607a126-55818331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROOT' => 0,
    'userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582983760b71b6_46698869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582983760b71b6_46698869')) {function content_582983760b71b6_46698869($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>网站首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/public/css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    Hello，大家好<br><br>
    <?php echo $_smarty_tpl->tpl_vars['userName']->value;?>

  </body>
</html>






<?php }} ?>
