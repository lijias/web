<?php /* Smarty version Smarty-3.1.16, created on 2016-11-10 09:53:29
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:233095822f3e7aba957-62352089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1478741020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233095822f3e7aba957-62352089',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5822f3e7af79e5_74929139',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5822f3e7af79e5_74929139')) {function content_5822f3e7af79e5_74929139($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>小小留言本</title>
</head>
<body>
<h1>小小留言本</h1>
<hr>
<form action="index.php" method="POST">
<a href='select.php'>查看留言</a><br/><br/>
昵称: <input type="text" name="username"/><span style="color:red;">昵称长度为2~16</span><br/><br/>
留言:<br/>
<textarea name="leaveword" ></textarea><span style="color:red;">留言长度为2~200</span><br/><br/>
<input type="submit" value="提交"/>&nbsp;&nbsp;&nbsp;<input type='reset' value='重写'/>
</form>
</body>
</html><?php }} ?>
