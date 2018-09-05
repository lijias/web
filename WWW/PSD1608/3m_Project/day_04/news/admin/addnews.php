<?php 
include_once 'onlogin.php';
header("content-type:text/html;charset=utf-8");
include_once '../dbio/NewsTypes.php';
include_once 'uploadnew.function.php';
include_once '../dbio/NewsArticles.php'; 
$select=NewsTypes::getNewType();
//var_dump($_POST);
//var_dump($_FILES);

$title=$_POST['title'];
$typeId=$_POST['typeId'];
$writer=$_POST['writer'];
$source=$_POST['source'];
$content=$_POST['content'];
if ($_FILES) {
$imagepath=substr(uploadFile('../newspicture'), 3);
$insert=NewsArticles::insertNews($content,$title,$typeId,$writer,$source,$imagepath);
echo $insert;
if ($insert > 0) {
	NewsTypes::addNews($typeId);
}
header("location:success.php?act=insertNews&rst={$insert}");
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
    </script>
  </head>
  <body>
    <!-- 网站的头 -->
    <?php include_once 'header.php';?>
      <!-- 当前位置 -->
    <div class="locationDiv">&nbsp;: 后台管理 : 添加新闻</div>
    <!-- 正文内容 -->
    <div class="mainDiv clear">
      <!-- 左侧树状列表 -->
      <div class="leftDiv"><?php include_once 'left.php';?></div>

      <!-- 右侧页面内容 -->
      <div class="rightDiv">
        <br>
        <form name="frm" method="post" action="addnews.php" enctype="multipart/form-data" onsubmit="return checkAdd()">
        <table class="addNewsTb" bgcolor="#DCDCDC" border="0" align="center" width="700">
          <tr>
            <td>新闻标题：</td>
            <td><input type="text" name="title" size="50"></td>
          </tr>
          <tr>
            <td>新闻类型：</td>
            <td>
              <select name="typeId">
              <?php foreach ($select as $k=>$v){?>
                <option value="<?php echo $v['typeId'];?>"><?php echo $v['typeName'];?></option>
                <?php }?>
              </select>
            </td>
          </tr>
          <tr>
            <td>新闻作者：</td>
            <td><input type="text" name="writer" size="50"></td>
          </tr>
          <tr>
            <td>新闻来源：</td>
            <td><input type="text" name="source" size="50"></td>
          </tr>
          <tr>
            <td>新闻图片：</td>
            <td><input type="file" name="myFile" size="20"></td>
          </tr>
          <tr>
            <td colspan="2"><textarea name="content"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
              <input type="submit" value="添加" class="btn2">
              &nbsp;&nbsp;&nbsp;
              <input type="reset" value="取消" class="btn2">
            </td>
          </tr>
        </table>
        </form>
      </div>
    </div>
  </body>
</html>











