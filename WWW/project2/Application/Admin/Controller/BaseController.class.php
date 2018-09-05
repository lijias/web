<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
	function _initialize(){
		//用户是否登录
		if(!isset($_SESSION['username'])){
			//跳转
			$this->redirect("Admin/Login/index");
		}
	}
}