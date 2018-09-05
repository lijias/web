<?php /* Smarty version Smarty-3.1.16, created on 2017-10-31 18:43:07
         compiled from "./templates/showMails.html" */ ?>
<?php /*%%SmartyHeaderCode:67044766159f843fd478a70-52006689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b125a1e261b9393c6a4f3a7836c1bb0786d94d5c' => 
    array (
      0 => './templates/showMails.html',
      1 => 1509446584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67044766159f843fd478a70-52006689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f843fd52ce46_56565448',
  'variables' => 
  array (
    'del_tis' => 0,
    'select' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f843fd52ce46_56565448')) {function content_59f843fd52ce46_56565448($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>所有邮件</title>
    <script>
        function con($id) {
            if (confirm("确定要删除这封邮件吗?")) {
                window.location = "showMails.php?id=" + $id + '&del_tis=1';
            }
        }

        var del_tis = '<?php echo $_smarty_tpl->tpl_vars['del_tis']->value;?>
';

        if (del_tis || del_tis === '0') {
            if (del_tis == 1) {
                window.location = "succes.php?act=del&rst=1";
            } else {
                window.location = "succes.php?act=del&rst=0";
            }
        }
    </script>

</head>
<body>
<div style="position: absolute; left: 40%; top: 25%;">
    <center><font size='5'>所有邮件</font></center>
    <form action='showMails.php' method='post'>
        <table align='center' border='1' cellspacing='0' cellpadding='0'>
            <tr>
                <th>邮件ID</th>
                <th>邮件标题</th>
                <th>邮件日期</th>
                <th>是否删除</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
</td>
                <td><a href='mailContent.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
'><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dataandtime'];?>
</td>
                <td><a href='#' onclick='con("<?php echo $_smarty_tpl->tpl_vars['v']->value['ID'];?>
")'>删除</a></td>
            </tr>
            <?php } ?>
        </table>
    </form>
</div>
</body>
</html><?php }} ?>
