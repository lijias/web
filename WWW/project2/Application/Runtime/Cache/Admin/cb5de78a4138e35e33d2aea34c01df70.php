<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="/project2/Public/js/jquery.js"></script>
<script type="text/javascript">
function getBrand(bid){
	//获取当前选中的分类的value
	var typestr=$("[name='typestr']").val();
	//正则
	if(typestr=='0'){
		var typeid=0;
	}else{
		var arr=typestr.match(/^>(\d+)/);
		var typeid=arr[1];
	}
	$.ajax({
		url:'/project2/index.php/Admin/Product/getbrand',
		data:'typeid='+typeid,
		dataType:'json',
		success:function(re){
			var brandid='';
			var brandname='';
			$("[name=brandid]").empty();
			for(var k in re){
				brandid=re[k].id;
				brandname=re[k].bname;
				if(bid==brandid){
					$("[name=brandid]").append("<option selected='selected' value='"+brandid+"'>"+brandname+"</option>");
				}else{
					$("[name=brandid]").append("<option value='"+brandid+"'>"+brandname+"</option>");
				}
			}
		}
	})
}
function delImage(imageId,imageName){
	$.ajax({
		url:'/project2/index.php/Admin/Product/delimage',
		data:'imageId='+imageId+"&imageName="+imageName,
		success:function(re){
			if(re==1){
				$("#image_"+imageId).remove();
			}
		}
	});
}
$(function(){
	$("[name='typestr']").val('<?php echo ($arr["typestr"]); ?>');
	//获取分类下的品牌
	getBrand('<?php echo ($arr["brandid"]); ?>');//没有选中品牌
})
</script>
</head>
<body>
<div>当前操作：修改产品</div>
<form action="/project2/index.php/Admin/Product/usave" method="post" enctype="multipart/form-data">
<table>
	<tr>
		<td>标题：</td>
		<td><input value="<?php echo ($arr["title"]); ?>" type="text" name="title"/></td>
	</tr>
	<tr>
		<td>市场价格：</td>
		<td><input value="<?php echo ($arr["price"]); ?>" type="text" name="price"/></td>
	</tr>
	<tr>
		<td>会员价格：</td>
		<td><input value="<?php echo ($arr["userprice"]); ?>" type="text" name="userprice"/></td>
	</tr>
	<tr>
		<td>优惠数量：</td>
		<td><input value="<?php echo ($arr["salenum"]); ?>" type="text" name="salenum"/></td>
	</tr>
	<tr>
		<td>优惠价格：</td>
		<td><input type="text" value="<?php echo ($arr["saleprice"]); ?>" name="saleprice"/></td>
	</tr>
	<tr>
		<td>简介：</td>
		<td><textarea  name="content" cols="8"><?php echo ($arr["content"]); ?></textarea></td>
	</tr>
	<tr>
		<td>规格：</td>
		<td><textarea name="style" cols="8"><?php echo ($arr["style"]); ?></textarea></td>
	</tr>
	<tr>
		<td>图片：</td>
		<td>
		<table>
			<?php if(is_array($imageArr)): foreach($imageArr as $key=>$v): ?><tr id="image_<?php echo ($v["id"]); ?>">
				<td><img height="100" src="/project2/Public/product/<?php echo ($v["imagename"]); ?>"/></td>
				<td><a href="javascript:delImage('<?php echo ($v["id"]); ?>','<?php echo ($v["imagename"]); ?>');">删除</a></td>
			</tr><?php endforeach; endif; ?>
		</table>
		<input type="file" name="upload[]" multiple='multiple'/></td>
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
		<td colspan="2"><input type="hidden" name="suibian" value="<?php echo ($_SERVER['HTTP_REFERER']); ?>"/><input type="hidden" name="pid" value="<?php echo ($_GET['id']); ?>"/><input type="submit" value="添加"/></td>
	</tr>
</table>
</form>
</body>
</html>