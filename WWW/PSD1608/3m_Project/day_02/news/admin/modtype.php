<?php 
header("content-type:text/html;charset=utf-8");
include_once 'onlogin.php';
include_once '../dbio/NewsTypes.php';
$select=NewsTypes::getNewType();
$act=$_GET['act'];
$typeId=$_GET['typeId'];

$typeName = $_POST['typeName'];
$articleNums = $_POST['articleNums'];

if ($act=='delete') {
$del=NewsTypes::	delType($typeId);
header("location:success.php?act=deltype&rst={$del}");
}
else if($act=='update')
{
$update=NewsTypes::updateType($typeName,$articleNums,$typeId);	
header("location:success.php?act=udtype&rst={$update}");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../css/admin.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="../jquery/jquery-1.4.js"></script>
    <script type="text/javascript">
     function delType(typeId){
         if(confirm("是否要删除该分类下的所有新闻!!")){
                 window.location = "modtype.php?act=delete&typeId="+typeId; 
             }
         }
     var oldtypeName;
     var oldarticleNums;
     var oldHref; 
     var oldtypeId;
     function showText(typeId){
    	     hide();
    	     oldtypeId = typeId;
    	     oldtypeName = $("#td1"+typeId).html();
    	     oldarticleNums = $("#td2"+typeId).html();
    	     oldHref = $("#td3"+typeId).html();

    	     $("#td0"+typeId).css("background-color","#507DD2");
             $("#td1"+typeId).html("<input type='text' name='typeName' value='"+oldtypeName+"'/>");
             $("#td2"+typeId).html("<input type='text' name='articleNums' value='"+oldarticleNums+"'/>");
             $("#td3"+typeId).html("<a href='#' onclick='udsubmit()'>更新</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='#' onclick='hide()'>取消</a>");
             
         }
     function hide(){
    	 $("#td0"+oldtypeId).css("background-color","#FFFFFF");
    	 $("#td1"+oldtypeId).html(oldtypeName);
    	 $("#td2"+oldtypeId).html(oldarticleNums);
    	 $("#td3"+oldtypeId).html(oldHref);
         }
     function udsubmit(){
         document.frm.action="modtype.php?act=update&typeId="+oldtypeId;
         document. frm.submit();
         }
    </script>
  </head>
  <body>
    <!-- 网站的头 -->
    <?php include_once 'header.php';?>
     <!-- 当前位置 -->
    <div class="locationDiv">&nbsp;: 后台管理 : 修改分类</div>
    <!-- 正文内容 -->
    <div class="mainDiv clear">
      <!-- 左侧树状列表 -->
      <div class="leftDiv"><?php include_once 'left.php';?></div>

      <!-- 右侧页面内容 -->
      <div class="rightDiv">
        <br><br><br><br>
        <form name="frm" method="post" action="modtype.php">
        <table border="1" align="center" width="600" cellpadding="0" cellspacing="0">
          <tr class="modTypeDiv1">
            <td>类别名称</td>
            <td>新闻数</td>
            <td>&nbsp;</td>
          </tr>
          <?php foreach ($select as $k=>$v){?>
          <tr id="td0<?php echo $v['typeId']; ?>" class="modTypeDiv2" style="background-color:'#FFFFFF';">
            <td id="td1<?php echo $v['typeId']; ?>" width="200"><?php echo $v['typeName']; ?></td>
            <td id="td2<?php echo $v['typeId']; ?>" width="200"><?php echo $v['articleNums']; ?></td>
            <td id="td3<?php echo $v['typeId']; ?>" width="200">
              <a href="#" onclick="showText(<?php echo $v['typeId']?>)">编辑</a>
              &nbsp;&nbsp;&nbsp;
              <a href="#" onclick="delType(<?php echo $v['typeId']?>)">删除</a>
            </td>
          </tr>
          <?php }?>
          
        </table>
        </form>
      </div>
    </div>
  </body>
</html>

















