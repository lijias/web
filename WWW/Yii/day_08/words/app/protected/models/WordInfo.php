<?php 
	class WordInfo extends CActiveRecord
	{
		public static function models()
		{
			return new WordInfo();
		}
		public function tableName()
		{
			return "wordInfo";
		}
	}
?>