<?php
namespace Admin\Controller;


	class JobController extends CommonController 
{
		//招聘管理
    	public function lst()
    	{
    		$job=D("job");
    		$count = $job->count();
    		$page = new \Think\Page($count,2);
    		$show = $page->show();
    		$list = $job->field('id,title,name,sex,bplace,education')->limit($page->firstRow,$page->listRows)->select();
    		$this->assign("list",$list);
    		$this->assign("page",$show);
    		$this->assign("job",$job);
        	$this->display();
    	}
    	//查看
    	public function detail()
    	{
    		$id=I("id");
    		$job=D("job");
    		$jobs=$job->find($id);
    		$this->assign("jobs",$jobs);
    		$this->display();
    	}
    	//删除
    	public function delete()
    	{
    		$id=I("id");
    		$job=D("job");
    		if ($job->delete($id)) 
    		{
    			$this->success("删除求职信息成功!",U("lst"));
    		}
    		else 
    		{
    			$this->error("删除求职信息失败!");
    		}
    	}
    	//批量删除
    	public function bdelete()
    	{
    		$ids=I("ids");
    		$job=D("job");
    		$ids=implode(",", $ids);
    		if ($ids) 
    		{
    			if ($job->delete($ids))
    			{
    				$this->success("批量删除求职信息成功!",U("lst"));
    			}
    			else
    			{
    				$this->error("批量删除求职信息失败!");
    			}
    		}
    		else 
    		{
    			$this->error("未选中任何内容!");
    		}	
    	}
}