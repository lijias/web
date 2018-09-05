<?php 
header("content-type:text/html;charset=utf-8");
include_once 'onlogin.php';
include_once '../dbio/NewsArticles.php'; 
include_once 'Pages.class.php';

$total=NewsArticles::getAllN();
$page_size=6;
$page=new Pages($total, $page_size);
$offset=($page->cur_page-1)*$page_size;

$keyword = $_POST['keyword'];
$searchType = $_POST['searchType'];

if ($keyword!=null) {
$total=NewsArticles::getKeyN($searchType,$keyword);
$page=new Pages($total, $page_size);
$offset=($page->cur_page-1)*$page_size;
}

$articleId = $_GET['articleId'];
$act=$_GET['act'];

$gan=NewsArticles::getAllNews($offset, $page_size,$keyword,$searchType);

if ($act=='deletenews') {
$deletenews = NewsArticles::deleteNews($articleId);
header("location:success.php?act=deletenews&rst={$deletenews}");
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
      //设置分页的页码
      function setPage(i)
      {
          document.frm.currentPage.value = i;
          document.frm.submit();
      }
      function delNews(articleId){
          if(confirm("是否要删除该新闻!!")){
                  window.location = "modnews.php?act=deletenews&articleId="+articleId; 
              }
          }
    </script>
  </head>
  <body>
    <!-- 网站的头 -->
   <?php include_once 'header.php';?>
   <!-- 当前位置 -->
    <div class="locationDiv">&nbsp;: 后台管理 : 修改新闻</div>
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
          <?php foreach ($gan as $v){?>
          <tr height="25">
            <td><?php echo $v['articleId'];?></td>
            <td><?php echo $v['typeName'];?></td>
            <td><?php echo $v['dateandtime'];?></td>
            <td align="left"><a href="updatenews.php?articleId=<?php echo $v['articleId'];?>"><?php echo $v['title'];?></a></td>
            <td><a href="reviews.php?articleId=<?php echo $v['articleId'];?>&title=<?php echo $v['title'];?>">查看评论</a></td>
            <td><a href="#" onclick="delNews(<?php echo $v['articleId']?>)">删除</a>
          </tr>
          <?php }?>
          <tr height="25">
            <td colspan="6" align="left">
           <?php  $page->Out();?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>

















