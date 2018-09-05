<?php 
	class LoginController extends Controller
	{
		public function indexAction()
		{
			$this->display("login.html");
		}
		public function helloAction()
		{
			Image::verify();
			/*header("content-type:image/jpeg");
			$img = imagecreatetruecolor(75,25);
			imagejpeg($img);*/
		}
	}

	
	
	
	