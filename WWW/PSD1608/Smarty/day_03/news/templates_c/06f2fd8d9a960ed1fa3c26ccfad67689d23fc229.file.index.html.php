<?php /* Smarty version Smarty-3.1.16, created on 2016-11-11 15:37:20
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:74557fdd4973567e6-03290103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1478849836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74557fdd4973567e6-03290103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fdd4973567e2_92703715',
  'variables' => 
  array (
    'newsTypes' => 0,
    'v' => 0,
    'vv' => 0,
    'hotNews' => 0,
    'allNews' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fdd4973567e2_92703715')) {function content_57fdd4973567e2_92703715($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\www\\PSD1608\\PSD1608\\Smarty\\day_03\\news\\smarty\\plugins\\modifier.truncate.php';
?><html>
  <head>
    <title>天天新闻网</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="css/news.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <!-- 包含头 -->
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<!-- 正文内容 -->
	<div class="mainDiv clear">
	  <!-- 左侧 -->
	  <div class="leftDiv">
	    <!-- 登陆 -->
	    <div class="loginDiv">
	      <div class="loginDiv1">会员登陆</div>
	      <div class="loginDiv2 clear">
	        <div class="loginDiv20">用户名</div>
	        <div class="loginDiv21"><input type="text" name="userName" value="admin" class="txt1">*</div>
	      </div>
	      <div class="loginDiv2 clear">
	        <div class="loginDiv20">密码</div>
	        <div class="loginDiv21"><input type="password" name="password" value="123" class="txt1">*</div>
	      </div>
	      <div class="loginDiv2 clear">
	        <div class="loginDiv20">验证码</div>
	        <div class="loginDiv21"><input type="text" name="checkCode" size="8" maxlength="4"><img id="myImg" src="" align="absmiddle"></div>
	      </div>
	      <div class="loginDiv2 clear">
	        <div class="loginDiv20">&nbsp;</div>
	        <div class="loginDiv21"><input type="submit" value="登陆"></div>
	      </div>
	    </div>
	    <!-- 一个分类带两条新闻 -->
	    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	    <div class="twoNews">
	      <div class="twoNews1">&nbsp;<a href="newstype.php?typeId=<?php echo $_smarty_tpl->tpl_vars['v']->value['typeId'];?>
" class="a"><?php echo $_smarty_tpl->tpl_vars['v']->value['typeName'];?>
</a></div>
	      <div class="twoNews2"><a href="newstype.php?typeId=<?php echo $_smarty_tpl->tpl_vars['v']->value['typeId'];?>
" class="a">更多</a>&nbsp;</div>
	    </div>
	    <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
	    <div class="twoNews3"><img src="images/makealltop.gif"><a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['vv']->value['articleId'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['vv']->value['title'],16);?>
</a></div>
	    <?php } ?>
	    <?php } ?>
	  </div>
	  <!-- 右侧 -->
	  <div class="rightDiv">
	    <!-- 热点要闻 -->
	    <div class="hotNews">热点要闻</div>
	    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotNews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	    <div class="hotNews1">
	      [<a href="newstype.php?typeId=<?php echo $_smarty_tpl->tpl_vars['v']->value['typeId'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['typeName'];?>
</a>] <a href="news.php?articleId=<?php echo $_smarty_tpl->tpl_vars['v']->value['articleId'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['v']->value['dateandtime'];?>
 <img src="images/new1.gif">
	    </div>
	    <?php } ?>
	    
	    <!-- 新闻分类导航 -->
	    <div class="hotNews">新闻分类导航</div>
	    <div class="newsDh">
	      <div class="newsDh1"><span class="newsCount">新闻总数：</span></div>
	      <div class="newsDh2"><?php echo $_smarty_tpl->tpl_vars['allNews']->value;?>
</div>
	      <div class="newsDh3">&nbsp;</div>
	    </div>
	    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	    <div class="newsDh">
	      <div class="newsDh1"><a href="newstype.php?typeId=<?php echo $_smarty_tpl->tpl_vars['v']->value['typeId'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['typeName'];?>
：</a></div>
	      <div class="newsDh2"><?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
</div>
	      <div class="newsDh3"><a href="newstype.php?typeId=<?php echo $_smarty_tpl->tpl_vars['v']->value['typeId'];?>
"><img src="images/sch.gif" border="0" class="goImg"></a></div>
	    </div>
	    <?php } ?>
	  </div>
	</div>
    
    
    <!-- 网页脚 -->
    <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </body>
</html>




<?php }} ?>
