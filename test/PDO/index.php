<?php
/*
 * PDO连接数据库
 */

$dbms='mysql';     //数据库类型
$host='192.168.10.139'; //数据库主机名
$dbName='ebrun';    //使用的数据库
$user='banguser';      //数据库连接用户名
$pass='bang123qwe';          //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";

try {
    $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象
    $dbh->query('set names utf8;');

//    echo "连接成功<br/>";
//    你还可以进行一次搜索操作
    $result = $dbh->query('SELECT * from 9thleaf_account order by id desc limit 15');
    echo '<pre>';
    foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
        print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
    }

    $dbh = null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
//默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
$db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));

?>
