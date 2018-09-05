<?php
$id=$_GET['id'];
require '../class/memcached.class.php';
$m=new Memcached(
		array(
				'servers' => array('127.0.0.1:11211'),
				'debug'   => false,
				'compress_threshold' => 10240,
				'persistant' => true)
);
$pdo=new PDO("mysql:host=localhost;dbname=test",'root','root');
$key="click_".$id;
//根据id，去内存中找点击数，
$re=$m->get($key);
if($re===null){
	//如果没有，去数据库中获取，加一些内容，
	$pdoS=$pdo->query("select clicknum from news where id=$id");
	$clicknumArr=$pdoS->fetch(PDO::FETCH_ASSOC);
	$clicknum=$clicknumArr['clicknum']+1;
	$m->add($key,$clicknum);
}else{//否则直接加1，显示,每到5次同步数据库。
	$clicknum=$re+1;
	$m->replace($key,$clicknum);
	if($clicknum%5==0){
		$pdo->exec("update news set clicknum=$clicknum where id=$id");
	}
}
echo "document.write('$clicknum')";







