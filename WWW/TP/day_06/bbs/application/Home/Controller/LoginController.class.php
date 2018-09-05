<?php 
	namespace Home\Controller;
	use Think\Controller;
	use Think\Verify;//导入验证码类
	
	class LoginController extends Controller
	{
		public function index()
		{
			$this->display();
		}
		//登陆验证
		public function login()
		{
			//表单验证
			$model = D("UserInfo");//模型对象
			$result = $model->create();//表单验证(拿着表单提交的数据，与Model中的验证规则，进行比对)
			if($result)
			{
				//登陆验证
			}
			else
			{
				//验证失败
				$message = $model->getError();//获得错误提示信息
				$this->success($message,__APP__."/Login/index");
			}
			
			
			//比对验证码
			/*$verify = new Verify();
			$result = $verify->check($_POST["checkCode"]);
			var_dump($result);*/
		}
		//生成验证码
		public function image()
		{
			$verify = new Verify();//实例化
			$verify->length = 4;//字符个数
			$verify->fontSize = 13;//字的大小
			$verify->entry();//生成验证码
			
			
			/*header("content-type:image/jpeg");
			$img = imagecreatetruecolor(75,25);
			imagejpeg($img);*/
		}
	}









