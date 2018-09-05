<?php
namespace Admin\Controller;


	class AdminController extends CommonController 
{
		//管理员
    	public function lst()
    	{
    		$admin = D("admin");
    		$where = 1;
    		$kw = I("kw");

    		if ($kw)
    		{
    			$where.=' AND username LIKE "%'.$kw.'%"';
    		}
    		
    		$totalRows =$admin->where($where)->count();
    		$page = new \Think\Page($totalRows,3);
    		$adminres = $admin->field('a.id,a.username,b.rolename')->alias('a')->join('LEFT JOIN cs_role b ON a.roleid=b.id')->where($where)->limit($page->firstRow,$page->listRows)->select();
    		
    		$this->assign("page",$page->show());
    		$this->assign("adminres",$adminres);
        	$this->display();
    	} 
    	//新增管理员
    	public function add()
    	{    		
    		$admin = D("admin");
    		if (IS_POST)   			
    		{
    			if ($admin->create())
    			{
    				$admin->password=md5($admin->password);
    				if ($admin->add()) 
    				{
    					$this->success("添加管理员成功",U("lst"));
    				}
    				else 
    				{
    					$this->error("添加管理员成功");
    				}
    			}
    			else 
    			{
    				$this->error($admin->getError());
    			}
    			return ;
    		}
    		$role = D("role");
    		$roles = $role->select();
    		$this->assign("roles",$roles);
    		$this->display();
    	}
    	//修改管理员
    	public function update()
    	{
    		$admin = D("admin");
    		$id = I("id");
    		$adminres = $admin->find($id);
    		
    		if (IS_POST) 
    		{
    			if ($admin->create())
    			{
    				$admin->password=md5($admin->password);
    				if ($admin->save()) 
    				{
    					$this->success("修改管理员成功!",U("lst"));
    				}
    				else 
    				{
    					$this->error("修改管理员失败");
    				}
    			}
    			else 
    			{
    				$this->error($admin->getError());
    			}
    			return;
    		}
    		$this->assign("adminres",$adminres);
    		$role = D("role");
    		$roles = $role->select();
    		$this->assign("roles",$roles);
    		$this->display();
    	}
    	public function delete()
    	{
    		$admin = D("admin");
    		$id = I("id");
    		if ($id==1) 
    		{
    			$this->error("超级管理员无法删除!!");
    		}
    		if ($admin->delete($id)) 
    		{
    			$this->success("删除管理员成功!",U("lst"));
    		}
    		else 
    		{
    			$this->error("删除管理员失败");
    		}
    	}
    	public function bdelete()
    	{
    		$admin = D("admin");    		
    		$ids = I("ids");
    		$ids = implode(",", $ids);
    		if ($ids) 
    		{
    			if ($admin->delete($ids))
    			{
    				$this->success("批量删除管理员成功!",U("lst"));
    			}
    			else
    			{
    				$this->error("批量删除管理员失败");
    			}
    		}
    		else 
    		{
    			$this->error("未选中任何内容!");
    		}	    		
    	}
    	public function logout()
    	{
    		session(null);
    		$this->success("退出成功",U("Login/index"));
    	}	
}