<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'nologin.php';
	include_once '../dbio/NewsTypes.php';
	
	//获得url的参数
	$act = $_GET["act"];//操作类类型：delete、update
	$typeId = $_GET["typeId"];
	//获得表单提交的数据
	$typeName = $_POST["typeName"];
	$articleNums = $_POST["articleNums"];
	
	if($act == "delete")//删除分类
	{
		$result = NewsTypes::delType($typeId);
		header("location:success.php?act=deltype&rst={$result}");
	}
	elseif($act == "update")//修改分类
	{
		$result = NewsTypes::updateType($typeId, $typeName, $articleNums);
		header("location:success.php?act=modtype&rst={$result}");
	}
	
	//所有分类
	$newsTypes = NewsTypes::getNewsTypes();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../css/admin.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="../jquery/jquery-1.4.js"></script>
    <script type="text/javascript">
      //删除分类
      function delType(typeId)
      {
          if(confirm("是否删除该分类，以及该分类下所有新闻？"))
          {
              window.location = "modtype.php?act=delete&typeId="+typeId;
          }
      }
      //显示文本框
      var oldTypeId;//原来的typeId
      var oldTypeName;//原来的typeName
      var oldArticleNums;//原来的articleNums
      var oldLink;//原来那两个超链接(编辑、删除)
      function showText(typeId)
      {
          //先调用一下取消操作
          hideText();
          //获得td里的分类名称、新闻数量
          oldTypeId = typeId;
          oldTypeName = $("#td1"+typeId).html();
          oldArticleNums = $("#td2"+typeId).html();
          oldLink = $("#td3"+typeId).html();
          //这让一行出现文本框  
          $("#td0"+typeId).css("background-color","#AECAE8");
          $("#td1"+typeId).html("<input type='text' name='typeName' size='15' value='"+oldTypeName+"'>");
          $("#td2"+typeId).html("<input type='text' name='articleNums' size='15' value='"+oldArticleNums+"'>");
          $("#td3"+typeId).html("<a href='#' onclick='submitForm()'>更新</a>&nbsp;&nbsp;&nbsp;<a href='#' onclick='hideText()'>取消</a>");
      }
      //隐藏文本框
      function hideText()
      {
          $("#td0"+oldTypeId).css("background","white");
          $("#td1"+oldTypeId).html(oldTypeName);
          $("#td2"+oldTypeId).html(oldArticleNums);
          $("#td3"+oldTypeId).html(oldLink);
      }
      //点击了更新按扭
      function submitForm()
      {
          //设置表单提交的地址
          document.frm.action = "modtype.php?act=update&typeId="+oldTypeId;
          //提交表单
          document.frm.submit();
      }
    </script>
  </head>
  <body>
    <!-- 网站的头 -->
    <?php include_once 'header.php';?>
    
    <!-- 当前位置 -->
    <div class="locationDiv">&nbsp;: 分类管理 : 修改分类</div>
    
    <!-- 正文内容 -->
    <div class="mainDiv clear">
      
      <!-- 左侧树状列表 -->
      <div class="leftDiv"><?php include_once 'left.php';?></div>
      
      <!-- 右侧页面内容 -->
      <div class="rightDiv">
        <br><br><br><br>
        <form name="frm" method="post">
        <table border="1" align="center" width="600" cellpadding="0" cellspacing="0">
          <tr class="modTypeDiv1">
            <td>类别名称</td>
            <td>新闻数</td>
            <td>&nbsp;</td>
          </tr>
<?php 
	foreach ($newsTypes as $v)
	{
?>
          <tr id="td0<?php echo $v["typeId"]?>" class="modTypeDiv2" style="background-color:#FFFFFF;">
            <td id="td1<?php echo $v["typeId"]?>" width="200"><?php echo $v["typeName"]?></td>
            <td id="td2<?php echo $v["typeId"]?>" width="200"><?php echo $v["articleNums"]?></td>
            <td id="td3<?php echo $v["typeId"]?>" width="200">
              <a href="#" onclick="showText(<?php echo $v["typeId"]?>)">编辑</a>
              &nbsp;&nbsp;&nbsp;
              <a href="#" onclick="delType(<?php echo $v["typeId"]?>)">删除</a>
            </td>
          </tr>
<?php 
	}
?>
        </table>
        </form>
      </div>
      
    </div>
  </body>
</html>







