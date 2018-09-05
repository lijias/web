<?php 
	class BbsInfo extends CActiveRecord
	{
		//获得当前模型的对象
		public static function models()
		{
			return new BbsInfo();
		}
		
		//指定表名
		public function tableName()
		{
			return "bbsInfo";//完整的表名
			//return "{{bbsInfo}}";//省略了前缀的表名
		}
	}
?>