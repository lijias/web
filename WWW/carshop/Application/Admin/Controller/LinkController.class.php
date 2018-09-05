<?php
namespace Admin\Controller;


	class LinkController extends CommonController 
{
		//友情链接管理
    	public function lst()
    	{
    		$link = D("link");
    		$where = 1;
    		$kw = I("kw");
    		if ($kw)
    		{
    			$where .= ' AND title LIKE "%'.$kw.'%"';
    		}
    		$linkres = $link->where($where)->order("sort asc")->select();
    		
    		$this->assign("linkres",$linkres);
        	$this->display();
    	}
    	//友情链接添加
    	public function add()
    	{
    		$link = D("link");
    		if (IS_POST)
    		{
    			if ($link->create())
    			{
    				if ($link->add())
    				{
    					$this->success("添加连接成功!",U("lst"));
    				}
    				else 
    				{
    					$this->error("添加连接失败!");
    				}
    			}
    			else 
    			{
    				$this->error($link->getError());
    			}
    			return;
    		}
    		$this->display();
    	}
    	//友情链接修改
    	public function update()
    	{
    		$link = D("link");
    		$id =I("id");
    		
    		$linkres=$link->find($id);
    		
    		if (IS_POST)
    		{
    			if ($link->create())
    			{
    				if ($link->save())
    				{
    					$this->success("修改连接成功!",U("lst"));
    				}
    				else
    				{
    					$this->error("修改连接失败!");
    				}
    			}
    			else
    			{
    				$this->error($link->getError());
    			}
    			return;
    		}
    		
    		$this->assign("linkres",$linkres);
    		$this->display();
    	}
    	//删除连接
    	public function delete()
    	{
    		$link = D("link");
    		$id = I("id");
    		if ($link->delete($id))
    		{
    			$this->success('成功删除连接!',U('lst'));
    		}
    		else
    		{
    			$this->error('删除连接失败!');
    		}
    	}
    	public function bdelete()
    	{
    		$link = D("link");
    		$ids = I("ids");
    		$ids = implode(",", $ids);
    		if ($ids)
    		{
    			if ($link->delete($ids))
    			{
    				$this->success("批量删除连接成功!",U("lst"));
    			}
    			else 
    			{
    				$this->error("批量删除连接失败!");
    			}
    		}
    		else
    		{
    			$this->error("未选中任何内容!");
    		}
    	}
    	public function sortcate()
    	{
    		$link = D("link");
    		foreach ($_POST as $id=>$sort)
    		{
    			$link->where("id={$id}")->setField("sort",$sort);
    		}
    			$this->success("更新连接顺序成功",U("lst"));
    	}
}