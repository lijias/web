<?php
namespace Home\Controller;
class CartController extends BaseController{
	function isLogin(){//判断用户是否登录
		if(!isset($_COOKIE['userid'])){
			$ref=isset($_REQUEST["ref"])?$_REQUEST['ref']:'';
			$this->error("请登录",U("Home/User/login",array('ref'=>$ref)));
			exit();
		}
	}
	function add(){
		//购买的数量
		$buynum=$_POST['number'];
		//购买的产品id
		$productid=$_POST['productid'];
		//时间
		$pubtime=time();
		//ip
		$ip=$_SERVER['REMOTE_ADDR'];
		//用户id
		$userid=$_COOKIE['userid'];
		//数据入cart表
		$cart=M("Cart");
		$buyArr=$cart->where("userid=$userid and productid=$productid")->find();
		if($buyArr){//是否已经购买  where userid=$userid and productid=$productid
			//累加 修改  update news set clicknum=clicknum+1 where 条件
			$buynum=$buyArr['buynum']+$buynum;
			$re=$cart->data(array('buynum'=>$buynum))->where("userid=$userid and productid=$productid")->save();
		}else{
			$re=$cart->data(array('buynum'=>$buynum,'productid'=>$productid,'pubtime'=>$pubtime,'userid'=>$userid,'ip'=>$ip))->add();
		}
		//跳到购物车的首页
		$this->redirect("Home/Cart/index");
	}
	function del(){
		//接收产品id
		$id=$_GET['id'];
		//实例化数据模型类
		$cart=M('Cart');
		//删除操作
		$cart->where("id=$id and userid={$_COOKIE['userid']}")->delete();
		//跳转到购物车的首页
		$this->redirect("Home/Cart/index");
	}
	function clear(){
		$userid=$_COOKIE['userid'];
		$cart=M("Cart");
		$cart->where("userid=$userid")->delete();
		$this->redirect("Home/Cart/index");
	}
	function update(){
		//遍历post,以下标作为条件，把对应的值同步数据表cart中
		$cart=M("Cart");
		foreach($_POST as $k=>$v){
			$cartid=str_replace("buynum_", "", $k);
			$cart->where("id=$cartid")->data(array('buynum'=>$v))->save();
		}
		$this->redirect("Home/Cart/index");
	}
	function index(){
		//购物车，产品，产品图片
		$cart=M("Cart");
		$arr=$cart->alias('c')
				  ->join("product as p on c.productid=p.id")
				  ->field("c.*,p.title,p.style,p.userprice,p.saleprice,p.salenum")
				  ->where("c.userid={$_COOKIE['userid']}")		  
				  ->select();
		$image=M("Productimage");
		$allMoney=0;
		foreach($arr as $k=>$v){
			$productid=$v['productid'];
			$imageArr=$image->where("productid=$productid")->find();
			$buynum=$v['buynum'];
			$salenum=$v['salenum'];
			$endprice=$v['userprice'];
			if($buynum>=$salenum){
				$endprice=$v['saleprice'];
			}
			//小计
			$money=$endprice*$buynum;
			$allMoney+=$money;
			$arr[$k]['endprice']=$endprice;
			$arr[$k]['money']=$money;
			$arr[$k]['imagename']=$imageArr['imagename'];
		}
		$this->assign('arr',$arr);
		$this->assign('allMoney',$allMoney);
		$this->display();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}