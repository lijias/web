<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>图形计算器</title>
</head>
<body>
<center>图形计算器</center><br/><br/>
<a href='index.php?p=jx'>矩形</a>|<a href='index.php?p=sjx'>三角形</a>|<a href='index.php?p=yx'>圆形</a>
<?php 
function __autoload($classname){
	include $classname.'.class.php';
}
$cn=isset($_GET['p'])?$_GET['p']:"";
//echo $cn;
//判断是否有选择图形
if ($cn!=""){
	//实例化
	$obj=new $cn();
	//输出
	$obj->view();
	//判断是否有值
	if ($_POST){
		//若有值,重新实例化并赋初值
		$obj=new $cn($_POST);
		//输出
		echo $obj->name."的周长:".$obj->cir();
		echo "<br/>";
		echo $obj->name."的面积:".$obj->area();
	}
}else {
	echo "请选择图形";
}
?>
</body>
</html>