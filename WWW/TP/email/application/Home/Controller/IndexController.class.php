<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$result = M("mail_info")->query("select * from mail_info");
    	
    	$this->assign("result",$result);
    	 $this->display();
    	}	
    	function del(){
    		$ID = $_GET['ID'];
    		
    		$result =M("mail_info")->execute("delete from mail_info where ID={$ID}");
    		
    		if ($result>0)
    			{
    				$this->redirect("index/index",NULL,3,"删除邮件成功!");
    			}
    		else
    			{
    				$this->redirect("index/index",array("ID"=>'{$ID}'),3,"删除记录失败!");
    			}
    	}
	}