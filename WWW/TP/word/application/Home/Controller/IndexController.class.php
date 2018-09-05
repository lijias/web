<?php
namespace Home\Controller;
use Think\Controller;

	class IndexController extends Controller {
    	public function index()
    	{
    		session(null);
        	$this->display();
    	}
    	function login()
    	{
    		$username = $_POST['username'];
    		$password = $_POST['password'];
    		
    		$result = M("admin")->where("username='{$username}'&&password='{$password}'")->select();    		
    		if ($result!=null)
    		{
    			session('msg',$result);
    			$this->redirect("Add/index",null,2,"登陆成功");
    		}
    		else
    		{
    			$this->redirect("Index/index",null,2,"登陆失败");
    		}
    	}
	}