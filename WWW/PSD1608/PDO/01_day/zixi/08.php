<?php
header('Content-Type:text/html;charset=utf-8');
//8、应用PDO准备语句，对cms_user表进行查询，将获取的结果以关联数组返回。循环获取查询的结果。将获取到的结果输出到table表格中。
//在表格的最后输出：共**行数据
$pdo=new PDO("mysql:host=localhost;dbname=cms2", "root", "root");
$statement="select id,username,password from cms_user order by id asc";
$p=$pdo->prepare($statement);
$p->execute();
echo "<table border=1 width=500>";
echo "<tr><th>ID</th><th>用户名</th><th>密码</th></tr>";
while ($row=$p->fetch(PDO::FETCH_ASSOC)){
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['password']."</td>";
	echo "</tr>";
}
echo "<tr><td cosplan=3>共".$p->rowCount()."行数据</td></tr>";
echo "</table>";