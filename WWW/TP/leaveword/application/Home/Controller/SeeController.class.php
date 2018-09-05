<?php
namespace Home\Controller;
use Think\Controller;
	class SeeController extends  Controller{
		function index(){
			
			$result = M("infos")->query("select * from infos");
			
			
			$this->assign("result",$result);
			
			$this->display();
		}
	}