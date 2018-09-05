<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'nologin.php';
	include_once '../dbio/NewsArticles.php';
	
	//获得数据
	$currentPage = $_POST["currentPage"];//当前页码
	$currentPage = $currentPage==NULL?1:$currentPage;
	//获得表单提交的数据
	$keyword = $_POST["keyword"];
	$searchType = $_POST["searchType"];
	
	$result = NewsArticles::getNews($currentPage,$keyword,$searchType);
	$totalPage = $result[0];//总页数
	$newsInfo = $result[1];//当前页面的记录
?>
<!DOCTYPE html>
<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../css/admin.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="../jquery/jquery-1.4.js"></script>
    <script type="text/javascript">
      //设置分页的页码
      function setPage(i)
      {
          document.frm.currentPage.value = i;
          document.frm.submit();
      }
    </script>
  </head>
  <body>
    <!-- 网站的头 -->
    <?php include_once 'header.php';?>
    
    <!-- 当前位置 -->
    <div class="locationDiv">&nbsp;: 新闻管理 : 修改新闻</div>
    
    <!-- 正文内容 -->
    <div class="mainDiv clear">
      
      <!-- 左侧树状列表 -->
      <div class="leftDiv"><?php include_once 'left.php';?></div>
      
      <!-- 右侧页面内容 -->
      <div class="rightDiv">
        <br>
        <form name="frm" method="post" action="modnews.php">
        <input type="hidden" name="currentPage" value="1">
        <table border="0" align="center" width="700" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left">
              &nbsp;新闻搜索：<input type="text" name="keyword" size="30" value="<?php echo $keyword?>">
              <select name="searchType">
<?php 
	if($searchType == "title")
	{
		echo "<option value='title' selected>标题</option>";
		echo "<option value='content'>内容</option>";
	}
	else
	{
?>
                <option value="title">标题</option>
                <option value="content" selected>内容</option>
<?php 
	}
?>
              </select>
              <input type="submit" value="搜索">
            </td>
          </tr>
        </table>
        </form>
        <br>
        <table border="1" align="center" width="700" cellpadding="0" cellspacing="0">
          <tr height="30" style="font-weight:bold;">
            <td>新闻编号</td>
            <td>新闻类型</td>
            <td>发表时间</td>
            <td>新闻标题</td>
            <td>评论</td>
            <td>&nbsp;</td>
          </tr>
<?php 
	foreach ($newsInfo as $v)
	{
?>
          <tr height="25">
            <td><?php echo $v["articleId"]?></td>
            <td><?php echo $v["typeName"]?></td>
            <td><?php echo $v["dateandtime"]?></td>
            <td align="left"><a href=""><?php echo $v["title"]?></a></td>
            <td><a href="">查看评论</a></td>
            <td><a href="">删除</a></td>
          </tr>
<?php 
	}
?>
          <tr height="25">
            <td colspan="6" align="left">
<?php 
	for ($i=1;$i<=$totalPage;$i++)
	{
		if($i == $currentPage)
		{
			echo "[{$i}]&nbsp;&nbsp;";
		}
		else 
		{
?>
              <a href="#" onclick="setPage(<?php echo $i?>)">[<?php echo $i?>]</a>&nbsp;&nbsp;
<?php 
		}
	}
?>
            </td>
          </tr>
          
        </table>
      </div>
      
    </div>
  </body>
</html>







