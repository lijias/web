<!DOCTYPE html>
<html>
  <head>
    <title>所有留言</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
  </head>
  <body>
    <a href="index.php?r=add/index">发表留言</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="index.php?r=login/index">退出系统</a>
    <br><br>
    <table border="1" align="left">
      <tr>
        <td>发送人</td>
        <td>发送时间</td>
        <td>接收人</td>
        <td>信息内容</td>
      </tr>
<?php 
	foreach ($wordInfo as $v)
	{
		echo "<tr>";
		echo "  <td>{$v["userName"]}</td>";
		echo "  <td>{$v["wordTime"]}</td>";
		echo "  <td>{$v["accpter"]}</td>";
		echo "  <td>{$v["content"]}</td>";
		echo "</tr>";
	}
?>
    </table>
  </body>
</html>










