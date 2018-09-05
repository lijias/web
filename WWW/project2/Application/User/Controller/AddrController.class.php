<?php
namespace User\Controller;
class AddrController extends BaseController{
	function showall(){
		//根据用户id，获取地址记录
		$userid=$_COOKIE['userid'];
		$ob=M("addrinfo");
		$arr=$ob->where("userid=$userid")->select();
		$this->assign('arr',$arr);
		$this->display();
	}
	function add(){
		$ob=M("addrinfo");
		$ref=$_POST['ref'];
		unset($_POST['ref']);
		$_POST['userid']=$_COOKIE['userid'];
		$ob->data($_POST)->add();
		if($ref==1){
			$this->redirect("Home/Cart/checkout");
		}else{
			$this->redirect("User/Addr/showall");
		}
	}
	function update(){
		$userid=$_COOKIE['userid'];
		$ref=$_POST['ref'];
		unset($_POST['ref']);
		$id=$_POST['id'];
		$ob=M("addrinfo");
		$ob->data($_POST)->where("id=$id and userid=$userid")->save();
		if($ref==1){
			$this->redirect("Home/Cart/checkout");
		}else{
			$this->redirect("User/Addr/showall");
		}
		
		
	}
}