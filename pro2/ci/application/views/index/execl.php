<!DOCTYPE html>
<html>
<head>
<title>text</title>
</head>
<body>

<a href=<?php echo site_url('blog/download')?>>导出execel</a>
<form action=<?php echo site_url('All_text/blog/upload');?> method="post" id='form1' enctype="multipart/form-data" >
	<div>
		<input type="file" name="File1" id="File1">
		<input type="button" value='导入' onclick="up()">
	</div>
</form>
<script type="text/javascript">
	var obj = document.getElementById('File1');
	function up()
	{
			if (obj.value=='') 
		{
			alert("请选择一个文件");
			return false;
		}
		else
		{
			{form1.submit()}
		}
	}
	
</script>
</body>
</html>
