<?php
header('Content-Type:text/html;charset=utf-8');
include_once '../dbio/Reviews.php';
$articleId = $_GET['articleId'];
$title=$_GET['title'];

$select = Reviews::selectOneArticle($title);
?>
<table border=1 align="center" width="800px" cellpadding="0" cellspacing="0">
 <tr>
    <th>新闻编号</th>
    <th>新闻标题</th>
    <th>发评人</th>
    <th>发表时间</th>
    <th>评论</th>
 </tr>
 <?php foreach ($select as $v){?>
 <tr>
     <td><?php echo $v['articleId']?></td>
      <td><?php echo $v['title']?></td>
     <td><?php echo $v['userName']?></td>
     <td><?php echo $v['dateandtime']?></td>
     <td><?php echo $v['body']?></td>
 </tr>
 <?php }?>
</table>