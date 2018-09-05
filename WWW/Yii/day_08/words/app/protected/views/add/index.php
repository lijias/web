<!DOCTYPE html>
<html>
  <head>
    <title>发表留言</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
  </head>
  <body>
    <a href="index.php?r=show/index">查看留言</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="index.php?r=login/index">退出系统</a>
    <br><br>
    <form name="frm" method="post" action="index.php?r=add/add">
    <table border="1" align="left">
      <tr>
        <td>接收人：</td>
        <td><input type="text" name="accpter" size="20"></td>
      </tr>
      <tr>
        <td>信息内容：</td>
        <td><textarea name="content" cols="30" rows="5"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="发表">
          &nbsp;&nbsp;&nbsp;
          <input type="reset" value="重置">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>










