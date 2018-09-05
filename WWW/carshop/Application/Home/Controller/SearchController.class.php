<?php
namespace Home\Controller;
use Think\Controller;
class SearchController extends CommonController
{
public function index()
    	{
    		$article = D("article");
    		$where = 1;
    		$kw=I("kws");
    		$search=I("cateid");
    		if ($kw)
    		{
    			$where.=' AND title LIKE "%'.$kw.'%"';
    		}
    		if ($search)
    		{
    			$where.=' AND cateid LIKE "%'.$search.'%"';
    		}
    		$count = $article->where($where)->count();
    		$page = new \Think\Page($count,2);
    		$show = $page->show();
    		$list = $article->where($where)->limit($page->firstRow,$page->listRows)->select();
    		$this->assign("list",$list);
    		$this->assign("page",$show);
    		if ($search==150) 
    		{
    			$view='list';
    		}
    		elseif($search==149||$search==151)
    		{
    			$view='carlist';
    		}
    		elseif($search==161)
    		{
    			$view='rylist';
    		}
        	$this->display($view);
    	}
}