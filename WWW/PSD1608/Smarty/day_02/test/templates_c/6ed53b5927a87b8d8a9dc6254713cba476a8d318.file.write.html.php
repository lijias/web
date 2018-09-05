<?php /* Smarty version Smarty-3.1.16, created on 2016-11-10 20:58:56
         compiled from ".\templates\write.html" */ ?>
<?php /*%%SmartyHeaderCode:807582442d2f05372-01156363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ed53b5927a87b8d8a9dc6254713cba476a8d318' => 
    array (
      0 => '.\\templates\\write.html',
      1 => 1478782726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '807582442d2f05372-01156363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_582442d3000003_31880237',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582442d3000003_31880237')) {function content_582442d3000003_31880237($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>发布留言</title>
<script src="jquery/jquery-1.4.js"></script>
<script type="text/javascript">
 function out(){
	 if(confirm("是否要退出!!")){
		 window.location = 'index.php';
	 }
 }
</script>
</head>
<body>
<a href='show.php'>查看信息</a>&nbsp;&nbsp;&nbsp;<a href='#' onclick="out()">退出系统</a>
<br><br>
信息发送:
<br>
<form action="write.php" method='post'>
	<table border='1' width=350>
		<tr>
			<td>接收人:</td><td><input type='text' name='name'/></td>
		</tr>
		<tr>
			<td>内容信息:</td><td><textarea rows="2px" cols="8px" name='content'></textarea></td>
		</tr>
		<tr>
			<td colspan=2 align='center'>
				<input type='submit' value='发送'/>&nbsp;&nbsp;&nbsp;
				<input type='reset' value='复位'/>
			</td>
		</tr>
	</table>
</form>
</body>
</html><?php }} ?>
