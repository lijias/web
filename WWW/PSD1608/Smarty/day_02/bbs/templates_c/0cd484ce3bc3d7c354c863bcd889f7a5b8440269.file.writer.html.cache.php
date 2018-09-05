<?php /* Smarty version Smarty-3.1.16, created on 2016-10-11 15:28:06
         compiled from ".\templates\writer.html" */ ?>
<?php /*%%SmartyHeaderCode:392457fc94864c4b46-18832697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cd484ce3bc3d7c354c863bcd889f7a5b8440269' => 
    array (
      0 => '.\\templates\\writer.html',
      1 => 1476156045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '392457fc94864c4b46-18832697',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fc9486501bd8_94261975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fc9486501bd8_94261975')) {function content_57fc9486501bd8_94261975($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>发表文章</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bbs.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="kindeditor/kindeditor.js"></script>
    <script type="text/javascript">
      KindEditor.ready(function(e){
    	  e.create("[name=content]",{
    		  width:"700px",
    		  height:"300px"
    	  });
      });
    </script>
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
    <form name="frm" method="post" action="writer.php">
    <table border="1" align="center">
      <tr>
        <td>文章标题：</td>
        <td><input type="text" name="title" size="50"></td>
      </tr>
      <tr>
        <td colspan="2"><textarea name="content"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="发表文章">
          &nbsp;&nbsp;&nbsp;
          <input type="reset" value="全部重写">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>






<?php }} ?>
