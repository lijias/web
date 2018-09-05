<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller
{
    public function _initialize()
    {
    	if(!$_SESSION['msg'])
    	{
    		//跳转 		
    		$this->redirect("__APP__/Login/index");
    	}
    }
}