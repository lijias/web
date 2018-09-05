<?php 
	header("content-type:text/html;charset=utf-8");
	include_once'dbio/BbsInfo.php';
	
	$bbsInfo = BbsInfo::getBbsInfo();//所有记录
?>
<!DOCTYPE html>
<html>
  <head>
    <title>数据库查询</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
  </head>
  <body>
    <table border="1" align="center" width="600">
      <tr>
        <td>编号</td>
        <td>标题</td>
        <td>点击次数</td>
        <td>时间</td>
      </tr>
<?php 
	foreach ($bbsInfo as $v)
	{
		echo "<tr>";
		echo "  <td>{$v["bbsId"]}</td>";
		echo "  <td>{$v["title"]}</td>";
		echo "  <td>{$v["clickTimes"]}</td>";
		echo "  <td>{$v["bbsTime"]}</td>";
		echo "</tr>";
	}
?>
    </table>
  </body>
</html>












