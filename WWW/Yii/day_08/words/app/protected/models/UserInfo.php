<?php 
	class UserInfo extends CActiveRecord
	{
		public static function models()
		{
			return new UserInfo();
		}
		public function tableName()
		{
			return "userInfo";
		}
	}
?>