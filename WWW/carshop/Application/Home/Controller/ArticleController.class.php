<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController
{
    public function index()
    {
    	$arid=I("arid");
    	$article=D("article");
    	$articles=$article->find($arid);
    	$this->assign("articles",$articles);
    	//上一页
    	$front=$article->where('id<'.$arid)->order('id desc')->limit('1')->find();
    	if ($front) 
    	{
    		$furl=__CONTROLLER__.'/index/arid/'.$front['id'];
    	}
    	else 
    	{
    		$furl="javascript:void(0);";
    	}
    	//下一页
    	$after=$article->where('id>'.$arid)->order('id asc')->limit('1')->find();
    	if ($after )
    	{
    		$aurl=__CONTROLLER__.'/index/arid/'.$after['id'];
    	}
    	else
    	{
    		$aurl="javascript:void(0);";
    	}
    	$this->assign("furl",$furl);
    	$this->assign("aurl",$aurl);
        $this->display();
    }
}