<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Keywords" content="服饰鞋帽" />
  <meta name="Description" content="服饰鞋帽" />
  
<link href="/project2/Public/themes/jindong/stye.css" rel="stylesheet" type="text/css" /> <link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
 
  <title>服饰鞋帽_京东网上商城-综合网购首选，正品行货，机打发票，售后上门取件，省钱又放心 - Powered by ECShop</title>
  <script type="text/javascript" src="/project2/Public/js/common.js"></script><script type="text/javascript" src="/project2/Public/js/global.js"></script><script type="text/javascript" src="/project2/Public/js/compare.js"></script>
  <style type="text/css">
#pager .current{float:left;display:block;padding:3px 5px;line-height:22px;}
</style>
  </head>
<body>
  <div id="container">
    
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div id="globalHeader">
<ul id="top_nav_ul">
			  <div id=navigation1_03 style=" float:right;">
<DL>
  <DT style="POSITION: relative; z-index:999999999">
  
  <A style="float:right; background:url(/project2/Public/themes/jindong/images/biao.gif) 55px center no-repeat; padding-right:23px;display:block; line-height:29px;"  class=alk 
  onmouseover="show_menu('float_menu2','c_fship_c')" 
  onmouseout="hide_menu('float_menu2','c_fship_c')" 
  href="#"  target=_self>客服中心</A>
  
  
  
  <DIV id=float_menu2 onMouseOver="show_menu('float_menu2','c_fship_c')" 
  style="border: #ccc 1px solid; border-top:none;DISPLAY: none; Z-INDEX: 20; LEFT: 0px; top:0; WIDTH:70px; padding:0 0 5px 8px;POSITION: absolute;" 
  onmouseout="hide_menu('float_menu2','c_fship_c')">
  <UL class=cship_list>
    <LI style="padding-bottom:7px; padding-top:5px;"><A target="_blank" href="user.php">客服中心</A> </LI>
    <LI><A target="_blank" href="user.php">会员后台</A> </LI>
    <LI><A target="_blank" href="user.php?act=order_list">我的订单</A> </LI>
    <LI><A target="_blank" href="user.php?act=message_list">我的留言</A> </LI>
   </UL></DIV></DT>
  <DD>
</DD></DL></div> 
<div style="float:right; _padding-top:9px; background: url(/project2/Public/themes/jindong/images/nav_bg2.gif) 0 top no-repeat; height:29px; padding-left:28px;">
				<a href="search.php?intro=promotion"  >今日特价</a> <img style="vertical-align:middle" src="/project2/Public/themes/jindong/images/nav_li.gif">
			
			  		<a href="http://vip.souho.cc/"  >极品源码</a> <img style="vertical-align:middle" src="/project2/Public/themes/jindong/images/nav_li.gif">
			
			  		<a href="flow.php"  >查看购物车</a> <img style="vertical-align:middle" src="/project2/Public/themes/jindong/images/nav_li.gif">
			
			  		<a href="quotation.php"  >报价单</a> <img style="vertical-align:middle" src="/project2/Public/themes/jindong/images/nav_li.gif">
			
			  			</div> 
            
<div  style="float:right; color:#acacac; padding-right:15px;">

	<?php if($headerIsLogin == 1): ?><font id="ECS_MEMBERZONE">
  欢迎【<?php echo (cookie('username')); ?>】光临万联商城！<a href="/project2/index.php/User/Index/index">[会员中心]</a>&nbsp;<a style="color:#ff6600" href="/project2/index.php/Home/User/tuichu">[退出]</a>
 </font>
 <?php else: ?>
  <font id="ECS_MEMBERZONE">
  您好，欢迎您光临万联商城！<a href="/project2/index.php/Home/User/login">[请登录]</a><span>，新用户？</span><a style="color:#ff6600" href="/project2/index.php/Home/User/reg">[免费注册]</a>
 </font><?php endif; ?>
</div>     
            
            
              
  <script type="text/javascript">
function show_menu(obj_s,obj){
	var  s_id = document.getElementById(obj_s);
	var  sc_id = document.getElementById(obj);
	     s_id.style.display = "";
	     //sc_id.className = "ahv";
     	}
     	
  function hide_menu(obj_h,obj){
	var  h_id = document.getElementById(obj_h);
	var  hc_id = document.getElementById(obj);
	     h_id.style.display = "none";
	     //hc_id.className = "alk";
     	}
  </script>
	</ul>
  <p id="logo"><img style="float:left" src="/project2/Public/themes/jindong/images/logo.gif"/></a></p>
  
</div>
<div id="globalNav">
  <ul>
  
 <li><a href="/project2/index.php" <?php if($headerTid == 0): ?>class="cur"<?php endif; ?> >首页</a></li>
 <?php if(is_array($headerTypeArr)): foreach($headerTypeArr as $key=>$v): if($v['id'] == $headerTid): ?><li><a class='cur' href="/project2/index.php/Home/Product/lister/tid/<?php echo ($v["id"]); ?>"  ><?php echo ($v["tname"]); ?></a></li>
 <?php else: ?>
 <li><a href="/project2/index.php/Home/Product/lister/tid/<?php echo ($v["id"]); ?>"  ><?php echo ($v["tname"]); ?></a></li><?php endif; endforeach; endif; ?>
 <li><a href="/project2/index.php/Home/Message/lister">留言板</a></li>
 </ul>
</div>
<div id="globalSearch">
<img style="position:absolute; left:0;" src="/project2/Public/themes/jindong/images/search_box_l.gif">
<img  style="position:absolute; right:0;" src="/project2/Public/themes/jindong/images/search_box_r.gif">
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" style="background:#99CC00; padding-left:13px;">
  
  
<div class="search_left">  
<input style="float:left;" name="keywords" type="text" id="keyword" value="请输入商品关键字" onclick="javascript:this.value='';this.style.color='#333333';" />
<input type="image" src="/project2/Public/themes/jindong/images/search.gif" style="float:left" />
<span class="key2">
   热门搜索 ：
      <a target="_blank" style=" color:#ffcccc" href="search.php?keywords=%E5%93%81%E7%89%8C%E6%97%A5%E7%94%A8%E5%93%81">品牌日用品</a>
      <a target="_blank" style=" color:#ffcccc" href="search.php?keywords=%E5%93%81%E7%89%8C%E6%9C%8D%E8%A3%85">品牌服装</a>
      </span>   
</div>  
<div class="search_right">  
 
<div class="buy_car_bg clearfix" id="ECS_CARTINFO" >
<a href="/project2/index.php/Home/Cart/index/ref/<?php echo ($headerRef); ?>"><span>购物车中有<b><?php echo ($headerCartNum); ?></b>件商品</span>
  <ul class="car_ul">
  <li>
 <div class="f_l">
 <a class="img" href="goods.php?id=4761"><img src="/project2/Public/images/201208/thumb_img/4761_thumb_G_1344186486336.jpg" style="width:50px; height:50px;" alt="产品1"></a>
 <a class="name" href="goods.php?id=4761">产品1</a>
 </div>
 <div class="f_r">
<b>￥1000元×1</b> <br />
<a class="del" href="javascript:" onClick="deleteCartGoods(41)">删除</a>
 </div>
</li>
 <ul>



<script type="text/javascript">
function deleteCartGoods(rec_id)
{
Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
      document.getElementById('ECS_CARTINFO').innerHTML = res.content;
  }
}
</script>

</a>
</div> 
	 
<a href="flow.php?step=checkout"><img src="/project2/Public/themes/jindong/images/qujiesuan.gif"></a>
</div>
  </form>
  
  
  
  
</div>
<script type="text/javascript">
//<![CDATA[
window.onload = function()
{
  fixpng();
}
function checkSearchForm()
{
    if(document.getElementById('keyword').value)
    {
        return true;
    }
    else
    {
		   alert("请输入搜索关键词！");
        return false;
    }
}
//]]>
</script>
<div class="p_w" style="clear:both; overflow:hidden"></div>
  
    <div id="urHere" class="globalModule">
  <h3><a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=296">服饰鞋帽</a></h3>
</div>
<div class="blank"></div>	
    <div id="globalLeft"> 
		  
 <div class="globalModule1">
<h3 class="h32"><b>商品分类</b> <a target="_blank" href="search.php">全部分类>></a></h3>
<div class="my_left_category">
<div class="blank" style="height:0; _display:none"></div>

<h2> <a target="_blank" href="category.php?id=296"> 服饰鞋帽</a></h2>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=324">配饰</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=321">女装</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=325">鞋靴</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=309">男装</a> <span class="des">- 男装衬衫T恤针织外套裤子</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=310">衬衫T恤</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=322">运动</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=323">内衣</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<h2> <a target="_blank" href="category.php?id=297"> 钟表首饰、礼品箱包</a></h2>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=345">钟表</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=307">珠宝首饰</a> <span class="des">- 珠宝首饰</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=308">非主流饰品</a></li>
</ul></div></div></div></div>
<h2> <a target="_blank" href="category.php?id=298"> 运动健康</a></h2>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=337">保健器械</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=305">户外鞋服</a> <span class="des">- 户外服装户外配饰户外鞋袜</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=306">户外服装</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=334">纤体瑜伽</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=338">急救卫生</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=335">体育娱乐</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=332">户外装备</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=336">成人用品</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=353">组合套装</a></li>
<li><a target="_blank" href="category.php?id=354">安全避孕</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=333">运动器械</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<h2> <a target="_blank" href="category.php?id=295"> 电脑软件、办公</a></h2>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=330">办公耗材</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=327">外设产品</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=311">网络产品</a> <span class="des">- 网络产品路由器网卡交换机网络存储3G上网</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=312">路由器</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=331">电脑软件</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=328">电脑整机</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=329">办公设备</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=326">电脑配件</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<h2> <a target="_blank" href="category.php?id=299"> 母婴玩具、乐器</a></h2>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=318">洗护用品</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=315">奶粉</a> <span class="des">- 奶粉</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=319">童车童床</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=303">营养辅食</a> <span class="des">- 营养辅食</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=304">营养品</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=316">尿裤湿巾</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=320">玩具乐器</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=317">喂养用品</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<h2> <a target="_blank" href="category.php?id=300"> 食品饮料、保健品</a></h2>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=343">预防保健</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=340">粮油调味</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=344">健康礼品</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=341">酒饮冲调</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=313">地方特产</a> <span class="des">- 地方特产新疆山东江西辽宁四川重庆</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=314">新疆山东</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=342">营养健康</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=339">休闲食品</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<h2> <a target="_blank" href="category.php?id=294"> 家具厨具、家装</a></h2>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=346">精美餐具</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=350">生活日用</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=347">家纺</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=351">清洁用品</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=348">家具</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=352">宠物用品</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=349">五金灯具</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=301">厨房用具</a> <span class="des">- 厨房用具</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=302">厨用小件</a></li>
</ul></div></div></div></div>
<h2> <a target="_blank" href="category.php?id=21"> 家用电器</a></h2>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=25">生活电器</a> <span class="des">- 吸尘器 电熨斗 饮水机  取暖电器</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=72">收录/音机</a></li>
<li><a target="_blank" href="category.php?id=69">电话机</a></li>
<li><a target="_blank" href="category.php?id=66">净化器</a></li>
<li><a target="_blank" href="category.php?id=63">饮水机</a></li>
<li><a target="_blank" href="category.php?id=76">插座</a></li>
<li><a target="_blank" href="category.php?id=73">浴霸</a></li>
<li><a target="_blank" href="category.php?id=70">清洁机</a></li>
<li><a target="_blank" href="category.php?id=67">电动工具</a></li>
<li><a target="_blank" href="category.php?id=64">取暖电器</a></li>
<li><a target="_blank" href="category.php?id=77">其他生活电器</a></li>
<li><a target="_blank" href="category.php?id=61">吸尘器</a></li>
<li><a target="_blank" href="category.php?id=74">净水设备</a></li>
<li><a target="_blank" href="category.php?id=71">电风扇</a></li>
<li><a target="_blank" href="category.php?id=68">足浴盆</a></li>
<li><a target="_blank" href="category.php?id=65">加湿器</a></li>
<li><a target="_blank" href="category.php?id=62">电熨斗</a></li>
<li><a target="_blank" href="category.php?id=75">电器开关</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=27">个人护理</a> <span class="des">- 剃须刀  电吹风  血压计  按摩器  电动牙刷  剃/脱毛器   美容美发器  健康电器    其它护理电器</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=104">美容美发器</a></li>
<li><a target="_blank" href="category.php?id=101">按摩器</a></li>
<li><a target="_blank" href="category.php?id=98">剃须刀</a></li>
<li><a target="_blank" href="category.php?id=105">健康电器</a></li>
<li><a target="_blank" href="category.php?id=102">电动牙刷</a></li>
<li><a target="_blank" href="category.php?id=99">电吹风</a></li>
<li><a target="_blank" href="category.php?id=106">其他护理电器</a></li>
<li><a target="_blank" href="category.php?id=103">剃/脱毛器</a></li>
<li><a target="_blank" href="category.php?id=100">血压计</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=26">厨房电器</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=88">微波炉</a></li>
<li><a target="_blank" href="category.php?id=85">豆浆机</a></li>
<li><a target="_blank" href="category.php?id=82">电压力锅</a></li>
<li><a target="_blank" href="category.php?id=79">电磁炉</a></li>
<li><a target="_blank" href="category.php?id=95">煮蛋器</a></li>
<li><a target="_blank" href="category.php?id=92">洗碗机</a></li>
<li><a target="_blank" href="category.php?id=89">电烤箱</a></li>
<li><a target="_blank" href="category.php?id=86">电水壶</a></li>
<li><a target="_blank" href="category.php?id=83">电饼铛</a></li>
<li><a target="_blank" href="category.php?id=80">燃气灶</a></li>
<li><a target="_blank" href="category.php?id=96">酸奶机</a></li>
<li><a target="_blank" href="category.php?id=93">面包机</a></li>
<li><a target="_blank" href="category.php?id=90">多用途锅</a></li>
<li><a target="_blank" href="category.php?id=87">咖啡机</a></li>
<li><a target="_blank" href="category.php?id=84">榨汁/搅拌机</a></li>
<li><a target="_blank" href="category.php?id=81">吸油烟机</a></li>
<li><a target="_blank" href="category.php?id=97">其他厨房电器</a></li>
<li><a target="_blank" href="category.php?id=78">电饭煲</a></li>
<li><a target="_blank" href="category.php?id=94">果蔬解毒机</a></li>
<li><a target="_blank" href="category.php?id=91">消毒柜</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=287">服装服饰</a> <span class="des">- 内衣 牛仔裤 衬衫</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=292">裙</a></li>
<li><a target="_blank" href="category.php?id=289">牛仔褲／裙</a></li>
<li><a target="_blank" href="category.php?id=293">内衣</a></li>
<li><a target="_blank" href="category.php?id=290">男装</a></li>
<li><a target="_blank" href="category.php?id=291">T恤</a></li>
<li><a target="_blank" href="category.php?id=288">女装</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=28">汽车用品</a> <span class="des">- </span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=114">充气泵</a></li>
<li><a target="_blank" href="category.php?id=111">车载按摩器</a></li>
<li><a target="_blank" href="category.php?id=108">汽车护理</a></li>
<li><a target="_blank" href="category.php?id=115">车载音视</a></li>
<li><a target="_blank" href="category.php?id=112">冷暖箱</a></li>
<li><a target="_blank" href="category.php?id=109">车内饰品</a></li>
<li><a target="_blank" href="category.php?id=116">其他车载用品</a></li>
<li><a target="_blank" href="category.php?id=113">车载吸尘器</a></li>
<li><a target="_blank" href="category.php?id=110">车载电源</a></li>
<li><a target="_blank" href="category.php?id=107">GPS导航</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=24">大 家 电</a> <span class="des">- 洗衣机  平板电视  电热水器</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=55">家庭音响</a></li>
<li><a target="_blank" href="category.php?id=52">洗衣机</a></li>
<li><a target="_blank" href="category.php?id=60">DVD/US</a></li>
<li><a target="_blank" href="category.php?id=56">燃气热水器</a></li>
<li><a target="_blank" href="category.php?id=53">平板电视</a></li>
<li><a target="_blank" href="category.php?id=57">空调</a></li>
<li><a target="_blank" href="category.php?id=54">电热水器</a></li>
<li><a target="_blank" href="category.php?id=58">冰箱</a></li>
</ul></div></div></div></div>
<h2> <a target="_blank" href="category.php?id=16"> 电脑产品</a></h2>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=34">电脑整机</a> <span class="des">- 笔记本  台式机    服务器   笔记本   配件上网本</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=120">笔记本配件</a></li>
<li><a target="_blank" href="category.php?id=117">笔记本</a></li>
<li><a target="_blank" href="category.php?id=121">上网本</a></li>
<li><a target="_blank" href="category.php?id=118">台式机</a></li>
<li><a target="_blank" href="category.php?id=119">服务器</a></li>
<li><a target="_blank" href="category.php?id=286">推荐组装机</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=35">核心配件</a> <span class="des">- CPU  硬盘  内存  显卡  主板  散热器  刻录机/光驱  声卡/扩展卡</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=127">散热器</a></li>
<li><a target="_blank" href="category.php?id=124">内存</a></li>
<li><a target="_blank" href="category.php?id=128">刻录机/光驱</a></li>
<li><a target="_blank" href="category.php?id=125">显卡</a></li>
<li><a target="_blank" href="category.php?id=122">CPU</a></li>
<li><a target="_blank" href="category.php?id=129">声卡/扩展卡</a></li>
<li><a target="_blank" href="category.php?id=126">主板</a></li>
<li><a target="_blank" href="category.php?id=123">硬盘</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=36">外设产品</a> <span class="des">- 显示器  鼠标  机箱  键盘  电源  移动硬盘  闪存盘  摄像头  外置盒  游戏设备  电视盒  手写板  鼠标垫  插座  UPS电源  线缆  电脑工具  电脑清洁</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=136">移动硬盘</a></li>
<li><a target="_blank" href="category.php?id=133">键盘</a></li>
<li><a target="_blank" href="category.php?id=130">显示器</a></li>
<li><a target="_blank" href="category.php?id=146">线缆</a></li>
<li><a target="_blank" href="category.php?id=143">鼠标垫</a></li>
<li><a target="_blank" href="category.php?id=140">游戏设备</a></li>
<li><a target="_blank" href="category.php?id=137">散/内存卡</a></li>
<li><a target="_blank" href="category.php?id=134">键鼠套装</a></li>
<li><a target="_blank" href="category.php?id=131">鼠标</a></li>
<li><a target="_blank" href="category.php?id=147">电脑工具</a></li>
<li><a target="_blank" href="category.php?id=144">插座</a></li>
<li><a target="_blank" href="category.php?id=141">电视盒</a></li>
<li><a target="_blank" href="category.php?id=138">摄像头</a></li>
<li><a target="_blank" href="category.php?id=135">电源</a></li>
<li><a target="_blank" href="category.php?id=132">机箱</a></li>
<li><a target="_blank" href="category.php?id=148">电脑清洁</a></li>
<li><a target="_blank" href="category.php?id=145">UPS电源</a></li>
<li><a target="_blank" href="category.php?id=142">手写板</a></li>
<li><a target="_blank" href="category.php?id=139">外置盒</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=37">办公设备</a> <span class="des">- 打印机  一体机  投影机  传真机  复印机  扫描仪  碎纸机考勤机  验钞机  塑封机  电子白板   计算器</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=152">复印机</a></li>
<li><a target="_blank" href="category.php?id=149">打印机</a></li>
<li><a target="_blank" href="category.php?id=159">电子白板</a></li>
<li><a target="_blank" href="category.php?id=156">考勤机</a></li>
<li><a target="_blank" href="category.php?id=153">传真机</a></li>
<li><a target="_blank" href="category.php?id=150">一体机</a></li>
<li><a target="_blank" href="category.php?id=160">计算器</a></li>
<li><a target="_blank" href="category.php?id=157">验钞机</a></li>
<li><a target="_blank" href="category.php?id=154">扫描仪</a></li>
<li><a target="_blank" href="category.php?id=151">投影机</a></li>
<li><a target="_blank" href="category.php?id=158">塑封机</a></li>
<li><a target="_blank" href="category.php?id=155">碎纸机</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=38">网络产品</a> <span class="des">- 路由器  网卡交换机  网络存储   3G无线上网卡</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=165">3G无线上网卡</a></li>
<li><a target="_blank" href="category.php?id=162">网卡</a></li>
<li><a target="_blank" href="category.php?id=163">交换机</a></li>
<li><a target="_blank" href="category.php?id=164">网络存储</a></li>
<li><a target="_blank" href="category.php?id=161">路由器</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=39">电脑软件</a> <span class="des">- 深创服务  系统软件   杀毒软件  游戏软件  办公软件  教育软件   工具软件</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=168">杀毒软件</a></li>
<li><a target="_blank" href="category.php?id=172">工具软件</a></li>
<li><a target="_blank" href="category.php?id=169">游戏软件</a></li>
<li><a target="_blank" href="category.php?id=166">深创服务</a></li>
<li><a target="_blank" href="category.php?id=170">办公软件</a></li>
<li><a target="_blank" href="category.php?id=167">系统软件</a></li>
<li><a target="_blank" href="category.php?id=171">教育软件</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=40">办公耗材</a> <span class="des">- 墨盒  刻录碟片  硒鼓  墨粉  色带  光盘附件  纸类</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=178">纸类</a></li>
<li><a target="_blank" href="category.php?id=175">色带</a></li>
<li><a target="_blank" href="category.php?id=179">硒鼓</a></li>
<li><a target="_blank" href="category.php?id=176">墨粉</a></li>
<li><a target="_blank" href="category.php?id=173">墨盒</a></li>
<li><a target="_blank" href="category.php?id=177">光盘附件</a></li>
<li><a target="_blank" href="category.php?id=174">刻录碟片</a></li>
</ul></div></div></div></div>
<h2> <a target="_blank" href="category.php?id=17"> 手机数码</a></h2>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=32">手机通讯</a> <span class="des">-  GSM手机  CDMA手机   双模手机  3G手机  双卡手机   对讲机</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=283">双卡手机</a></li>
<li><a target="_blank" href="category.php?id=281">双模手机</a></li>
<li><a target="_blank" href="category.php?id=279">GSM手机</a></li>
<li><a target="_blank" href="category.php?id=282">3G手机</a></li>
<li><a target="_blank" href="category.php?id=280">CDMA手机</a></li>
<li><a target="_blank" href="category.php?id=190">对讲机</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=33">手机配件</a> <span class="des">- 手机电池  手机充电器    手机耳机  蓝牙耳机  手机存储卡车载配件  数据配件  手机保护套  手机贴膜   其它配件</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=206">手机贴膜</a></li>
<li><a target="_blank" href="category.php?id=203">车载配件</a></li>
<li><a target="_blank" href="category.php?id=200">蓝牙耳机</a></li>
<li><a target="_blank" href="category.php?id=207">其他配件</a></li>
<li><a target="_blank" href="category.php?id=204">数据配件</a></li>
<li><a target="_blank" href="category.php?id=201">手机电池</a></li>
<li><a target="_blank" href="category.php?id=198">手机充电器</a></li>
<li><a target="_blank" href="category.php?id=205">手机保护套</a></li>
<li><a target="_blank" href="category.php?id=202">手机存储卡</a></li>
<li><a target="_blank" href="category.php?id=199">手机耳机</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=208">数码影像</a> <span class="des">- 便携相机  单反相机    数码摄像机  单反镜头  镜头滤镜  闪光灯/手柄   摄影配件</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=213">镜头滤镜</a></li>
<li><a target="_blank" href="category.php?id=210">单反相机</a></li>
<li><a target="_blank" href="category.php?id=214">闪光灯/手柄</a></li>
<li><a target="_blank" href="category.php?id=211">数码摄像机</a></li>
<li><a target="_blank" href="category.php?id=215">摄影配件</a></li>
<li><a target="_blank" href="category.php?id=212">单反镜头</a></li>
<li><a target="_blank" href="category.php?id=209">便携相机</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=30">数码配件</a> <span class="des">- 存储卡  电池/充电器   读卡器  数码包  三角架/云台  录像带  数码贴膜  清洁用品  MP3/MP4配件  照片打印机  数码伴侣</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=222">数码贴膜</a></li>
<li><a target="_blank" href="category.php?id=219">数码包</a></li>
<li><a target="_blank" href="category.php?id=216">存储卡</a></li>
<li><a target="_blank" href="category.php?id=226">数码伴侣</a></li>
<li><a target="_blank" href="category.php?id=223">清洁用品</a></li>
<li><a target="_blank" href="category.php?id=220">三脚架/云台</a></li>
<li><a target="_blank" href="category.php?id=217">电池/充电器</a></li>
<li><a target="_blank" href="category.php?id=224">MP3/MP4配件</a></li>
<li><a target="_blank" href="category.php?id=221">录像带</a></li>
<li><a target="_blank" href="category.php?id=218">读卡器</a></li>
<li><a target="_blank" href="category.php?id=225">相片打印机</a></li>
</ul></div></div></div></div>
<div class="h2_cat" onmouseover="this.className='h2_cat active_cat'" onmouseout="this.className='h2_cat'">
<h3>
<div class="xianzhi">
<a target="_blank" href="category.php?id=31">时尚影音</a> <span class="des">- MP3/MP4  苹果配件   音箱  耳机  电子词典  电子教育  录音笔  PDA  数码相框  麦克风  高清播放器  专业音频娱乐设  备数字电视</span>
</div>
</h3>
<div class="h3_cat">
<div class="shadow">
<div class="shadow_border">
<ul> 
<li><a target="_blank" href="category.php?id=238">专业音频</a></li>
<li><a target="_blank" href="category.php?id=235">数码相框</a></li>
<li><a target="_blank" href="category.php?id=232">电子教育</a></li>
<li><a target="_blank" href="category.php?id=229">音箱</a></li>
<li><a target="_blank" href="category.php?id=239">娱乐设备</a></li>
<li><a target="_blank" href="category.php?id=236">麦克风</a></li>
<li><a target="_blank" href="category.php?id=233">录音笔</a></li>
<li><a target="_blank" href="category.php?id=230">耳机</a></li>
<li><a target="_blank" href="category.php?id=227">MP3/MP4</a></li>
<li><a target="_blank" href="category.php?id=240">数字电视</a></li>
<li><a target="_blank" href="category.php?id=237">高清播放器</a></li>
<li><a target="_blank" href="category.php?id=234">PDA</a></li>
<li><a target="_blank" href="category.php?id=231">电子词典</a></li>
<li><a target="_blank" href="category.php?id=228">苹果配件</a></li>
</ul></div></div></div></div>
<div class="blank"></div>
</div>
</div>
<div class="blank"></div>
<style type="text/css">
<!--
.age_box a{float: left; height:22px; line-height:22px; width:92px; background:url(/project2/Public/themes/jindong/images/biao6.gif) 0 center no-repeat; padding-left:10px;font-family:Arial, Helvetica, sans-serif;color:#333333}
-->
</style>
<div class="blank"></div>      
<div class="box" id='history_div'>
<div id="globalHistory" class="globalModule" >
<h3 class="h3_3" style="border-bottom:1px dotted #efefef"><div id="list_t_l"><div id="list_t_r"><b style="color:#333">最近浏览过的商品</b></div></div></h3>
<div id="global_box" > 
  <ul id="history_list" class="boxCenterList">
      </ul>
</div>
</div>
</div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>
<div class="blank"></div><div id="brandList" class="globalModule">
<h3><div id="list_t_l"><div id="list_t_r"><b>品牌专卖店</b></div></div></h3>
<div id="global_box"> 
<div style="clear:both"></div>
    		        <a href="category.php?id=296&amp;brand=241"><img class="brand_img" src="data/brandlogo/1260949239463142231.gif" alt="贝尔金 (13)" /></a>
    		    		        <a href="category.php?id=296&amp;brand=240"><img class="brand_img" src="data/brandlogo/1260929427660619297.jpg" alt="新蓝 (3)" /></a>
    		    		        <a href="category.php?id=296&amp;brand=275"><img class="brand_img" src="data/brandlogo/1262819801281464875.jpg" alt="三星 (2)" /></a>
    		        
    
    <div style="clear:both"></div> 
    <p class="more"><a href="brand.php"> 更多>></a></p>
  </div>
	
   
</div>
<div class="blank"></div>
    </div>
    <div id="globalBigRight">
	
     
<div class="cate_hot">
<div class="nei">
<div class="nei2">
<div style="padding:40px 0 0 20px;">
<div class="item hot_item2">
      <p  class="pic"><a href="goods.php?id=4765"><img style="width:100px; height:100px;margin:0 auto; float:left; text-align:center" src="/project2/Public/images/no_picture.gif" alt="产品5"/></a></p>
      
      <div class="hot_item2_2">
      
      <p  class="name"><a href="productDetail.html" title="产品5">产品5<span></span></a>
      
      
      
      </p> 
      
      <p align="center" class="price">
     今日特价：<font class="shop_s">￥11111111元                </font>
      </p>
      <div style="padding-top:5px;">
     <a href="javascript:addToCart(4765)"> <img src="/project2/Public/themes/jindong/images/bnt1.gif"> </a>
      </div>
      
      </div>
      
      
     </div>
 <div class="item hot_item2">
      <p  class="pic"><a href="productDetail.html"><img style="width:100px; height:100px;margin:0 auto; float:left; text-align:center" src="/project2/Public/images/no_picture.gif" alt="产品4"/></a></p>
      
      <div class="hot_item2_2">
      
      <p  class="name"><a href="productDetail.html" title="产品4">产品4<span></span></a>
      
      
      
      </p> 
      
      <p align="center" class="price">
     今日特价：<font class="shop_s">￥11111111元                </font>
      </p>
      <div style="padding-top:5px;">
     <a href="javascript:addToCart(4764)"> <img src="/project2/Public/themes/jindong/images/bnt1.gif"> </a>
      </div>
      
      </div>
      
      
     </div>
 <div class="item hot_item2">
      <p  class="pic"><a href="productDetail.html"><img style="width:100px; height:100px;margin:0 auto; float:left; text-align:center" src="/project2/Public/images/no_picture.gif" alt="产品2"/></a></p>
      
      <div class="hot_item2_2">
      
      <p  class="name"><a href="productDetail.html" title="产品2">产品2<span></span></a>
      
      
      
      </p> 
      
      <p align="center" class="price">
     今日特价：<font class="shop_s">￥11111111元                </font>
      </p>
      <div style="padding-top:5px;">
     <a href="javascript:addToCart(4762)"> <img src="/project2/Public/themes/jindong/images/bnt1.gif"> </a>
      </div>
      
      </div>
      
      
     </div>
 </div>  
</div>
</div>
</div>
<div class="blank"></div>
    
    
      
<div class="box">
 <div class="box_1">
 
<style type="text/css">
<!--
.Select {
background:url(/project2/Public/themes/jindong/images/tag_title2.gif) repeat-x 0 top;
margin-bottom:10px; float:left; width:100%
}
.Select dl {
border-top:1px dashed #e7cdae;
overflow:hidden; padding:5px 0; float:left; width:100%;
}
.Select dt {
float:left;
font-weight:bold;
text-align:right;
width:100px; 
}
.Select dt, .Select dd { 
}
.Select dd {
float:left;
overflow:hidden;
}
.Select dt, .Select dd {
}
.Select dd div {
float:left;
margin-right:15px;
}
.Select dd a:hover,.Select dd a:hover span, {
background:#4598D2 none repeat scroll 0 0;
color:#FFFFFF;
}
.Select dd a { color:#005aa0;
display:block;
text-decoration:none;
white-space:nowrap;
}
a:link, a:visited {
color:#222222;
}
a {
text-decoration:none;
}
.select_all{background:#4598d2; padding:0 2px;color:#FFF}
.Select dd .select_all {}
-->
</style>
  <div class="Select">
 <div style="color:#cc3300; font-size:14px; font-weight:bold; padding:9px;" >商品筛选</div>
  	        <dl>
            <dt>品牌：</dt>
            <dd>
                                                <div class="select_all">全部</div>
                                                                <div> <a href="category.php?id=296&amp;brand=240&amp;price_min=0&amp;price_max=0">新蓝</a> </div>
                                                                <div> <a href="category.php?id=296&amp;brand=241&amp;price_min=0&amp;price_max=0">贝尔金</a> </div>
                                                                <div> <a href="category.php?id=296&amp;brand=275&amp;price_min=0&amp;price_max=0">三星</a> </div>
                                            </dd>
        </dl>
        <div style=" clear:both"></div>
        
    	  
          
          
          
 
	</div>
</div></div>
<div class="blank5"></div>
	  
    
    
          
<div id="globalGoodsList" class="globalModule">
  <div class="globalGoodsListMenu2">
    <form method="get" action="#" class="sort" name="listform">
      <span style="position:relative; top:-5px;">排序：</span>
        <a href="category.php?category=296&display=list&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list"><img src="/project2/Public/themes/jindong/images/goods_id_DESC.gif" alt="按上架时间排序"></a>
  <a href="category.php?category=296&display=list&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list"><img src="/project2/Public/themes/jindong/images/shop_price_default.gif" alt="按价格排序"></a>
  <a href="category.php?category=296&display=list&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=last_update&order=DESC#goods_list"><img src="/project2/Public/themes/jindong/images/last_update_default.gif" alt="按更新时间排序"></a>
	   
  <form method="GET" class="sort" name="listform" style="float:right;">
  <span style="margin-bottom:2px;" class="globalGoodsListMenuDisplay">显示方式：
  <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="/project2/Public/themes/jindong/images/btn_display_mode_list_act.gif" alt=""></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="/project2/Public/themes/jindong/images/btn_display_mode_grid.gif" alt=""></a>
  <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="/project2/Public/themes/jindong/images/btn_display_mode_text.gif" alt=""></a>&nbsp;&nbsp;
      
      
      
      
      
      
  <input type="hidden" name="category" value="296" />
  <input type="hidden" name="display" value="list" id="display" />
  <input type="hidden" name="brand" value="0" />
  <input type="hidden" name="price_min" value="0" />
  <input type="hidden" name="price_max" value="0" />
  <input type="hidden" name="filter_attr" value="0" />
  <input type="hidden" name="page" value="1" />
  <input type="hidden" name="sort" value="goods_id" />
  <input type="hidden" name="order" value="DESC" />
      
      
      
     </span>
    </form>
  </div>
  
 <div class="list_b">
<span>
总计 <b><?php echo ($num); ?></b>  个记录</span>
</div>
    <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
      <div class="itemList">
      <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><div class="item">
      <p class="pic">
        <a href="/project2/index.php/Home/Product/detail/id/<?php echo ($v["id"]); ?>/tid/<?php echo ($_GET['tid']); ?>"><img src="/project2/Public/Product/<?php echo ($v["imagename"]); ?>" alt="<?php echo ($v["title"]); ?>" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="/project2/index.php/Home/Product/detail/id/<?php echo ($v["id"]); ?>/tid/<?php echo ($_GET['tid']); ?>" title="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥<?php echo ($v["price"]); ?>元</span><br />
                              美智价：<span class="goodsPrice">￥<?php echo ($v["userprice"]); ?>元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4779)"><img src="/project2/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4779)"><img src="/project2/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4779,'产品20')"><img src="/project2/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div><?php endforeach; endif; ?>
     
      </div>
      </form>
  </div>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
				<div class="blank"></div>
 <div id="pager">
 <?php echo ($pageStr); ?>
 </div>


    
      
    </div>
    <div class="blank"></div>
<div id="globalHelp" class="globalModule">
<div class="clearfix">
<dl>
<dt>
<img src="/project2/Public/themes/jindong/images/help_1.gif" />
<a href='article_cat.php?id=5' title="购物指南">购物指南</a>
</dt>
<div class="blank5"></div>
    <dd><a href="article.php?id=9" title="购物流程">购物流程</a></dd>
    <dd><a href="article.php?id=10" title="会员介绍">会员介绍</a></dd>
    <dd><a href="article.php?id=36" title="常见问题">常见问题</a></dd>
  </dl>
<dl>
<dt>
<img src="/project2/Public/themes/jindong/images/help_2.gif" />
<a href='article_cat.php?id=7' title="配送方式">配送方式</a>
</dt>
<div class="blank5"></div>
    <dd><a href="article.php?id=15" title="快递运输">快递运输</a></dd>
    <dd><a href="article.php?id=16" title="特快专递(EMS)">特快专递(EMS)</a></dd>
    <dd><a href="article.php?id=43" title="上门自提">上门自提</a></dd>
  </dl>
<dl>
<dt>
<img src="/project2/Public/themes/jindong/images/help_3.gif" />
<a href='article_cat.php?id=10' title="支付方式">支付方式</a>
</dt>
<div class="blank5"></div>
    <dd><a href="article.php?id=18" title="货到付款">货到付款</a></dd>
    <dd><a href="article.php?id=19" title="在线支付">在线支付</a></dd>
    <dd><a href="article.php?id=20" title="银行转账">银行转账</a></dd>
    <dd><a href="article.php?id=37" title="分期付款">分期付款</a></dd>
  </dl>
<dl>
<dt>
<img src="/project2/Public/themes/jindong/images/help_4.gif" />
<a href='article_cat.php?id=8' title="售后服务">售后服务</a>
</dt>
<div class="blank5"></div>
    <dd><a href="article.php?id=21" title="退换货原则">退换货原则</a></dd>
    <dd><a href="article.php?id=22" title="退换货流程">退换货流程</a></dd>
    <dd><a href="article.php?id=23" title="价格保护">价格保护</a></dd>
    <dd><a href="article.php?id=38" title="退款说明">退款说明</a></dd>
  </dl>
<dl>
<dt>
<img src="/project2/Public/themes/jindong/images/help_5.gif" />
<a href='article_cat.php?id=9' title="特色服务">特色服务</a>
</dt>
<div class="blank5"></div>
    <dd><a href="article.php?id=24" title="商品拍卖">商品拍卖</a></dd>
    <dd><a href="article.php?id=25" title="DIY装机">DIY装机</a></dd>
    <dd><a href="article.php?id=26" title="上门服务">上门服务</a></dd>
    <dd><a href="article.php?id=39" title="上门装机">上门装机</a></dd>
    <dd><a href="article.php?id=40" title="香港代购">香港代购</a></dd>
  </dl>
</div>
<div class="blank"></div>
<div class="blank"></div>
<div class="serve clearfix">
<ul  class="line"><img src="/project2/Public/themes/jindong/images/serve_1.gif"></ul>
<ul  class="line"><img src="/project2/Public/themes/jindong/images/serve_2.gif"></ul>
<ul  class="line"><img src="/project2/Public/themes/jindong/images/serve_3.gif"></ul>
<ul ><img src="/project2/Public/themes/jindong/images/serve_4.gif"></ul>
</div>
</div>
<div class="blank"></div>
    <div id="globalFooter">
<p id="footerNav">
        <a href="article.php?id=1" >关于我们</a> 
        |
          <a href="article.php?id=2" >联系我们</a> 
        |
          <a href="article.php?id=3" >广告服务</a> 
        |
          <a href="http://jetli.taobao.com/" >品牌加盟</a> 
        |
          <a href="wholesale.php" >批发方案</a> 
        |
          <a href="myship.php" >配送方式</a> 
       | <script type="text/javascript" src="/project2/Public/js/dialog3.js"></script>
  </p>
  <p id="copyright">&copy; 2005-2012 京东网上商城 版权所有，并保留所有权利。</p>
   
    
  <p id="address">
        
  </p>
  <p id="phone">
  	</p>
	  <p id="imList">
            <img src="http://wpa.qq.com/pa?p=1:393769718:4" alt="QQ" /> <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=393769718&amp;Site=京东网上商城&amp;Menu=yes" target="_blank">393769718</a>
                    <img src="http://amos1.taobao.com/online.ww?v=2&amp;uid=tddt8&amp;s=2" alt="淘宝旺旺" /><a href="http://amos1.taobao.com/msg.ww?v=2&amp;uid=tddt8&amp;s=2" target="_blank"> tddt8</a>
                                              </p>
  <p id="qureyInfo">共执行 4 个查询，用时 0.010631 秒，在线 3 人，Gzip 已禁用，占用内存 3.356 MB<img src="api/cron.php?t=1344195212" alt="" style="width:0px;height:0px;" /></p>
    
    <div align="center" ></div>
<div class="blank"></div>
<div style="text-align:center">
<a href="http://www.miibeian.gov.cn"><img src="/project2/Public/themes/jindong/images/fot_1.gif"></a> <a href="#"><img src="/project2/Public/themes/jindong/images/fot_2.gif"></a> <a href="http://police.cnool.net/infoCategoryListAction.do?act=init"><img src="/project2/Public/themes/jindong/images/fot_3.gif"></a>
 </div>      
</div> 
  </div>
</body>
</html>