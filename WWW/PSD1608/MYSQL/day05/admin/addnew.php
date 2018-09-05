<?php
//加载数据库文件,引入文件也就完成了 数据库的
//连接和选择
include '../common/db.inc.php';
//从数据库表newtype中读取出数据，放到新闻分类的
//下拉列表中
$query = "select id,name from newtype";
$result = mysql_query($query); 
//获取用户数据 将用户提交的数据保存到数据库
//对用户是否提交数据进行判断
if(!empty($_POST)){
	// 此时用户有post提交数据
	//获取用户输入的新闻标题
	$title = isset($_POST["title"])?$_POST["title"]:"";
	//获取完新闻标题以后，判断新闻标题是否为空，
	//如果为空 则不允许添加到数据库表中
	if($title==""){
		echo "新闻标题不能为空";
		exit;
	}
	
	//获取新闻分类
	$newtype = isset($_POST["type"])?$_POST["type"]:"";
	if($newtype==""){
		echo "新闻分类不得为空";
		exit; //结束程序执行
	}
	//获取新闻内容
	$contents = isset($_POST["contents"])?$_POST["contents"]:"";
	if($contents==""){
		echo "新闻内容不得为空";
		exit; //结束程序执行
	}
	
	//将用户给的数据提交到数据库表 article
	$query = "insert into article(title,tid,contents,aid,addtime) 
			           values 
			           ('".$title."',$newtype,'".$contents."',2,now())";
			           
	//echo $query;
	$result = mysql_query($query);
	if($result){
		echo "添加新闻成功";
	}else{
		echo "添加新闻失败";
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
    <form action="addnew.php" method="post">
          <table>
               <tr>
                     <th colspan="2" class="title" style="font-size:30px">新闻发布</th>
               </tr>
               <tr>
                    <td>标题</td>
                    <td><input   type="text" name="title"/></td>
               </tr>
               <tr>
                    <td>分类</td>
                    <td>
                         <select name="type">
                              <?php while($row = mysql_fetch_assoc($result)){ ?>
                              <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                               <?php } ?>
                         </select>
                    </td>
               </tr>
               <tr>
                    <td>正文</td>
                    <td>
                        <textarea rows="10" cols="50" name="contents"></textarea>
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