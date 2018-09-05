<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function index(){
		$this->display();
	}
	public function check(){
		//判断用户名密码是否正确
		$Admin=M("Admin");
		$re=$Admin->where("username='{$_POST['username']}' and password='".md5($_POST['password'])."'")->find();
		//创建会话变量，session
		if($re){
			$_SESSION['username']=$re;
			$this->redirect("Admin/Index/index");
		}else{
			$this->error("登录失败",U("Admin/Index/login"));
		}
	}
}