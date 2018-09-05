<?php
namespace Home\Controller;

class CartController extends BaseController
{
	function isLogin()
	{
		if (empty($_COOKIE["username"])) 
		{
			$carUrl=$_SERVER['HTTP_REFERER'];
			if ($carUrl) 
			{
				$carUrl=str_replace("/", "@", $carUrl);
			}
			else 
			{
				$carUrl="";
			}			
			$this->error("请先登录",U("Home/User/login",array('carUrl'=>$carUrl)));
			exit;
		}
	}
	function index()
	{
		$cart=M("cart");
		$userid=$_COOKIE["userid"];
		//判断是否有数据传输过来
		if ($_POST) 
		{
			//如果有添加商品
				$data['buynum']=I("number");
				$data['productid']=I("id");
				$data['pubtime']=time();
				$data['userid']=$_COOKIE["userid"];
				$data['ip']=$_SERVER['REMOTE_ADDR'];
				$productid=I("id");
				$checkArr=$cart->where("userid={$userid}&&productid={$productid}")->find();	
				//判断产品是否已经存在			
				if ($checkArr['productid']) 
				{
					//已存在修改产品数量
					$productid=$checkArr['productid'];
					$buynum=$checkArr['buynum']+$data['buynum'];
					$re=$cart->execute("update cart set buynum={$buynum} where productid={$productid}");
				}
				else 
				{
					//不存在直接添加产品
					$re=$cart->data($data)->add();
				}
				if ($re)
				{
					$this->redirect("Home/Cart/index");
				}
		}
		//没有传输数据显示购物车首页
		//$arr=$cart->alias('c')->join("product p on c.productid=p.id")->where("userid={$userid}")->select();
		$arr=$cart->query("SELECT c.*,p.title,p.style,p.saleprice FROM cart c INNER JOIN product p on c.productid=p.id  WHERE ( userid={$userid} )");
		$money="";
		$images=M("productimage");
		foreach ($arr as $k=>$v)
		{
			//数量*价格的出小计
			$money=$v['buynum']*$v['saleprice'];
			//把小计存入数组中
			$arr[$k]['money']=$money;
			//总小计
			$cmoney+=$money;
			//得到当前产品id
			$productid=$v['productid'];
			//查询当前产品的一张图品
			$imageArr=$images->where("productid={$productid}")->find();
			//把图片名存入数组中
			$arr[$k]['image']=$imageArr['imagename'];
		}
		$this->assign("cmoney",$cmoney);		
		$this->assign("arr",$arr);
		$this->display();	
	}
	function delete()
	{
		$id=I("id");
		if (M("cart")->where("id={$id}")->delete()) 
		{
			$this->success("删除商品成功",U("Home/Cart/index"));
		}
		else 
		{
			$this->error("删除商品失败");
		}
	}
	function deleteAll()
	{
		$userid=$_COOKIE["userid"];
		if (M("cart")->where("userid={$userid}")->delete())
		{
			$this->success("清空购物车成功",U("Home/Cart/index"));
		}
		else
		{
			$this->error("清空购物车删除失败");
		}
	}
	function checkout()
	{
		$userid=$_COOKIE["userid"];
		$arr=M("addrinfo")->where("userid=$userid")->select();
		$pro=M("cart")->where("userid=$userid")->select();
		$productArr=array();
		$total=0;
		foreach ($pro as $k=>$v)
		{
			$proid=$v['productid'];
			$productArr[$k]=M("product")->where("id=$proid")->find();
			$productArr[$k]['num']=$v['buynum'];
			$xj = $v['buynum']*$productArr[$k]['saleprice'];
			$productArr[$k]['xj']=$xj;
			$total +=$xj;
		} 
		$checkID=M("addrinfo")->field("id")->where("userid=$userid")->find();
		$this->assign("checkId",$checkID);		
		$this->assign("total",$total);		 
		$this->assign("productArr",$productArr);
		$this->assign("arr",$arr);
		$this->display();
	}
}