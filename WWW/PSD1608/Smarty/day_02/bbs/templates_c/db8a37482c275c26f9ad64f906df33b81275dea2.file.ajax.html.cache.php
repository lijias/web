<?php /* Smarty version Smarty-3.1.16, created on 2016-10-11 15:28:05
         compiled from ".\templates\ajax.html" */ ?>
<?php /*%%SmartyHeaderCode:2013557fc9485af79e8-31400762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db8a37482c275c26f9ad64f906df33b81275dea2' => 
    array (
      0 => '.\\templates\\ajax.html',
      1 => 1476156780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2013557fc9485af79e8-31400762',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fc9485b34a77_48828502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fc9485b34a77_48828502')) {function content_57fc9485b34a77_48828502($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>ajax功能</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bbs.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="jquery/jquery-1.4.js"></script>
    <script type="text/javascript">
      function showCity()
      {
    	  $.ajax({
    		  type:"post",
    		  url:"check.php",
    		  data:"cityCode="+$("#cityCode").val(),
    		  dataType:"html",
    		  success:function(msg){
    			  $("#mySpan").html(msg);
    		  }
    	  });
      }
    </script>
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
    <table border="1" align="center" width="600">
      <tr>
        <td>
          请输入：<input type="text" id="cityCode" size="20">
          <input type="button" value="显示" onclick="showCity()">
          <span id="mySpan"></span>
        </td>
      </tr>
    </table>
  </body>
</html>






<?php }} ?>
