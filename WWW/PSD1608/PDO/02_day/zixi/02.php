<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>计算器</title>
</head>
<body>
<center>计算器</center><br/><br/>
<a href='02.php?p=juxing'>矩形</a>|<a href='02.php?p=sanjiaoxing'>三角形</a>|
<?php 
$cn=isset($_GET['p'])?$_GET['p']:"";
function  __autoload($classname){
	include $classname.'.class.php';
}
if ($cn!="") {
	$obj=new $cn;
	$obj->shuchu();
	if (!empty($_POST)) {
		$obj=new $cn($_POST);
// 	var_dump($_POST);exit;
		echo $obj->name."的周长为:".$obj->ric();
		echo "<br/>";
		echo $obj->name."的面积为:".$obj->area();
	}
}
?>
</body>
</html>