<?php /* Smarty version Smarty-3.1.16, created on 2016-11-16 17:50:13
         compiled from "application\default\view\newstype.html" */ ?>
<?php /*%%SmartyHeaderCode:12003582c1c110498b0-64034787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '206cf4e64667dcd8149a3262bc4469624d5fadb0' => 
    array (
      0 => 'application\\default\\view\\newstype.html',
      1 => 1479286056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12003582c1c110498b0-64034787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582c1c11086941_72010003',
  'variables' => 
  array (
    'ROOT' => 0,
    'APP' => 0,
    'newsType' => 0,
    'newsInfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c1c11086941_72010003')) {function content_582c1c11086941_72010003($_smarty_tpl) {?><html>
  <head>
    <title>天天新闻网</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/public/css/news.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <!-- 网站头 -->
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<!-- 正文内容 -->
	<div class="mainDiv clear">
	  <div class="newsTypeDiv">
	    <div class="newsTypeDiv1">&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/Index/index.html" class="a">新闻主页</a> &raquo; <?php echo $_smarty_tpl->tpl_vars['newsType']->value['typeName'];?>
</div>
	    <div class="newsTypeDiv2">本类共有 <?php echo $_smarty_tpl->tpl_vars['newsType']->value['articleNums'];?>
 条新闻</div>
	  </div>
	  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	  <div class="newsTypeDiv3">
	    <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/public/images/makealltop.gif"><a href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/News/index/articleId/<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
	  </div>
	  <?php } ?>
	  
	  
	  <div class="newsTypeDiv3">&nbsp;</div>
	</div>
    
    
    <!-- 网页脚 -->
    <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </body>
</html><?php }} ?>
