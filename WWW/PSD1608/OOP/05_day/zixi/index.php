<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>计算器</title>
</head>
<body>
<center>计算器</center><br/><br/>
<a href='index.php?p=juxing'>矩形</a>|<a href='index.php?p=sanjiaoxing'>三角形</a>|
<?php 
function __autoload($classname){
	include $classname.'.class.php';
}
$cn=isset($_GET['p'])?$_GET['p']:"";
var_dump($cn);exit;
if ($cn!=""){
	 $mubiao=new $cn();
	 $mubiao->shuchu();
	 if ($_POST){
	 	$mubiao=new $cn($_POST);
	 	echo $mubiao->name."的周长:".$mubiao->ric();	 
	 	echo "<br/>";
	 	echo $mubiao->name."的面积:".$mubiao->area();	
	 }
}else {
	echo "你**选图形啊";
}
?>
</body>
</html>