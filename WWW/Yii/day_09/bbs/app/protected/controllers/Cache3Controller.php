<?php 
	class Cache3Controller extends Controller
	{
		public function actionIndex()
		{
			$this->setPageTitle("数据缓存");
			
			//向缓存获得数据
			$t2 = Yii::app()->cache->get("t2");
			if($t2 == NULL)
			{
				$t2 = time();
				//向缓存中添加数据
				Yii::app()->cache->set("t2",$t2,5);
			}
			//删除指定的缓存
			//Yii::app()->cache->delete("t2");
			//清除所有缓存
			//Yii::app()->cache->flush();
			
			
			$data = array(
				"t1"=>time(),
				"t2"=>$t2,
				"t3"=>time()
			);
			$this->render("index",$data);
		}
	}
?>









