<?php 
	header("content-type:text/html;charset=utf-8");
	include_once 'application/core/Controller.php';//所有控制器父类
	include_once 'application/core/Model.php';//所有模型的父类
	
	//定义系统常量
	define("ROOT","/bbs");//项目根目录
	define("APP","/bbs/index.php");//入口文件地址
	
	
	//控制url访问方式：0(url传参) 1(pathinfo)
	$urlModel = 1;
	
	if($urlModel == 1)
	{
		//获得当前url地址
		$url = $_SERVER["PATH_INFO"];
		//去掉.html后缀
		$url = str_replace(".html","",$url);
		//分割url地址
		$arr = explode("/",$url);
		//获得控制器名、方法名
		$c = $arr[1];
		$a = $arr[2];
		//处理url中的参数
		if($arr[3] != NULL)
		{
			for($i=3;$i<count($arr);$i+=2)
			{
				$key = $arr[$i];//参数名
				$value = $arr[$i+1];//参数值
				$_GET[$key] = $value;
			}
		}
	}
	else
	{
		$c = $_GET["c"];//控制器
		$a = $_GET["a"];//方法
	}
	
	
	//设置默认的控制器和方法
	if($c == NULL)
	{
		$c = "Index";//默认的控制器
		$a = "index";//默认的方法
	}
	
	
	//补全控制器名、方法名
	$c .= "Controller";
	$a .= "Action";
	
	
	include_once 'application/controller/'.$c.'.php';
	$controller = new $c();
	$controller->$a();
?>