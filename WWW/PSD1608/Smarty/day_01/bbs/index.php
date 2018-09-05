<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'smarty/Smarty.class.php';
	$smarty = new Smarty();
	
	$userName = "张三";
	$age = 15;
	$cityList = array("北京","上海","深圳","西安");
	$userInfo = array("userName"=>"李四","age"=>27,"sex"=>"女","address"=>"北京");
	
	$smarty->assign("age",$age);//向html页面传值
	$smarty->assign("uname",$userName);
	$smarty->assign("cityList",$cityList);
	$smarty->assign("userInfo",$userInfo);
	$smarty->display("index.html");//显示指定的html页面
?>





