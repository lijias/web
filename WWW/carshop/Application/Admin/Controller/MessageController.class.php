<?php
namespace Admin\Controller;


	class MessageController extends CommonController 
{
		//留言管理
    	public function lst()
    	{
    		$message = D("message");
    		$where = 1;
    		$kw = I("kw");
    		if ($kw)
    		{
    			$where .= ' AND title LIKE "%'.$kw.'%"';
    		}
    		$count = $message->where($where)->count();
    		$page = new \Think\Page($count,2);
    		$show = $page->show();
    		$list = $message->where($where)->limit($page->firstRow,$page->listRows)->select();
    		$this->assign("list",$list);
    		$this->assign("page",$show);
        	$this->display();
    	}
    	//回复
    	public function reply()
    	{
    		$message = D("message");
    		$reply=D("reply");
    		$id = I("id");
    		if (IS_POST) 
    		{   			
    			$data['mid']=I("mid");
    			$data['content']=I("content");
    			$data['time']=time();
    			if ($reply->create($data)) 
    			{
    				if ($reply->add()) 
    				{
    					$this->success("回复内容成功!",U("lst"));
    				}
    				else 
    				{
    					$this->error("回复内容失败!");
    				}
    			}
    			else 
    			{
    				$this->error($reply->getError());
    			}
    			return;
    		}
    		$replyres=$reply->where('mid='.$id)->select();
    		$messages=$message->find($id);
    		$this->assign("replyres",$replyres);
    		$this->assign("messages",$messages);
    		$this->display();
    	}
    	//审核
    	public function checked()
    	{
    		$message = D("message");
    		
    		if (IS_POST)
    		{
    			if ($message->create())
    			{
    				if ($message->save())
    				{
    					$this->success("审核成功!",U("lst"));
    				}
    				else
    				{
    					$this->error("审核失败!");
    				}
    			}
    			else
    			{
    				$this->error($message->getError());
    			}
    			return;
    		}
    		$id = I("id");
    		$messages=$message->find($id);
    		$this->assign("messages",$messages);
    		$this->display();
    	}
    	//删除留言
    	public function delete()
    	{
    		$message = D("message");
    		$id = I("id");
    		if ($message->delete($id))
    		{
    			//删除对应留言的所有回复
    			$reply = D("reply");
    			$reply->where("mid=$id")->delete();
    			$this->success('成功删除留言!',U('lst'));
    		}
    		else
    		{
    			$this->error('删除留言失败!');
    		}
    	}
    	public function bdelete()
    	{
    		$message = D("message");
    		$reply = D("reply");
    		$ids = I("ids");
    		$ides=$ids;
    		$ids = implode(",", $ids);
    		if ($ids)
    		{
    			if ($message->delete($ids))
    			{
    				foreach ($ides as $k=>$v)
    				{
    					$reply->where("mid=$v")->delete();
    				}
    				$this->success("批量删除留言成功!",U("lst"));
    			}
    			else 
    			{
    				$this->error("批量删除留言失败!");
    			}
    		}
    		else
    		{
    			$this->error("未选中任何内容!");
    		}
    	}
}