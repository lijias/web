<?php
//从新闻分类表中读取出新闻分类(cms_type)
//引入pages类
include '../common/config.inc.php';
include '../common/db.inc.php';
//获取总记录数
$query="select a.id from cms_article as a inner join cms_type as t on tid=t.id";
$result=mysql_query($query);
$total=mysql_num_rows($result);
//每页显示记录
$page_size=5;
//获得总页数
$total_page=ceil($total/$page_size);
//获得当期页数
//实例化
$page=new Pages($total, $page_size);
//读cms_article数据
$offset=($page->cur_page-1)*$page_size;
$query="select a.id,title,tname,addtime 
        from cms_article as a inner join cms_type as t
         on tid=t.id order by id asc limit $offset,$page_size";
$result=mysql_query($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>my demo</title>
<link type="text/css" rel="stylesheet" href="styles/reset.css" media="all"/>
<style>
    #wrap{
	     padding:20px;
    }
     table{
	      width:100%;
     	  border-top:1px solid #ccc;
     	  border-left:1px solid #ccc;
     }
     td,th{
	      border-right:1px solid #ccc;
     	  border-bottom:1px solid #ccc;
     	  padding:8px;
     }
</style>
</head>
<body>
 <div id="wrap">
    <form action="bathdel.php" method="post">
          <table>
               <tr>
                     <th colspan="6" class="title" style="font-size:30px">新闻列表</th>
               </tr>
               <tr>
                    <th> <input type="checkbox" name="checkkao" onclick="All()" />
                   <!--  <a href='javascript:all();'>全选</a>--></th>
                    <th>ID</th>
                    <th>新闻标题</th>
                    <th>新闻分类</th>
                    <th>添加时间</th>
                    <th>操作</th>
               </tr>
               <!--  -->
               <?php while ($row=mysql_fetch_assoc($result)){?>
                 <tr>
                    <th><input type='checkbox'  name="ids[]" value="<?php echo $row['id']?>"/></th>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['title']?></td>
                    <td><?php echo $row['tname']?></td>
                    <td><?php echo $row['addtime']?></td>
                    <td><a href='updatenew.php?id=<?php echo $row['id']?>'>编辑</a>|删除</td>
               </tr>
               <?php }?>
               <tr>
               <td colspan="5">
               <?php $page->Out(); ?>
               </td>
               <td >
               <input type='submit' value='批量删除'/>
               </td>
               </tr>
               <!--  -->
          </table>
    </form>
 </div>
 <script >
 var ids=document.getElementsByName("ids[]");
 var box=document.getElementsByName("checkkao");

 //document.write(box[0].checked);
 function All(){
  for(var i=0;i<ids.length;i++){
  if(box[0].checked == true){
	  ids[i].checked=true;
	  }else{
	 ids[i].checked=false;
		  }
	 }
	 
	 }
</script>
</body>
</html>