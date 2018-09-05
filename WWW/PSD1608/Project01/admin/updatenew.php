<?php 
include '../common/config.inc.php';
if (isset($_GET)) {
	//新闻编辑前浏览
	$query="select id,title,contents,tid from cms_article where id=:id";
	$p=$pdo->prepare($query);
	$p->bindParam(":id", $_GET['id']);
	$result=$p->execute();
	$row=$p->fetch(PDO::FETCH_ASSOC);
	//var_dump($row);
	$query="select id,tname from cms_type ";
	$p=$pdo->prepare($query);
	$p->execute();
	//新闻编辑更新
	//判断是否接收
	if ($_POST) {
		$title=$_POST['title'];
		if ($title=="") {
			echo "标题不能为空";
			exit;
		}
		$contents=$_POST['contents'];
		if ($contents=="") {
			echo "内容不能为空";
			exit;
		}
		$tid=$_POST['type'];
		if ($tid=="") {
			echo "分类不能为空";
			exit;
		}
		$query="update cms_article set title=:title,contents=:contents,tid=:tid where id=:id";
		$s=$pdo->prepare($query);
		$s->bindParam(":title", $title);
		$s->bindParam(":contents", $contents);
		$s->bindParam(":tid", $tid);
		$s->bindParam(":id", $_GET['id']);
		$r=$s->execute();
		if ($r) {
			echo "c";
		}else{
			echo "s";
		}
	}
}else{
	echo "x";
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <form action="" method="post">
          <table>
               <tr>
                     <th colspan="2" class="title" style="font-size:30px">编辑新闻</th>
               </tr>
               <tr>
                    <td>标题</td>
                    <td><input   type="text" name="title" value="<?php echo $row['title'];?>"/></td>
               </tr>
               <tr>
                    <td>分类</td>
                    <td>
                         <select name="type" >
                              <?php while ($row_type=$p->fetch(PDO::FETCH_ASSOC)){
                              ?>
                              <option value="<?php echo $row_type['id'];?>"
                              <?php if ($row['tid']==$row_type['id']){
                              	            echo "selected='selected'";} 
                              	            ?>
                              >        
                                   <?php echo $row_type['tname'];?>                                                                          
                              </option>
                               <?php }?>    
                         </select>
                    </td>
               </tr>
               <tr>
                    <td>正文</td>
                    <td>
                        <textarea rows="10" cols="50" name="contents" ><?php echo $row['contents'];?></textarea>
                    </td>
               </tr>
               <tr>
                     <th colspan="2">
                         <input type="submit" value="发布"/>
                     </th>
               </tr>
          </table>
    </form>
 </div>
</body>
</html>