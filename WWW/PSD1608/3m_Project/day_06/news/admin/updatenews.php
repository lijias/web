<?php

include_once 'onlogin.php';
header("content-type:text/html;charset=utf-8");
include_once '../dbio/NewsTypes.php';
include_once 'uploadnew.function.php';
include_once '../dbio/NewsArticles.php';
$select=NewsTypes::getNewType();

if ($_GET) {
$articleId = $_GET['articleId'];
$selectN=NewsArticles::getOneN($articleId);
}

//print_r($selectN);

$title=$_POST['title'];
$typeId=$_POST['typeId'];
$writer=$_POST['writer'];
$source=$_POST['source'];
$content=$_POST['content'];

if ($_FILES) {
$imagepath=substr(uploadFile('../newspicture'), 3);
$updateN=NewsArticles::updateNews($content,$title,$typeId,$writer,$source,$imagepath,$articleId);
header("location:success.php?act=updateNews&rst={$updateN}");
} 	





?>
<!DOCTYPE html>
<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../css/admin.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="../jquery/jquery-1.4.js"></script>
    <script type="text/javascript" src="kindeditor/kindeditor.js"></script>
    <script type="text/javascript">
      var editor;
      KindEditor.ready(function(e){
          editor = e.create("[name=content]",{
              width:"700px",
              height:"260px"
          });
      });
      //表单验证
      function checkAdd()
      {
    	  if(document.frm.title.value == "")
          {
              alert("请输入新闻标题！");
              document.frm.title.focus();
              return false;
          }
    	  else if(editor.html() == "")
          {
              alert("请输入新闻内容！");
              editor.focus();
              return false;
          }
      }
      function qx(){
    	  window.location = "modnews.php";
          }
    </script>
  </head>
  <body>
    <!-- 网站的头 -->
    <?php include_once 'header.php';?>
      <!-- 当前位置 -->
    <div class="locationDiv">&nbsp;: 后台管理 : 新闻</div>
    <!-- 正文内容 -->
    <div class="mainDiv clear">
      <!-- 左侧树状列表 -->
      <div class="leftDiv"><?php include_once 'left.php';?></div>

      <!-- 右侧页面内容 -->
      <div class="rightDiv">
        <br>
        <form name="frm" method="post" action="updatenews.php?articleId=<?php echo $selectN['articleId'] ?>" enctype="multipart/form-data" onsubmit="return checkAdd()">
        <table class="addNewsTb" bgcolor="#DCDCDC" border="0" align="center" width="700">
          <tr>
            <td>新闻标题：</td>
            <td><input type="text" name="title" size="50" value="<?php echo $selectN['title']?>"></td>
          </tr>
          <tr>
            <td>新闻类型：</td>
            <td>
              <select name="typeId">
              <?php foreach ($select as $v){
                 if ($selectN['typeId']==$v['typeId']) {
                 	echo"<option value=".$v['typeId']." selected> ".$v['typeName']."</option>";
                 }else {
                 	echo"<option value=".$v['typeId']." > ".$v['typeName']."</option>";
                 }
              }
              	?>
              </select>
            </td>
          </tr>
          <tr>
            <td>新闻作者：</td>
            <td><input type="text" name="writer" size="50" value="<?php echo $selectN['writer']?>"></td>
          </tr>
          <tr>
            <td>新闻来源：</td>
            <td><input type="text" name="source" size="50" value="<?php echo $selectN['source']?>"></td>
          </tr>
          <tr>
            <td>新闻图片：</td>
            <td><input type="file" name="myFile" size="20" value="<?php echo $selectN['imagepath']?>"></td>
          </tr>
          <tr>
            <td colspan="2"><textarea name="content"><?php echo $selectN['content']?></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
              <input type="submit" value="更新" class="btn2">
              &nbsp;&nbsp;&nbsp;
              <input type="reset"value="取消" class="btn2"  onclick="qx()">
            </td>
          </tr>
        </table>
        </form>
      </div>
    </div>
  </body>
</html>











