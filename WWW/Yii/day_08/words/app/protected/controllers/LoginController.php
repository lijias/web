<?php 
	class LoginController extends Controller
	{
		public function actionIndex()
		{
			$this->renderPartial("index");
		}
		//会员登陆
		public function actionLogin()
		{
			//获得表单提交的数据
			$userName = $_POST["userName"];
			$password = $_POST["password"];
			//验证
			$userInfo = UserInfo::models()->find("userName='{$userName}' and password='{$password}'");
			
			if($userInfo == NULL)
			{
				$this->redirect("index.php?r=login/index");
			}
			else
			{
				//session_start();
				//$_SESSION["userMsg"] = $userInfo;
				Yii::app()->session["userMsg"] = $userInfo;
				$this->redirect("index.php?r=show/index");
			}
		}
	}
?>







