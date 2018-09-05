<?php
include '../common/db.inc.php';
include "../common/Page.class.php";

//实例化
//$total,$page_size
//$total总记录数
$query = "select id from article where deleted=0";
$result = mysql_query($query);
$total = mysql_num_rows($result);
$page_size = 5;
$p = new Page($total,$page_size);

//偏移量的计算公式=（当前页-1）*$page_size
$offeset = ($p->cur_page-1)*$page_size;
$query = "select a.id,title,n.name,addtime from 
		 article as a inner join newtype as n
		 on a.tid=n.id where deleted=0 limit $offeset,$page_size";
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
        <h1 class="title"> 新闻列表</h1>
        <form  action="pdel.php" method="post">
	     <table>
	          <tr><th>
	          <input type="checkbox" name="all" />
	          </th><th>新闻标题</th><th>分类</th><th>发布时间</th><th>操作</th></tr>
	   <?php while($row = mysql_fetch_assoc($result)){ ?>
	          <tr>
	               <td style="text-align:center">
	               <input type="checkbox" name="selectbox[]" value="<?php echo $row['id']; ?>"/></td>
	               <td><?php echo $row['title'];?></td>
	               <td><?php echo $row['name'];?></td>
	             
	               <td><?php echo $row['addtime'];?></td>
	               <td>
	              
	                    <a href="recycle.php?id=<?php echo $row['id']; ?>"><img  src="images/recycle.png" alt="" width="24"/></a>
	                    <a href="updatenew.php?id=<?php echo $row['id'];?>"><img src="images/modify.png" alt="" width="24"/></a>
	               </td>
	          </tr>
	        <?php } ?>
	          <tr>
	              <td colspan="4">	                
	                   <div class="page">
	                    <?php $p->pages(); ?>            
	                   </div>
	              </td>
	              <td>	                
	                   <input type="submit" value="批量回收" /> 
	              </td>
	          </tr>
	     </table>
	     </form>
     </div>
     <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
     <script>
     //获取name=all的checkbox的javascript对象
     var iobj = document.getElementsByName("all");
     var inputobj = document.getElementsByName("selectbox[]");
     //all 的属性checked  
      // 当all的checked属性为true 
      //所有的checkbox checked=true
      //当all的checked属性为false
     //所有的checkbox checked=false
     iobj[0].onclick=function(){
         for(var i=0;i<inputobj.length;i++){
             if(iobj[0].checked==true){
            	 inputobj[i].checked=true;
             }else{
            	 inputobj[i].checked=false;
             }
			
         }
     }
      
     </script>
</body>
</html>
<?php 
mysql_close();
?>





