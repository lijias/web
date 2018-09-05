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
      <a href="index.php?r=page1/index/currentPage/1">首页</a>&nbsp;&nbsp;&nbsp;
      <a href="index.php?r=page1/index/currentPage/<?php echo $currentPage-1?>">上一页</a>&nbsp;&nbsp;&nbsp;
      <a href="index.php?r=page1/index/currentPage/<?php echo $currentPage+1?>">下一页</a>&nbsp;&nbsp;&nbsp;
      <a href="index.php?r=page1/index/currentPage/<?php echo $totalPage?>">尾页</a>&nbsp;&nbsp;&nbsp;
    </td>
  </tr>
</table>










