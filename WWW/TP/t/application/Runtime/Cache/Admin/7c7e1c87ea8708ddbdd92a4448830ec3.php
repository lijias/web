<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="/TP/t/Public/js/jquery.js"></script>
<script type="text/javascript">
function getBrand()
{
	var typestr=$("[name='typestr']").val();
	//正则
	if(typestr=='0')
		{
			var typeid=0;
		}
	else
		{
			var arr=typestr.match(/^>(\d+)/);
			var typeid=arr[1];	
			$.ajax
			({
				url:'/TP/t/admin.php/Product/getbrand',
				data:'typeid='+typeid,
				dataType:'json',
				success:function(re)
				{
					var brandid="";
					var brandname="";
					$("[name=brandid]").empty();
					for(var k in re)
						{
							brandid=re[k].id;
							brandname=re[k].bname;
							$("[name=brandid]").append("<option value='"+brandid+"'>"+brandname+"</option>");
						}
				}
			});
		}
	
}
</script>
</head>
<body>
<div>当前操作：添加产品</div>
<form action="" method="post" enctype="multipart/form-data">
<table>
	<tr>
		<td>标题：</td>
		<td><input type="text" name="title"/></td>
	</tr>
	<tr>
		<td>市场价格：</td>
		<td><input type="text" name="price"/></td>
	</tr>
	<tr>
		<td>会员价格：</td>
		<td><input type="text" name="userprice"/></td>
	</tr>
	<tr>
		<td>优惠数量：</td>
		<td><input type="text" name="salenum"/></td>
	</tr>
	<tr>
		<td>优惠价格：</td>
		<td><input type="text" name="saleprice"/></td>
	</tr>
	<tr>
		<td>简介：</td>
		<td><textarea name="content" cols="8"></textarea></td>
	</tr>
	<tr>
		<td>规格：</td>
		<td><textarea name="style" cols="8"></textarea></td>
	</tr>
	<tr>
		<td>图片：</td>
		<td><input type="file" name="upload[]" multiple='multiple'/></td>
	</tr>
	<tr>
		<td>分类：</td>
		<td>
		<select name="typestr" onchange="getBrand();">
			<option value="0">请选择</option>
			<?php echo ($typestr); ?>
		</select>
		</td>
	</tr>
	<tr>
		<td>品牌：</td>
		<td><select name="brandid">
			<?php if(is_array($brandArr)): foreach($brandArr as $key=>$v): ?><option value='<?php echo ($v["id"]); ?>'><?php echo ($v["bname"]); ?></option><?php endforeach; endif; ?>
		</select></td>
	</tr>
	
	
	
	<tr>
		<td colspan="2"><input type="submit" value="添加"/></td>
	</tr>
</table>
</form>
</body>
</html>