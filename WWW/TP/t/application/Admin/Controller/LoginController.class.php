<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{
    public function index()
    {	
    	if (IS_POST) 
    	{
    		$admin=M("admin");
    		$username=I("username");
    		$password=I("password");
    		$password=md5($password);    		
    		$result=$admin->where("username='$username' and password='$password'")->select();
    		if ($result)
    		{
    			$_SESSION['msg']=$result;
    			$this->success("登陆成功",U("Index/index"));
    		}
    		else
    		{
    			$this->error("登陆失败");
    		}
    		return;
    	}
    	
    	$this->display();
    }
}