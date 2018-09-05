<?php 
	class AddController extends Controller
	{
		public function actionIndex()
		{
			$this->renderPartial("index");
		}
		//发表留言
		public function actionAdd()
		{
			$model = WordInfo::models();
			$model->sender = Yii::app()->session["userMsg"]["userId"];
			$model->accpter = $_POST["accpter"];
			$model->content = $_POST["content"];
			$result = $model->save();
			
			if($result > 0)
			{
				$this->redirect("index.php?r=show/index");
			}
			else
			{
				$this->redirect("index.php?r=add/index");
			}
		}
	}
?>







