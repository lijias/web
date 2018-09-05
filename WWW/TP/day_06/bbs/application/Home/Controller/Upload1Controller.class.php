<?php 
	namespace Home\Controller;
	use Think\Controller;
	use Think\Upload;//导入上传类
	
	class Upload1Controller extends Controller
	{
		public function index()
		{
			$this->display();
		}
		//上传文件
		public function upload()
		{
			//实例化
			$upload = new Upload();
			//设置最大上传的大小
			$upload->maxSize = 10000000;
			//设置允许上传的扩展名
			$upload->exts = array("jpg","gif");
			//是否创建子目录
			$upload->autoSub = false;
			//设置保存路径的根目录
			$upload->rootPath = "./";
			//保存路径
			$upload->savePath = "public/upfile/";
			//上传文件
			$myFile = $_FILES["myFile"];
			$result = $upload->uploadOne($myFile);
			
			if($result)
			{
				print_r($result);
			}
			else
			{
				$message = $upload->getError();//上传的错误信息
				$this->success($message,__APP__."/Upload1/index");
			}
		}
	}









