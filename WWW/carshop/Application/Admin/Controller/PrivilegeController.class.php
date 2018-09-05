<?php
namespace Admin\Controller;


	class PrivilegeController extends CommonController 
{
		//权限管理
    	public function lst()
    	{   
    		$privilege = D("Privilege");
    		$prires = $privilege->privilegetree();
    		$this->assign("prires",$prires);
        	$this->display();
    	}
    	public function add()
    	{
    		$privilege = D("Privilege");
    		if (IS_POST) 
    		{
    			if ($privilege->create()) 
    			{
    				if ($privilege->add()) 
    				{
    					$this->success("添加权限成功!",U("lst"));
    				}
    				else 
    				{
    					$this->error("添加权限失败");
    				}
    			}
    			else 
    			{
    				$this->error($privilege->getError());
    			}
    			return;
    		}
    		
    		$prires = $privilege->privilegetree();
    		$this->assign("prires",$prires);
    		$this->display();
    	}
    	//修改权限
    	public function update()
    	{
    		$privilege = D("privilege");
    		if (IS_POST) 
    		{
    			if ($privilege->create())
    			{
    				if ($privilege->save())
    				{
    					$this->success("修改权限成功!",U("lst"));
    				}
    				else 
    				{
    					$this->error("修改权限失败!");
    				}
    			}
    			else 
    			{
    				$this->error($privilege->getError());
    			}
    			return;
    		}
    		$id = I("id");
    		$prires = $privilege->find($id);
    		$this->assign("prires",$prires);
    		$pris = $privilege->privilegetree();
    		$this->assign("pris",$pris);
    		$this->display();
    	}
    	//删除权限
    	public function delete()
    	{
    		$privilege = D("Privilege");
    		$id = I('id');
    		if ($privilege->delete($id))
    		{
    			$this->success('成功删除权限!',U('lst'));
    		}
    		else
    		{
    			$this->error('删除权限失败!');
    		}
    	}
    	//批量删除权限
    	public function bdelete()
    	{
    		$privilege = D("Privilege");
    		$ids = I('ids');
    		$ids = implode(",", $ids);
    		if ($ids) {
    			if ($privilege->delete($ids))
    			{
    				$this->success("批量删除权限成功",U("lst"));
    			}
    			else
    			{
    				$this->error("批量删除权限失败");
    			}
    		}
    		else
    		{
    			$this->error("未选中任何内容");
    		}
    	}
}