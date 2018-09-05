<?php
namespace Home\Controller;

class UserController extends BaseController
{
	function out()
	{
		setcookie("userid","",time()-1,"/");
		setcookie("username","",time()-1,"/");
		$this->success("退出成功",U("Home/Index/index"));
	}
	function login()
	{
		$carUrl=I('carUrl');
		$this->assign('carUrl',$carUrl);
		if ($_POST)
		{
			$user=M("user");
			$username=I("username");
			$password=I("password");	
			$url=I("carUrl");
			$url=str_replace("@", "/", $url);			
			$re=$user->where("username='{$username}' and password={$password}")->find();
			if ($re) 
			{
				setcookie("userid",$re['id'],0,"/");
				setcookie("username",$re["username"],0,"/");
				if ($url) 
				{
					var_dump($url);exit;
					$this->success("登录成功",$url);
				}
				else 
				{
					$this->success("登录成功",U("Home/Index/index"));
				}
			}
			else 
			{
				 $this->error("登录失败");	
			}
			return;
		}
		$this->display();
	}
   function reg()
   {
   		if ($_POST) 
   		{
   			unset($_POST['confirm_password']);
   			unset($_POST['agreement']);
   			$user=M("user");
   			$re=$user->data($_POST)->add();
   			if ($re) 
   			{
   				$this->success("注册成功",U("Home/Index/index"));
   			}
   			else 
   			{
   				$this->error("注册失败");
   			}
   			return;
   		}
   		$this->display();
   }
   function checkusername()
   {
   		$username=I("username");
   		$user=M("user");
   		$re=$user->where("username='{$username}'")->find();
   		if ($re) 
   		{
   			echo 'false';
   		}
   		else 
   		{
   			echo 'true';
   		}
   }
   function checkemail()
   {
   		$email=I("email");
   		$user=M("user");
   		$re=$user->where("email='{$email}'")->find();
   		if ($re)
   		{
   			echo 'false';
   		}
   		else
   		{
   			echo 'ok';
   		}
   }
}