<?php 
	namespace Home\Controller;
	use Think\Controller;
	use Think\Upload;//导入上传类
	
	class Upload2Controller extends Controller
	{
		public function index()
		{
			$this->display();
		}
		//多文件上传
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
			$result = $upload->upload();
			
			if($result)
			{
				print_r($result);
			}
			else
			{
				$this->success($upload->getError(),__APP__."/Upload2/index");
			}
		}
	}









