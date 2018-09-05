<?php 
	namespace Home\Controller;
	use Think\Controller;
	
	class Cache2Controller extends Controller
	{
		public function index()
		{
			//快速缓存
			$t2 = F("t2");//获得缓存中的数据
			
			if($t2 == NULL)
			{
				$t2 = time();
				//向缓存中添加数据
				F("t2",$t2);
			}
			//清除指定的缓存
			//F("t2",NULL);
			
			$this->assign("t1",time());
			$this->assign("t2",$t2);
			$this->assign("t3",time());
			$this->display();
		}
	}
?>





