<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller{
	function _initialize(){
		if(method_exists($this, "isLogin")){
			$this->isLogin();
		}
		if(isset($_GET['tid'])){
			$this->assign('headerTid',$_GET['tid']);
		}else{
			$this->assign('headerTid',0);
		}
		if(isset($_COOKIE['userid'])&&!empty($_COOKIE['userid'])){
			$headerIsLogin="1";
			//获取当前登录的用户，购买产品的数量。
			$headerCartNumArr=M("cart")->where("userid={$_COOKIE['userid']}")
									->field("sum(buynum) as num")
									->find();
			//var_dump($headerCartNumArr);exit;
			$headerCartNum=$headerCartNumArr['num'];
		}else{
			$headerIsLogin='0';
			$headerCartNum=0;
		}
		//获取当前的url
		$curUrl=str_replace('/','@',$_SERVER['REQUEST_URI']);
		$this->assign('headerIsLogin',$headerIsLogin);
		$this->assign('headerCartNum',$headerCartNum);
		$this->assign('headerRef',$curUrl);
		//把分类数据，第一级，state<9
		$arr=M("Type")->where("fid=0 and state<9")->select();
		$this->assign('headerTypeArr',$arr);
		
		
		
		
		
		
		
		
		
	}
}