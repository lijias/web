<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'nologin.php';
	include_once '../dbio/NewsTypes.php';
	include_once '../dbio/NewsArticles.php';
	
	//获得表单提交的数据
	$title = $_POST["title"];
	$typeId = $_POST["typeId"];
	$writer = $_POST["writer"];
	$source = $_POST["source"];
	$myFile = $_FILES["myFile"];
	$content = $_POST["content"];
	$userName = $_SESSION["userMsg"]["userName"];
	//表单提交了(添加新闻)
	if($content != NULL)
	{
		//1、上传文件
		$savePath = NULL;
		if($myFile["name"] != NULL)
		{
			//原文件名 xxxx.txt.jpg
			$oldFileName = $myFile["name"];
			//截取文件扩展名
			$index = strrpos($oldFileName,".");
			$ext = substr($oldFileName,$index);
			//生成一个新文件名
			$fileName = uniqid().$ext;
			//保存路径
			$savePath = "newspicture/{$fileName}";
			//上传文件
			move_uploaded_file($myFile["tmp_name"],"../{$savePath}");
		}
		//2、添加记录
		$result = NewsArticles::addNews($content, $title, $typeId, $userName, $writer, $source, $savePath);
		if($result > 0)
		{
			//让某分类下的新闻数量加一
			NewsTypes::addNums($typeId);
		}
		header("location:success.php?act=addnews&rst={$result}");
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
    <script type="text/javascript" src="../kindeditor/kindeditor.js"></script>
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
    <div class="locationDiv">&nbsp;: 新闻管理 : 添加新闻</div>
    
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
<?php 
	foreach ($newsTypes as $v)
	{
?>
                <option value="<?php echo $v["typeId"]?>"><?php echo $v["typeName"]?></option>
<?php 
	}
?>
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







