<?php 
	@include_once '../dbio/NewsTypes.php';
	@include_once '../dbio/NewsArticles.php';
	@include_once '../dbio/Reviews.php';
	@include_once '../../dbio/NewsTypes.php';
	@include_once '../../dbio/NewsArticles.php';
	@include_once '../../dbio/Reviews.php';
	
	//静态化的封装类
	class StaticHtml
	{
		public $headerHtml;//header.html代码
		public $footerHtml;//footer.html代码
		public $root = "/news2";//项目根目录
		//public $root = "/php/project1/day_06/news2";//项目根目录
		
		//处理header、footer
		public function __construct()
		{
			//所有分类
			$newsTypes =  NewsTypes::getNewsTypes();
			
			$this->footerHtml = file_get_contents("../templates/footer.html");
			$this->headerHtml = file_get_contents("../templates/header.html");
			
			//替换header里的{#newsTypes#}标记
			$str = "";//存储导航菜单的大字符串
			foreach ($newsTypes as $v)
			{
				$str .= "<a href='{$this->root}/html/{$v["typeId"]}/newstype.html' class='a'>{$v["typeName"]}</a> | ";
			}
			$this->headerHtml = str_replace("{#newsTypes#}",$str,$this->headerHtml);
		}
		//index.html的静态化
		public function index()
		{
			//读取index.html里所有html代码;
			$html = file_get_contents("../templates/index.html");
			//替换header、footer
			$html = str_replace("{#header#}",$this->headerHtml,$html);
			$html = str_replace("{#footer#}",$this->footerHtml,$html);
			//替换{#root#}
			$html = str_replace("{#root#}",$this->root,$html);
			//查询所有分类，并带的两条新闻
			$str = "";
			$newsTypes = NewsTypes::getNewsTypes();
			foreach ($newsTypes as $v)
			{
				$str .= "<div class='twoNews'>
  							<div class='twoNews1'>&nbsp;<a href='{$this->root}/html/{$v["typeId"]}/newstype.html' class='a'>{$v["typeName"]}</a></div>
  							<div class='twoNews2'><a href='{$this->root}/html/{$v["typeId"]}/newstype.html' class='a'>更多</a>&nbsp;</div>
						 </div>";
				$newsInfo = NewsArticles::getNewsTwo($v["typeId"]);
				foreach ($newsInfo as $vv)
				{
					$title = $vv["title"];
					$len = mb_strlen($title,"utf-8");
					if($len > 16)
					{
						$title = mb_substr($title,0,15,"utf-8")."...";
					}
					$str .= "<div class='twoNews3'><img src='images/makealltop.gif'><a href='{$this->root}/html/{$v["typeId"]}/{$vv["articleId"]}.html'>{$title}</a></div>";
				}
			}
			$html = str_replace("{#newTwo#}",$str,$html);
			//热点要闻
			$hotNews = NewsArticles::getHotNews();
			$str = "";
			foreach ($hotNews as $v)
			{
				$str .= "<div class='hotNews1'>
	      				  [<a href='{$this->root}/html/{$v["typeId"]}/newstype.html'>{$v["typeName"]}</a>] <a href='{$this->root}/html/{$v["typeId"]}/{$v["articleId"]}.html'>{$v["title"]}</a> {$v["dateandtime"]} <img src='images/new1.gif'>
	    				 </div>";
			}
			$html = str_replace("{#hotNews#}",$str,$html);
			//新闻总数
			$newsCount = NewsArticles::getNewsCount();
			$html = str_replace("{#newsCount#}",$newsCount,$html);
			//新闻分类导航
			$str = "";
			foreach ($newsTypes as $v)
			{
				$str .= "<div class='newsDh'>
	      					<div class='newsDh1'><a href='{$this->root}/html/{$v["typeId"]}/newstype.html'>{$v["typeName"]}：</a></div>
	      					<div class='newsDh2'>{$v["articleNums"]}</div>
	      					<div class='newsDh3'><a href='{$this->root}/html/{$v["typeId"]}/newstype.html'><img src='images/sch.gif' border='0' class='goImg'></a></div>
	    				 </div>";
			}
			$html = str_replace("{#newsType#}",$str,$html);
			
			
			//向根目录写入html文件
			file_put_contents("../index.html",$html);
		}
		//newstype.html的静态化
		public function newstype()
		{
			//查询所有分类
			$newsTypes = NewsTypes::getNewsTypes();
			//生成所有分类的静态化
			foreach ($newsTypes as $v)
			{
				//读取templates/newstype.html内容
				$html = file_get_contents("../templates/newstype.html");
				
				//替换{#header#}
				$html = str_replace("{#header#}",$this->headerHtml,$html);
				$html = str_replace("{#footer#}",$this->footerHtml,$html);
				//替换{#root#}
				$html = str_replace("{#root#}",$this->root,$html);
				//替换{#typeName#}、{#newsCount#}
				$newsType = NewsTypes::getNewsTypeById($v["typeId"]);
				$html = str_replace("{#typeName#}",$newsType["typeName"],$html);
				$html = str_replace("{#newsCount#}",$newsType["articleNums"],$html);
				//替换{#newsInfo#}
				$newsInfo = NewsArticles::getNewsByTypeId($v["typeId"]);
				$str = "";
				foreach ($newsInfo as $vv)
				{
					$str .= "<div class='newsTypeDiv3'>
	    						<img src='{$this->root}/images/makealltop.gif'><a href='{$this->root}/html/{$v["typeId"]}/{$vv["articleId"]}.html'>{$vv["title"]}</a>
	  						 </div>";
				}
				$html = str_replace("{#newsInfo#}",$str,$html);
				
				
				//在html目录下生成typeId所对应的文件夹
				if(!file_exists("../html/{$v["typeId"]}"))
				{
					mkdir("../html/{$v["typeId"]}");
				}
				//生成每个分类对应的静态化
				file_put_contents("../html/{$v["typeId"]}/newstype.html",$html);
			}
		}
		//news.html的静态化
		public function news()
		{
			$newsInfo = NewsArticles::getAllNews();
			foreach($newsInfo as $v)
			{
				//读取news.html模板里的内容
				$html = file_get_contents("../templates/news.html");
				//替换{#header#}、{#footer}、{#root#}
				$html = str_replace("{#header#}",$this->headerHtml,$html);
				$html = str_replace("{#footer#}",$this->footerHtml,$html);
				$html = str_replace("{#root#}",$this->root,$html);
				//替换{#articleId#}
				$html = str_replace("{#articleId#}",$v["articleId"],$html);
				//替换新闻
				$html = str_replace("{#typeName#}",$v["typeName"],$html);
				$html = str_replace("{#title#}",$v["title"],$html);
				$html = str_replace("{#dateandtime#}",$v["dateandtime"],$html);
				$html = str_replace("{#content#}",$v["content"],$html);
				if($v["imagepath"] == NULL)
				{
					$html = str_replace("{#imagepath#}","",$html);
				}
				else 
				{
					$html = str_replace("{#imagepath#}","<div class='newsImg'><img src='../../{$v["imagepath"]}' width='400' height='300'></div>",$html);
				}
				
				
				//向html/typeId目录下写文件
				file_put_contents("../html/{$v["typeId"]}/{$v["articleId"]}.html",$html);
			}
		}
	}
?>







