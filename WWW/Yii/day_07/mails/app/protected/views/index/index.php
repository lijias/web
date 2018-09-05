<!DOCTYPE html>
<html>
  <head>
    <title>所有邮件</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <script type="text/javascript">
      function delMail(mailId)
      {
          if(confirm("是否删除该邮件？"))
          {
              window.location = "index.php?r=index/delete/mailId/"+mailId;
          }
      }
    </script>
  </head>
  <body>
    <center><h2>所有邮件</h2></center>
    <br><br>
    <table border="1" align="center" width="600">
      <tr>
        <td>邮件ID</td>
        <td>邮件标题</td>
        <td>邮件日期</td>
        <td>是否删除</td>
      </tr>
<?php 
	foreach ($mailInfo as $v)
	{
		echo "<tr>";
		echo "  <td>{$v["mailId"]}</td>";
		echo "  <td><a href='index.php?r=show/index/mailId/{$v["mailId"]}'>{$v["title"]}</a></td>";
		echo "  <td>{$v["mailTime"]}</td>";
		echo "  <td><a href='#' onclick='delMail({$v["mailId"]})'>删除</a></td>";
		echo "</tr>";
	}
?>
    </table>
  </body>
</html>










