<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller
{
    public function _initialize()
    {
    	if (method_exists($this, "isLogin")) 
    	{
    		$this->isLogin();
    	}
    	$pArr=M("type")->where("fid=0")->select();
    	$this->assign("pArr",$pArr);
    	if (I("tid")) 
    	{
    		$tid=I("tid");
    	}
    	else 
    	{
    		$tid=0;
    	}   	
    	$this->assign("tid",$tid);
    	$username=$_COOKIE['username'];
    	$this->assign("username",$username);
    	$userid=$_COOKIE["userid"];
    	$cart=M("cart");
    	$headerCount=$cart->where("userid={$userid}")->sum("buynum");
    	$this->assign("headerCount",$headerCount);
    }
}