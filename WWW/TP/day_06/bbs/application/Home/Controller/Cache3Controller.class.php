<?php 
	namespace Home\Controller;
	use Think\Controller;
	
	class Cache3Controller extends Controller
	{
		public function index()
		{
			//查询缓存
			$bbsInfo = M("bbsinfo")->cache(true,10)->select();
			
			/*$bbsInfo = S("bbsInfo");
			if($bbsInfo == NULL)
			{
				$bbsInfo = M("bbsinfo")->select();
				S("bbsInfo",$bbsInfo,10);
			}*/
			
			
			$this->assign("bbsInfo",$bbsInfo);
			$this->display();
		}
	}
?>





