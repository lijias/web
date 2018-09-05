<?php 
	class LoginController extends Controller
	{
		public function actionIndex()
		{
			$this->setPageTitle("会员登陆");
			
			$this->render("index");
		}
		//登陆
		public function actionLogin()
		{
			
		}
		//自动加载类
		public function actions()
		{
			return array(
				//系统自带的验证码
				"syscode"=>array(
					"class"=>"system.web.widgets.captcha.CCaptchaAction"
				),
				//自定义的验证码
				"mycode"=>array(
					"class"=>"application.components.Image"
				),
			);
		}
	}











