<?php
	namespace Home\Controller;
	
	use Think\Controller;
		
	class MailContentController extends Controller{
	
		function index(){
			$ID = $_GET['ID'];
			
			$result = M("mail_info")->query("select * from mail_info where ID={$ID}");
			
			
			$this->assign("result",$result);
			$this->display();
		}

}