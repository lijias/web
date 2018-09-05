<?php
namespace Admin\Controller;

use Think\Page;
	
	class RoleController extends CommonController 
{
		//角色管理
    	public function lst()
    	{   
    		$role = D("role");
    		$where = 1;
    		$kw = I("kw");
    		if ($kw) 
    		{
    			$where.=' AND rolename LIKE "%'.$kw.'%"';
    			//echo $where;die;
    		}
    		$totalRows = $role->where($where)->count();
    		$page = new \Think\Page($totalRows,2);
    		$rolres = $role->field('a.*,GROUP_CONCAT(b.pri_name) pri_name')->alias('a')->where($where)->join('LEFT JOIN cs_privilege b ON FIND_IN_SET(b.id,a.pri_id_list)')->group('a.id')->limit($page->firstRow,$page->listRows)->select();	
    		$this->assign("rolres",$rolres);
    		$this->assign("page",$page->show());	
        	$this->display();
    	}
    	//角色添加
    	public function add()
    	{    
    		$role = D("role");
    		if (IS_POST)
    		{
    			if ($role->create()) 
    			{
    				$role->pri_id_list=implode(",", $role->pri_id_list);
    				if ($role->add()) 
    				{
    					$this->success('添加角色成功!',U('lst'));
    				}
    				else 
    				{
    					$this->error("添加角色失败！");
    				}
    			}
    			else 
    			{
    				$this->error($role->getError());
    			}
    			
    			return;
    		}		
    		$privilege = D("Privilege");
    		$prires = $privilege->privilegetree();
    		$this->assign("prires",$prires);
    		$this->display();
    	}
    	//角色修改
    	public function update()
    	{   
    		$role = D("role");
    		$id = I("id");
    		//修改角色
    		if (IS_POST)
    		{
    			if ($role->create())
    			{
    				$role->pri_id_list=implode(",", $role->pri_id_list);
    				if ($role->save())
    				{
    					$this->success('修改角色成功!',U('lst'));
    				}
    				else
    				{
    					$this->error("修改角色失败！");
    				}
    			}
    			else
    			{
    				$this->error($role->getError());
    			}
    			 
    			return;
    		}
    		//查询一个角色
    		$roles = $role->find($id);
    		//无限级分类
    		$privilege = D("Privilege");
    		$prires = $privilege->privilegetree();
    		
    		$this->assign("roles",$roles);
    		$this->assign("prires",$prires);
    		$this->display();
    	}
    	public function delete()
    	{
    		$role = D("role");
    		$id = I("id");
    		if ($id==1)
    		{
    			$this->error("超级管理员无法删除!!");
    		}
    		if ($role->delete($id))
    		{
    			$this->success("删除角色成功!",U("lst"));
    		}
    		else
    		{
    			$this->error("删除角色失败");
    		}
    	}
    	public function bdelete()
    	{
    		$role = D("role");
    		$ids = I("ids");   		
    		if ($ids)
    		{
    			$key = array_search(1, $ids) ;
    			if ($key!==false) 
    			{
    				unset($ids[$key]);
    			}
    			$ids = implode(",", $ids);
    			if ($role->delete($ids))
    			{
    				$this->success("批量删除角色成功!",U("lst"));
    			}
    			else
    			{
    				$this->error("批量删除角色失败");
    			}
    		}
    		else
    		{
    			$this->error("未选中任何内容!");
    		}
    	}
}