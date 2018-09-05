<?php /* Smarty version Smarty-3.1.16, created on 2016-11-09 16:16:56
         compiled from ".\templates\showMails.html" */ ?>
<?php /*%%SmartyHeaderCode:48775822cb3cd97019-21186216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87ffb4a54458d71bd98411f878f2eca7db9817e9' => 
    array (
      0 => '.\\templates\\showMails.html',
      1 => 1478679414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48775822cb3cd97019-21186216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5822cb3ce4e1c5_19125266',
  'variables' => 
  array (
    'selectEmail' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5822cb3ce4e1c5_19125266')) {function content_5822cb3ce4e1c5_19125266($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="jquery/jquery-1.4.js"></script>
        <script type="text/javascript">
        function check(emailId){
            if(confirm("是否要删除该邮件!!")){
            	window.location =" showMails.php?emailId="+emailId;
                }
        }
        </script>
</head>
<body>
<center>所有邮件</center>
<table border= 1 align='center' width='700'>
<tr>
<th>邮件ID</th><th>邮件标题</th><th>邮件日期</th><th>是否删除</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selectEmail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['v']->value['emailId'];?>
</td>
<td><a href='email.php?emailId=<?php echo $_smarty_tpl->tpl_vars['v']->value['emailId'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
<td><?php echo $_smarty_tpl->tpl_vars['v']->value['dataandtime'];?>
</td>
<td><a href='#' onclick='check(<?php echo $_smarty_tpl->tpl_vars['v']->value['emailId'];?>
)'>删除</a></td>
</tr>
<?php } ?>
</table>
</body>
</html><?php }} ?>
