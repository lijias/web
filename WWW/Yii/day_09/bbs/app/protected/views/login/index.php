<form name="frm" method="post" action="index.php?r=login/login">
<table border="1" align="center">
  <tr>
    <td>登陆名称：</td>
    <td><input type="text" name="userName" size="20"></td>
  </tr>
  <tr>
    <td>登陆密码：</td>
    <td><input type="password" name="password" size="20"></td>
  </tr>
  <tr>
    <td>验证码：</td>
    <td><input type="text" name="checkCode" size="7"><img src="index.php?r=login/mycode" align="absmiddle"></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="登陆">
      &nbsp;&nbsp;&nbsp;
      <input type="reset" value="重置">
    </td>
  </tr>
</table>
</form>



