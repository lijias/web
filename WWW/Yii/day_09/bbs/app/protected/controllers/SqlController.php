<?php 
	class SqlController extends Controller
	{
		public function actionIndex()
		{
			$this->setPageTitle("执行sql语句");
			
			//通过执行sql语句，查询记录
			//1、获得数据库封装类的对象
			$db = Yii::app()->db;
			//2、指定要执行sql语句
			$st = $db->createCommand("select * from bbsInfo");
			//3、获得结果集
			$bbsInfo = $st->queryAll();
			
			
			$data = array(
				"bbsInfo"=>$bbsInfo
			);
			$this->render("index",$data);
		}
		//删除记录
		public function actionDelete($bbsId)
		{
			$db = Yii::app()->db;
			$st = $db->createCommand("delete from bbsInfo where bbsId={$bbsId}");
			$result = $st->execute();
			
			$this->redirect("index.php?r=success/index/act/sqldel/rst/{$result}");
		}
	}
?>







