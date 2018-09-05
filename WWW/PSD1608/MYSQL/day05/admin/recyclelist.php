<?php
include '../common/db.inc.php';
include "../common/Page.class.php";

//总记录数，每页显示记录数
//每页显示记录数
$page_size = 5;
//总记录数
$query = "select id from article where deleted=1";
$result = mysql_query($query);
$total = mysql_num_rows($result);
//实例化 Page 类
$p = new Page($total,$page_size);

//偏移量=（当前页-1）*每页显示记录数
$offset = ($p->cur_page-1)*$page_size;
//读取出数据库中的数据 article a newtype n
$query = "select a.id,title,addtime,name from 
		  article as a inner join newtype as n
		  on a.tid=n.id where deleted=1 
		  limit $offset,$page_size";
$result = mysql_query($query);






?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>my demo</title>
<link type="text/css" rel="stylesheet" href="styles/reset.css" media="all"/>
<style>
     #wrap{
	      padding:10px;
     }
     #wrap table{
     	   width:100%;
	       border-top:1px solid #ccc;
     	   border-left:1px solid #ccc;
     }
     #wrap th,#wrap td{
	      border-right:1px solid #ccc;
     	  border-bottom:1px solid #ccc;
     	  padding:6px;
     }
     .title{
	      text-align:center;
     	  line-height:26px;
     }
     .page a,.page span{
	      display:inline-block;
     	  width:16px;
     	  height:16px;
     	  border:1px solid #900;
     	  text-align:center;
     }
  .page .a_l{	    
     	  width:36px;     	
     	  border:0;     	
     }
     .page span{
	     background:#900;
     	 color:#fff;
     }
</style>
</head>
<body>
  <div id="wrap">
        <h1 class="title">回收站列表</h1>
        <form  action="pdel.php" method="post">
	     <table>
	          <tr><th><input type="checkbox" name="all"/></th><th>新闻标题</th><th>分类</th><th>发布时间</th><th>操作</th></tr>
	       <?php while($row = mysql_fetch_assoc($result)){ ?>
	          <tr>
	               <td style="text-align:center"><input type="checkbox" name="selectbox[]"/></td>
	               <td><?php echo $row['title'];?></td>
	               <td><?php echo $row['name'];?></td>
	             
	               <td><?php echo $row['addtime'];?></td>
	               <td>	              
	                    <a href="delete_pdo.php?id=<?php echo $row['id']; ?>"><img  src="images/recycle.png" alt="" width="24"/></a>
	                    <a href="restore_pdo.php?id=<?php echo $row['id'];?>"><img src="images/modify.png" alt="" width="24"/></a>
	               </td>
	          </tr>
	        <?php } ?>
	          <tr>
	              <td colspan="6">	                
	                   <div class="page">
	                    <?php $p->pages(); ?>            
	                   </div>
	              </td>
	          </tr>
	     </table>
	     </form>
     </div>
     <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</body>
</html>
<?php 
mysql_close();
?>