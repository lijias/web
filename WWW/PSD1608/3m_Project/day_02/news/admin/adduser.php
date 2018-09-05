<?php 
header("content-type:text/html;charset=utf-8");
include_once 'onlogin.php';
include_once '../dbio/Manager.php';

if ($_POST) {
	$result=Manager::insertAdmin($_POST['userName'], $_POST['password'],  $_POST['userType']);
	header("location:success.php?act=adduser&rst={$result}");
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../css/admin.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="../jquery/jquery-1.4.js"></script>
    <script type="text/javascript">
      function checkAdd()
      {
    	  $("#userTd").html("");
    	  $("#pwdTd").html("");
    	  $("#checkPwdTd").html("");
    	  $("#userTypeTd").html("");
          if(document.frm.userName.value == "")
          {
              $("#userTd").html("请输入用户名！");
              document.frm.userName.focus();
              return false;
          }
          else if(document.frm.password.value == "")
          {
              $("#pwdTd").html("请输入密码！");
              document.frm.password.focus();
              return false;
          }
          else if(document.frm.checkPwd.value != document.frm.password.value)
          {
              $("#checkPwdTd").html("两次输入的密码不一致！");
              document.frm.checkPwd.focus();
              return false;
          }
          else if(document.frm.userType.value == "")
          {
              $("#userTypeTd").html("请输入用户类型！");
              document.frm.userType.focus();
              return false;
          }
      }
    </script>
  </head>
  <body>
    <!-- 网站的头 -->
    <?php include_once 'header.php';?>
     <!-- 当前位置 -->
    <div class="locationDiv">&nbsp;: 后台管理 : 添加用户</div>
    <!-- 正文内容 -->
    <div class="mainDiv clear">
      <!-- 左侧树状列表 -->
      <div class="leftDiv"><?php include_once 'left.php';?></div>

      <!-- 右侧页面内容 -->
      <div class="rightDiv">
        <br><br><br><br>
        <form name="frm" method="post" action="adduser.php" onsubmit="return checkAdd()">
        <table border="0" align="center" width="470" bgcolor="#6599FF">
          <tr>
            <td align="left" width="100">用户名</td>
            <td width="170"><input type="text" name="userName" size="20"></td>
            <td id="userTd" style="color:red;" width="170" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">密码</td>
            <td><input type="password" name="password" size="20"></td>
            <td id="pwdTd" style="color:red;" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">确认密码</td>
            <td><input type="password" name="checkPwd" size="20"></td>
            <td id="checkPwdTd" style="color:red;" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">用户类型</td>
            <td><input type="text" name="userType" size="20"></td>
            <td id="userTypeTd" style="color:red;" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">备注</td>
            <td><input type="text" name="remark" size="20"></td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="center">
              <input type="submit" value="添加" class="btn1">
              &nbsp;&nbsp;&nbsp;
              <input type="reset" value="取消" class="btn1">
            </td>
            <td>&nbsp;</td>
          </tr>
        </table>
        </form>
      </div>
    </div>
  </body>
</html>

















