<?php
header("Content-Type:text/html;charset=utf-8");
//分页类
class Page{
	private  $total; //总记录数 52
	private $page_size; //每页显示记录数 5
	private $total_page; //总页数
	public $cur_page;   //当前页
	
	function __construct($total,$page_size){
		$this->total = $total;
		$this->page_size = $page_size;
		//获取总页数
		$this->total_page = $this->getTotalPage();
		$this->cur_page = $this->getCurPage();
	}
	
	//定义出口程序
	function pages(){
		echo "共".$this->total_page.
		     "页&nbsp;当前第".$this->cur_page."页".
		     $this->flist().$this->listnum()
		     .$this->llist();
	}
	
	//共*页
	private function getTotalPage(){
		//ceil(总记录数/每页显示记录数)
		$total_page = ceil($this->total/$this->page_size);	
		return $total_page;
	}	
	
	//当前第*页
	private function getCurPage(){
		//获取当前页
		$cur_page = isset($_GET['p'])?$_GET['p']:1;
		//对当前页的取值范围进行限制 最小1，最大是总页数
		if($cur_page<1){
			$cur_page=1;
		}else if($cur_page>$this->total_page&&$this->total_page!=0){
			$cur_page = $this->total_page;
		}
		return $cur_page;
	}
	
	//上一页 首页
    private function flist(){
    	//上一页=当前页-1
    	$prev = $this->cur_page-1; //2-1=1
    	$lists = "";                           //1-1=0 
    	if($prev>0){  	
	    	$lists = "<a href='?p=".$prev."' class='a_l'>上一页</a>&nbsp;
	    			<a href='?p=1' class='a_l'>首页</a>";
    	}
    	return $lists;    	
    }	
    
    //1 2 3 4 5 6 7 
    private function listnum(){
    	$lists = "";
    	$num = 3; //当前页前后对列的长度
    	//1 2 3
    	for($i=$num;$i>=1;$i--){
    		$n = $this->cur_page-$i;
    		if($n>0){
    			$lists.="&nbsp;<a href='?p=".$n."'>".$n."</a>&nbsp;";
    		}
    	}
    	
    	//4
    	$lists.= "&nbsp;<span>".$this->cur_page."</span>&nbsp;";
    	//5 6 7 
    	for($i=1;$i<=$num;$i++){
    		$n = $this->cur_page+$i;
    		if($n<=$this->total_page){
    			$lists.= "&nbsp;<a href='?p=".$n."'>".$n."</a>&nbsp;";
    		}
    	}
    	return $lists;
    }
    
    //下一页 尾页
    private function llist(){
    	//下一页 = 当前页+1
    	$next = $this->cur_page+1;//10 
    	$lists = "";
    	if($next<=$this->total_page){
    		$lists = "<a href='?p=".$next."' class='a_l'>下一页</a>&nbsp;
    			<a href='?p=".$this->total_page."' class='a_l'>尾页</a>";
    	}
    	return $lists;
    }
} 

?>






