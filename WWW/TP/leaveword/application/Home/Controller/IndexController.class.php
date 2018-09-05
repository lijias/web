<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function add(){
    	$username = $_POST['username'];
    	$content = $_POST['content'];
    	
    	$result = M("infos")->execute("insert infos (username,leaveword) value ('{$username}','{$content}')");
    	
    	if ($result>0) 
    		{
    			$this->redirect("index/index",null,2,"添加留言成功!");
    		}else 
    		{
    			$this->redirect("index/index",null,2,"添加留言失败!");
    		}
    }
}