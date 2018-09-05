<?php
//加载数据库文件,引入文件也就完成了 数据库的
//连接和选择
include '../common/db.inc.php';

//读取数据库的内容 article 表
//通过获取url上的参数id可以知道目前要
//更新的新闻id号
$query = "select a.id,title,name,contents,tid from 
		           article as a inner join newtype as n
		           on tid=n.id where a.id=".$_GET['id'];
$result = mysql_query($query);
//已知就拿到一个id，也就是说就拿回一条新闻。
//就不用循环获取了
$row = mysql_fetch_assoc($result);

//读取出全部的新闻分类
$query = "select id,name from newtype";
$result_n = mysql_query($query);

//仅当用户有post数据时，才进行数据的收录

if($_POST){
	
	//获取新闻标题
	$title = isset($_POST['title'])?$_POST['title']:"";
	if($title==""){
		echo "新闻标题不得为空";
		exit;
	}
	
	$type = isset($_POST['type'])?$_POST['type']:"";
	if($type==""){
		echo "新闻分类不得为空";
		exit;
	}
	
	$contents = isset($_POST['contents'])?$_POST['contents']:"";
	if($contents==""){
		echo "新闻内容不得为空";
		exit;
	}
	
	//数据的更新
	$query = "update article set title='".$title."',tid=$type,contents='".$contents."' where id=".$_GET['id'];
	$result = mysql_query($query);
	if($result){
		echo "数据更新成功";
	}else{
		echo "数据更新失败";
	}
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
    <!-- 示例post提交id 暂时不用-->
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <!-- 示例post提交id 暂时不用-->
          <table>
               <tr>
                     <th colspan="2" class="title" style="font-size:30px">新闻更新</th>
               </tr>
               <tr>
                    <td>标题</td>
                    <td><input   type="text" name="title" value="<?php echo $row['title']; ?>"/></td>
               </tr>
               <tr>
                    <td>分类</td>
                    <td>
                         <select name="type">
                             <?php while($r = mysql_fetch_assoc($result_n)){?>
                              <option value="<?php echo $r['id'];?>" <?php if($r['id']==$row['tid']) { ?> selected="selected" <?php } ?>><?php echo $r['name']; ?></option>
                              <?php } ?>
                               
                         </select>
                    </td>
               </tr>
               <tr>
                    <td>正文</td>
                    <td>
                        <textarea rows="10" cols="50" name="contents"><?php echo $row['contents']; ?></textarea>
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