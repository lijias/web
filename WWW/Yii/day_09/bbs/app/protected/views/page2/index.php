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
  <tr>
    <td colspan="4" align="center">
      <?php echo $pageList?>
    </td>
  </tr>
</table>










