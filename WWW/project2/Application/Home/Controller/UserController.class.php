<?php
namespace Home\Controller;
class UserController extends BaseController{
	function reg(){
		$this->display();
	}
	function checkusername(){
		$username=$_GET['username'];
		//判断是否已经注册过了
		$User=M("User");
		$re=$User->where("username='$username'")->find();
		if($re){
			echo "false";
		}else{
			echo "true";
		}
	}
	function checkemail(){
		$email=$_GET['email'];
		
		$User=M("User");
		$re=$User->where("email='$email'")->find();
		if($re){
			echo "false";
		}else{
			echo "ok";
		}
	}
	function save(){
		$user=M("User");
		unset($_POST['confirm_password']);
		unset($_POST['agreement']);
		unset($_POST['Submit']);
		$_POST['pubtime']=time();
		$_POST['ip']=$_SERVER['REMOTE_ADDR'];
		$re=$user->data($_POST)->add();
		if($re){
			$this->success("注册成功",U("Home/Index/index"));
		}else{
			$this->success("注册失败",U("Home/User/reg"));
		}
	}
	function login(){
		$this->display();
	}
	function tuichu(){
		setcookie("userid","",time()-1,"/");
		setcookie("username","",time()-1,"/");
		$this->success("退出成功",U("Home/Index/index"));
	}
	function check(){
		$ref=$_POST['ref'];//跳转的地址
		$username=$_POST['username'];
		$password=$_POST['password'];
		$user=M("User");
		$re=$user->field("id,username")->where("username='$username' and password='$password'")->find();
		if($re){
			setcookie('userid',$re['id'],0,"/");
			setcookie('username',$re['username'],0,"/");
			if($ref==''){
				$ref=U("Home/Index/index");
			}else{
				$ref=str_replace("@","/",$ref);
			}
			$this->success("登录成功",$ref);
		}else{
			$this->error("登录失败",U("Home/User/login",array('ref'=>$ref)));
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}