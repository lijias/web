<script type="text/javascript">
  function delBbs(bbsId)
  {
	  if(confirm("是否删除该记录？"))
	  {
		  window.location = "index.php?r=index/delete/bbsId/"+bbsId;
	  }
  }
  function updateBbs(bbsId)
  {
	  window.location = "index.php?r=update/index/bbsId/"+bbsId;
  }
</script>
<table border="1" align="center" width="600">
  <tr>
    <td>编号</td>
    <td>标题</td>
    <td>点击次数</td>
    <td>时间</td>
    <td>操作</td>
  </tr>
<?php 
	foreach ($bbsInfo as $v)
	{
		echo "<tr>";
		echo "  <td>{$v["bbsId"]}</td>";
		echo "  <td>{$v["title"]}</td>";
		echo "  <td>{$v["clickTimes"]}</td>";
		echo "  <td>{$v["bbsTime"]}</td>";
		echo "  <td>";
		echo "    <input type='button' value='修改' onclick='updateBbs({$v["bbsId"]})'>";
		echo "    <input type='button' value='删除' onclick='delBbs({$v["bbsId"]})'>";
		echo "  </td>";
		echo "</tr>";
	}
?>
</table>









