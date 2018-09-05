<?php
header('Content-Type:text/html;charset=utf-8');
//8、应用PDO准备语句，对cms_user表进行查询，将获取的结果以关联数组返回。循环获取查询的结果。将获取到的结果输出到table表格中。
//在表格的最后输出：共**行数据
$pdo=new PDO("mysql:host=localhost;dbname=cms2", "root", "root");
$query="select id,username,password from cms_user";
$p=$pdo->prepare($query);
$p->execute();
echo "<table border='1'>";
echo "<tr><th>ID</th><th>USERNAME</th><th>PASSWORD</th></tr>";
while ($row=$p->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['password']."</td>";
	echo "</tr>";
}
echo "<tr><td colspan='3'>共".$p->rowCount()."行数据</td></tr>";
echo "</table>";
