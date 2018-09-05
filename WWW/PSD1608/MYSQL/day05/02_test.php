<?php
/*
 *5、应用mysql获取结果的函数，将cms_admin表中
 *的数据读取出来放到table表格中。 
 */
header("Content-Type:text/html;charset=utf-8");
//1、连接数据库
$link = mysql_connect("localhost",
		              "root",
		              "root");
//2、选择默认数据库
mysql_select_db("cms2");
//3、操作-有返回结果集的sql语句 返回 资源
$page_size=5;
$page=isset($_GET['p'])?$_GET['p']:1;
//获取总页数
$query="select id from cms_admin";
$result=mysql_query($query);
//获取总记录数
$total=mysql_num_rows($result);
//总页数=ceil(总记录/每页显示页数)
$total_page=ceil($total/$page_size);
//对page进行限制
if ($page<=0){
	//page最小为1
   $page=1;
}else if ($page>=$total_page&&$total_page!=0){
	//page最大为$total_page
   $page=$total_page;
}
//首页 上一页
//上一页的连接地址=当前页-1
$prev=$page-1;
$flist="";
if ($prev>=1){
    $flist="&nbsp<a href='?p=1'>首页</a>&nbsp<a href='?p=".$prev."'>上一页</a>";
}
// 1 2 3 4 5 6 7 
// 假设当前页为4
//定义队列长度
$num=3;
$lists="";
//1 2 3
for ($i=$num;$i>0;$i--){
  $n=$page-$i;
  if ($n>0){
  $n="<a href='?p=".$n."'>$n</a>";
  $lists=$lists."&nbsp;".$n;
  }
}
//4
$lists=$lists."&nbsp;".$page;
//5 6 7
for ($i=1;$i<=$num;$i++){
	$n=$page+$i;
   if ($n<=$total_page){
     $n="<a href='?p=".$n."'>$n</a>";
     $lists=$lists."&nbsp".$n;
   }
}
//下一页 尾页
//上一页的连接地址=当前页+1
$next=$page+1;
$llist="";
if ($next<=$total_page){
    $llist="&nbsp;<a href='?p=".$next."'>下一页</a>&nbsp;<a href='?p=".$total_page."'>尾页</a>";
}
//偏移量公式
$offset=($page-1)*$page_size;
$query = "select id,aname from 
		  cms_admin order by id asc limit $offset,$page_size";
$result = mysql_query($query);
//从mysql_query产生的资源中获取结果
//mysql_fetch_assoc
//输出table表格的外边框
echo "<table border='1' width='500'>";
//输出table表格的表头
echo "<tr><th>ID</th><th>姓名</th>
	  </tr>";
// 循环从数据库中读取出数据
 while($row = mysql_fetch_assoc($result)){
 	//循环输出table表格的每一行
 	echo "<tr>";
 	echo "<td>".$row['id']."</td>";
 	echo "<td>".$row['aname']."</td>";
 	echo "</tr>";
 }

echo "</table>";

echo "共".$total_page."页 &nbsp;当前第".$page."页&nbsp;".$flist.$lists.$llist;
//4、关闭数据库 释放资源
mysql_close();














