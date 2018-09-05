<?php /* Smarty version Smarty-3.1.16, created on 2016-11-11 10:34:46
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6595582436d7baeb94-93965001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1478831683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6595582436d7baeb94-93965001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582436d7bebc29_87026981',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582436d7bebc29_87026981')) {function content_582436d7bebc29_87026981($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>登录页</title>
<script src='jquery/jquery-1.4.js'></script>
<script>
 function check(){
	if(document.getElementById("username").value==""){
		alert("用户名不能为空");
		document.getElementById("username").focus();
		return false;
	}
	if(document.getElementById("password").value==""){
		alert("密码不能为空");
		document.getElementById("password").focus();
		return false;
	}
 }
</script>
</head>
<body>
<form action='index.php' method='post'  name='frm' onsubmit="return check()">
<table border=1 align='center' width=300 bordercolor='blue'>
	<tr>
 		<th colspan='2' height='50'>开发部内部留言板</th>
	</tr>
	<tr>
 		<td>用户名:</td>
 		<td><input type='text' name='username'  id='username'/></td>
	</tr>
	<tr>
 		<td >口令:</td>
 		<td><input type='password' name='password' id='password'/></td>
	</tr>
	<tr>
 		<td colspan='2' align='center'>
 			<input type='submit' value='登录'/>&nbsp;&nbsp;&nbsp;
 			<input type='reset' value='复位'/>
 		</td>
	</tr>
</table>
</form>
</body>
</html><?php }} ?>
