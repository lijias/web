<?php 
	namespace Home\Controller;
	use Think\Controller;
	
	class Cache1Controller extends Controller
	{
		public function index()
		{
			//数据缓存(快捷缓存)
			$t2 = S("t2");//从缓存中获得数据
			
			if($t2 == NULL)
			{
				$t2 = time();
				//向缓存中添加数据
				S("t2",$t2,3);
			}
			//清除指定的缓存
			//S("t2",NULL);
			
			
			$this->assign("t1",time());
			$this->assign("t2",$t2);
			$this->assign("t3",time());
			$this->display();
		}
	}
?>





