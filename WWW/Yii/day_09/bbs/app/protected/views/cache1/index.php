<table border="1" align="center" width="600">
  <tr>
    <td><b>片段缓存</b></td>
  </tr>
  <tr>
    <td align="left">
      
<?php 
	//开启缓存
	//if($this->beginCache("aaa",array("duration"=>3)))
	$result = $this->beginCache("aaa",array("duration"=>3));
	if($result)
	{
?>
      <br><?php echo $t1?><br>
      <br><?php echo $t2?><br>
<?php 
		//结束缓存
		$this->endCache();
	}
?>
      
      <br><?php echo $t3?><br><br>
    </td>
  </tr>
</table>











