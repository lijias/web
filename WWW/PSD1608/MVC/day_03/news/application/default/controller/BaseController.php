<?php 
	class BaseController extends Controller
	{
		public function _initialize()
		{
			$newsTypes = M("newstypes")->select();
			
			$this->assign("newsTypes",$newsTypes);
		}
	}
?>