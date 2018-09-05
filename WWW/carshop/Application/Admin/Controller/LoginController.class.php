<?php
namespace Admin\Controller;
use Think\Controller;

	class LoginController extends Controller 
{
		//登录管理
    	public function index()
    	{
    		$admin = D("admin");
    		if (IS_POST) 
    		{
    			if ($admin->create($_POST,4)) 
    			{
    				if ($admin->login()) 
    				{
    					$this->success("登陆中...",U("index/index"));
    				}
    				else 
    				{
    					$this->error("用户名或密码错误！！！");
    				}
    			}
    			else 
    			{
    				$this->error($admin->getError());
    			}
    			return;
    		}
        	$this->display();
    	}
    	//验证码
    	public function verify()
    	{
    		$Verify = new \Think\Verify();
    		$Verify->length=4;
    		$Verify->entry();
    	}
    	
}