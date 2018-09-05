<?php 
	namespace Home\Controller;
	
	class IndexController extends BaseController
	{
		public function index()
		{
			//热点要闻
			//$hotNews = M("newsarticles")->join("newstypes on newsarticles.typeId=newstypes.typeId")->order("hints desc")->limit(0,6)->select();
			$hotNews = M()->query("select * from newsarticles a inner join newstypes b on a.typeId=b.typeId order by hints desc limit 0,6");
			//新闻总数
			$newsCount = M("newsarticles")->count();
			//查询所有分类，并带有两条新闻
			$newsTypes = M("newstypes")->select();
			foreach ($newsTypes as $k=>$v)
			{
				$v["news"] = M("newsarticles")->where("typeId={$v["typeId"]}")->order("dateandtime desc")->limit(0,2)->select();
				$newsTypes[$k] = $v;
			}
			
			$this->assign("newsTypes",$newsTypes);
			$this->assign("newsCount",$newsCount);
			$this->assign("hotNews",$hotNews);
			$this->display();
		}
	}
?>







