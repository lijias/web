<?php
header('Content-Type:text/html;charset=utf-8');
//8、应用PDO准备语句，对cms_user表进行查询，将获取的结果以关联数组返回。循环获取查询的结果。将获取到的结果输出到table表格中。
//在表格的最后输出：共**行数据

$pdo=new PDO("mysql:host=localhost;dbname=cms2", "root", "root");
//编译
$query="select id,username,password from cms_user  order by id asc";
$p=$pdo->prepare($query);
//
//$n=7;
//$p->bindParam(":id", $n);
//执行
$p->execute();
//
echo "<table border='1' width='500' >";
echo "<tr><th>id</th><th>username</th><th>password</th></tr>";
while($row=$p->fetch(PDO::FETCH_ASSOC)){
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['username']."</td>";;
	echo "<td>".$row['password']."</td>";;
	echo "</tr>";
}
echo "<tr><td colspan='3'>共".$p->rowCount()."行</td></tr>";
echo "</table>";
