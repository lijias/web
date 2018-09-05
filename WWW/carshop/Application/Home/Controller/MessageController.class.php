<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends CommonController
{
    public function index()
    {
    	$message=D("message");
    	if (IS_POST) {
    		$data['nickname']=I("nickname");
    		$data['telephone']=I("telephone");
    		$data['email']=I("email");
    		$data['content']=I("content");
    		$data['verify']=I("verify");
    		$data['time']=time();
    		if ($message->create($data))
    		{
    			if ($message->add())
    			{
    				$this->success("添加留言成功!");
    			}
    			else
    			{
    				$this->error("添加留言失败!");
    			}
    		}
    		else
    		{
    			$this->error($message->getError());
    		}
    		return ;
    	} 
    	$reply=D("reply");   	
    	$mres=$message->where("checked=1")->select();	
    	$pres=$reply->select();	
    	$this->assign("mres",$mres);
    	$this->assign("pres",$pres);
        $this->display();
    }
    public function code()
    {
    	$Verify=new \Think\Verify();
    	$Verify->length=4;
    	$Verify->entry();
    }
}