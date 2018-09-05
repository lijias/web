<?php 
	//分页类
	class Page
	{
		public $firstRow;//每页记录的起始值
		public $listRows;//每页记录的条数
		public $currentPage;//当前页
		public $totalPage;//总页数
		
		public function __construct($totalRow,$pageSize)
		{
			$this->currentPage = $_GET["p"];//当前页
			$this->currentPage = $this->currentPage==NULL?1:$this->currentPage;
			$this->listRows = $pageSize;
			$this->firstRow = ($this->currentPage-1)*$pageSize;
			$this->totalPage = ceil($totalRow/$pageSize);
		}
		//返回分页栏
		public function show()
		{
			//获得当前的url地址
			$url = $_SERVER["REQUEST_URI"];
			$index = strpos($url,"/p/");
			if($index)
			{
				//代表url中有/p/，截取
				$url = substr($url,0,$index);
			}
			
			
			$str = "{$this->currentPage}/{$this->totalPage}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			
			if($this->currentPage == 1)
			{
				$str .= "首页&nbsp;&nbsp;&nbsp;上一页&nbsp;&nbsp;&nbsp;";
			}
			else
			{
				$str .= "<a href='{$url}/p/1'>首页</a>&nbsp;&nbsp;&nbsp;";
				$str .= "<a href='{$url}/p/".($this->currentPage-1)."'>上一页</a>&nbsp;&nbsp;&nbsp;";
			}
			
			if($this->currentPage == $this->totalPage)
			{
				$str .= "下一页&nbsp;&nbsp;&nbsp;尾页";
			}
			else 
			{
				$str .= "<a href='{$url}/p/".($this->currentPage+1)."'>下一页</a>&nbsp;&nbsp;&nbsp;";
				$str .= "<a href='{$url}/p/{$this->totalPage}'>尾页</a>";
			}
			return $str;
		}
	}
?>