<?php
namespace Admin\Controller;
use Think\Controller;
use Admin;
	
	class CommonController extends Controller 
{
		//友情链接管理
    	public function __construct()
    	{
    		parent::__construct();
    		if (!session('id')) 
    		{
    			$this->error("请先登录系统！",U("Login/index"));
    		}
    		if (MODULE_NAME=='Admin' && CONTROLLER_NAME=='Index') 
    		{
    			return true;
    		}
    		if (MODULE_NAME=='Admin' && CONTROLLER_NAME=='Admin' && ACTION_NAME=='logout')
    		{
    			return true;
    		}
    		if (session('privilege')!='*' && !in_array(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, session('privilege'))) 
    		{
    			$this->error("无权访问该功能！");
    		}
    	}
    	
}