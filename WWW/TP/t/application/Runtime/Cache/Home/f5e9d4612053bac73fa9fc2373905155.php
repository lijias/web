<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Keywords" content="" />
  <meta name="Description" content="" />
  
<link href="/TP/t/Public/themes/jindong/stye.css" rel="stylesheet" type="text/css" /> <link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
  <title>产品1_衬衫T恤_男装_服饰鞋帽_京东网上商城-综合网购首选，正品行货，机打发票，售后上门取件，省钱又放心 - Powered by ECShop</title> 
<script type="text/javascript" src="/TP/t/Public/js/common.js"></script><script type="text/javascript" src="/TP/t/Public/themes/jindong/js/action.js"></script>
<script type="text/javascript" src="/TP/t/Public/themes/jindong/js/mzp-packed-me.js"></script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
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
  
  <A style="float:right; background:url(/TP/t/Public/themes/jindong/images/biao.gif) 55px center no-repeat; padding-right:23px;display:block; line-height:29px;"  class=alk 
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
<div style="float:right; _padding-top:9px; background: url(/TP/t/Public/themes/jindong/images/nav_bg2.gif) 0 top no-repeat; height:29px; padding-left:28px;">
				<a href="search.php?intro=promotion"  >今日特价</a> <img style="vertical-align:middle" src="/TP/t/Public/themes/jindong/images/nav_li.gif">
			
			  		<a href="http://vip.souho.cc/"  >极品源码</a> <img style="vertical-align:middle" src="/TP/t/Public/themes/jindong/images/nav_li.gif">
			
			  		<a href="/TP/t/index.php/Home/Cart/index"  >查看购物车</a> <img style="vertical-align:middle" src="/TP/t/Public/themes/jindong/images/nav_li.gif">
			
			  		<a href="quotation.php"  >报价单</a> <img style="vertical-align:middle" src="/TP/t/Public/themes/jindong/images/nav_li.gif">
			
			  			</div> 
            
<div  style="float:right; color:#acacac; padding-right:15px;">         
   <script type="text/javascript" src="/TP/t/Public/js/transport.js"></script>
   <script type="text/javascript" src="/TP/t/Public/js/utils.js"></script>   
   <font id="ECS_MEMBERZONE"><?php if($username != ''): ?>【<?php echo ($username); ?>】<?php else: ?>您好<?php endif; ?>，欢迎您光临万联商城！
   <?php if($username == ''): ?><a href="/TP/t/index.php/Home/User/login">[请登录]</a>
   <span>，新用户？</span>
   <a style="color:#ff6600" href="/TP/t/index.php/Home/User/reg">[免费注册]</a>
   <?php else: ?>
   <a href="/TP/t/index.php/Home/User/index">[会员中心]</a>
   <a style="color:red" href="/TP/t/index.php/Home/User/out">[退出]</a><?php endif; ?>
  
 
<script type="text/javascript">
//<![CDATA[

// 会员登录
function signIn()
{
  var frm = document.forms['ECS_LOGINFORM'];

  if (frm)
  {
    var username = frm.elements['username'].value;
    var password = frm.elements['password'].value;
    var captcha = '';
    if (frm.elements['captcha'])
    {
      captcha = frm.elements['captcha'].value;
    }
    if (username.length == 0 || password.length == 0)
    {
       alert("对不起，您必须完整填写用户名和密码。");
        return;
    }
    else
    {
       Ajax.call('user.php?act=signin', 'username=' + username + '&password=' + encodeURIComponent(password) + '&captcha=' + captcha, signinResponse, "POST", "TEXT");
    }
  }
  else
  {
    alert('Template error!');
  }
}

function signinResponse(result)
{
  var userName = document.forms['ECS_LOGINFORM'].elements['username'].value;
  var mzone = document.getElementById("ECS_MEMBERZONE");
  var res   = result.parseJSON();

  if (res.error > 0)
  {
    // 登录失败
    alert(res.content);
    if(res.html)
	{
      mzone.innerHTML = res.html;
	  document.forms['ECS_LOGINFORM'].elements['username'].value = userName;
	}
  }
  else
  {
    if (mzone)
    {
      mzone.innerHTML = res.content;
			evalscript(res.ucdata);
    }
    else
    {
      alert("Template Error!");
    }
  }
}

//]]>
</script>
 </font> 
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
  <p id="logo"><img style="float:left" src="/TP/t/Public/themes/jindong/images/logo.gif"/></a></p>
  
</div>
<div id="globalNav">
  <ul>
<li><a href="/TP/t/index.php" <?php if($tid == 0): ?>class="cur"<?php endif; ?>>首页</a></li>
<?php if(is_array($pArr)): foreach($pArr as $key=>$v): ?><li><a <?php if($v['id'] == $tid): ?>class="cur"<?php endif; ?> href="/TP/t/index.php/Home/product/lst/tid/<?php echo ($v["id"]); ?>"  ><?php echo ($v["tname"]); ?></a></li><?php endforeach; endif; ?>
 <li><a href="message.html"  >留言板</a></li>
 </ul>
</div>
<div id="globalSearch">
<img style="position:absolute; left:0;" src="/TP/t/Public/themes/jindong/images/search_box_l.gif">
<img  style="position:absolute; right:0;" src="/TP/t/Public/themes/jindong/images/search_box_r.gif">
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" style="background:#99CC00; padding-left:13px;">
  
  
<div class="search_left">  
<input style="float:left;" name="keywords" type="text" id="keyword" value="请输入商品关键字" onclick="javascript:this.value='';this.style.color='#333333';" />
<input type="image" src="/TP/t/Public/themes/jindong/images/search.gif" style="float:left" />
<span class="key2">
   热门搜索 ：
      <a target="_blank" style=" color:#ffcccc" href="search.php?keywords=%E5%93%81%E7%89%8C%E6%97%A5%E7%94%A8%E5%93%81">品牌日用品</a>
      <a target="_blank" style=" color:#ffcccc" href="search.php?keywords=%E5%93%81%E7%89%8C%E6%9C%8D%E8%A3%85">品牌服装</a>
      </span>   
</div>  
<div class="search_right">  
 
<div class="buy_car_bg clearfix" id="ECS_CARTINFO" >
<a href="/TP/t/index.php/Home/Cart/index"><span>购物车中有<b><?php if($headerCount != 0 ): echo ($headerCount); else: ?>0<?php endif; ?></b>件商品</span>
  <ul class="car_ul">
  <li>
 <div class="f_l">
 <a class="img" href="goods.php?id=4761">
 	<img src="/TP/t/Public/images/201208/thumb_img/4761_thumb_G_1344186486336.jpg" style="width:50px; height:50px;" alt="产品1">
 </a>
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
<?php if($headerCount != 0 ): ?><a href="/TP/t/index.php/Home/Cart/checkout"><img src="/TP/t/Public/themes/jindong/images/qujiesuan.gif"></a>
<?php else: ?>
<a href="/TP/t/index.php/Home/product/lst/tid/1"><img src="/TP/t/Public/themes/jindong/images/qujiesuan.gif" onclick="checkBuy()"><input type="hidden" value="0" id="buy__"/></a><?php endif; ?>
</div>
  </form>
  
  
  
  
</div>
<script type="text/javascript">
function checkBuy()
{
var buy__ = document.getElementById('buy__').value;
alert("购物车还没东西咧，先去购物吧");
}
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
  <h3><a href="/TP/t/index.php">首页</a> <code>&gt;</code> <?php echo ($navStr); ?> <?php echo ($pro["title"]); ?></h3>
</div>
<div class="blank"></div>    <div id="globalLeft">
     
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
.age_box a{float: left; height:22px; line-height:22px; width:92px; background:url(/TP/t/Public/themes/jindong/images/biao6.gif) 0 center no-repeat; padding-left:10px;font-family:Arial, Helvetica, sans-serif;color:#333333}
-->
</style>
<div class="blank"></div>     <div class="box" id='history_div'>
<div id="globalHistory" class="globalModule" >
<h3 class="h3_3" style="border-bottom:1px dotted #efefef"><div id="list_t_l"><div id="list_t_r"><b style="color:#333">最近浏览过的商品</b></div></div></h3>
<div id="global_box" > 
  <ul id="history_list" class="boxCenterList">
    <ul class="clearfix"><li class="goodsimg">
    	<a href="goods.php?id=4731" target="_blank">
    	<img src="/TP/t/Public/images/201001/thumb_img/4731_thumb_G_1262820447214.jpg" alt="AMD Athlon II ×2（速龙II双核）240盒装CPU（Socket AM3/2.8GHz/2M二级缓存/45纳米）A-FAN标志产品！45NM2.8高主频！套装更超值！" class="B_blue" />
    	</a>
    	</li>
    	<li>
    	<a  class="name2" href="goods.php?id=4731" target="_blank" title="AMD Athlon II ×2（速龙II双核）240盒装CPU（Socket AM3/2.8GHz/2M二级缓存/45纳米）A-FAN标志产品！45NM2.8高主频！套装更超值！">AMD Athlon II ×2（速龙I...</a>
    	<font class="f1">￥419元</font>
    	<br />
    	</li>
    	</ul>
    	<ul class="clearfix">
    	<li class="goodsimg">
    	<a href="goods.php?id=4746" target="_blank">
    	<img src="/TP/t/Public/images/201001/thumb_img/4746_thumb_G_1262821854338.jpg" alt="七彩虹（Colorful）C.G41 Twin V20主板（Intel G41/LGA 775）双内存智能主板!" class="B_blue" />
    	</a>
    	</li>
    	<li>
    	<a  class="name2" href="goods.php?id=4746" target="_blank" title="七彩虹（Colorful）C.G41 Twin V20主板（Intel G41/LGA 775）双内存智能主板!">七彩虹（Colorful）C.G41 T...</a>
    	<font class="f1">￥400元</font>
    	<br />
    	</li>
    	</ul>
    	<ul class="clearfix">
    	<li class="goodsimg">
    	<a href="goods.php?id=4761" target="_blank">
    	<img src="/TP/t/Public/images/201208/thumb_img/4761_thumb_G_1344186486336.jpg" alt="产品1" class="B_blue" />
    	</a>
    	</li>
    	<li>
    	<a  class="name2" href="goods.php?id=4761" target="_blank" title="产品1">产品1</a>
    	<font class="f1">￥1000元</font>
    	<br />
    	</li>
    	</ul>
    	<ul class="clearfix">
    	<li class="goodsimg">
    	<a href="goods.php?id=4762" target="_blank">
    	<img src="/TP/t/Public/images/no_picture.gif" alt="产品2" class="B_blue" />
    	</a>
    	</li>
    	<li>
    	<a  class="name2" href="goods.php?id=4762" target="_blank" title="产品2">产品2</a>
    	<font class="f1">￥11111111元</font>
    	<br />
    	</li>
    	</ul>
    	<ul id="clear_history"><a onclick="clear_history()">[清空]</a></ul>  </ul>
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
<div class="blank"></div>      
   
      
      
   
      
      
              
        
        
       </div>
    <div id="globalBigRight">
	
      <h2 class="name" style="text-align:center; font-size:16px; font-family:宋体; margin-bottom:8px; font-weight:bold; position: relative"><?php echo ($pro["title"]); ?>      <span style="color:#F00"></span>  
      <div class="up_down">
             <a href="goods.php?id=4762"><img alt="prev" src="/TP/t/Public/themes/jindong/images/up.gif" /></a>
      </div> 
      </h2>
      <div id="itemAllInfo" class="globalModule">
      <div id="goodsInfo">
        <div id="itemPic">
          		<a target="_blank" href="/TP/t/Public/product/<?php echo ($pro['imagename']); ?>" onclick="window.open('gallery.php?id=4761'); return false;" id="zoom1" class="MagicZoom MagicThumb" rel="zoom-width: 550px; zoom-height: 350px; zoom-position:right">
     		   <img src="/TP/t/Public/product/<?php echo ($pro['imagename']); ?>" style="width:350px; height:350px;" />
	 			</a>           
      <div class="blank5"></div>
          <div class="clearfix">
      <span onmouseover="moveLeft()" onmousedown="clickLeft()" onmouseup="moveLeft()" onmouseout="scrollStop()"></span>
      <div class="gallery">
        <div id="demo">
       
          <div id="demo1" style="float:left">
           <ul>
             <?php if(is_array($imageArr)): foreach($imageArr as $key=>$v): ?><li>
               <a  href="/TP/t/Public/product/<?php echo ($v["imagename"]); ?>"rel="zoom1" rev="/TP/t/Public/product/<?php echo ($v["imagename"]); ?>" title=""> 
      		  <img src="/TP/t/Public/product/<?php echo ($v["imagename"]); ?>" alt="产品1" class="B_red" />  
        	  </a>
           	  </li><?php endforeach; endif; ?>
                        </ul>
          </div>
          <div id="demo2" style="display:inline; overflow:visible;"></div>
        </div>
      </div>
      <span onmouseover="moveRight()" onmousedown="clickRight()" onmouseup="moveRight()" onmouseout="scrollStop()" class="spanR"></span>
      <script>
      function $(id){  
        return (document.getElementById) ? document.getElementById(id): document.all[id]
      }
      
      var boxwidth=150;//跟图片的实际尺寸相符
      
      var box=$("demo");
      var obox=$("demo1");
      var dulbox=$("demo2");
      obox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
      dulbox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
      box.style.width=obox.getElementsByTagName("li").length*boxwidth*3+'px';
      var canroll = false;
      if (obox.getElementsByTagName("li").length >= 4) {
        canroll = true;
        dulbox.innerHTML=obox.innerHTML;
      }
      var step=5;temp=1;speed=50;
      var awidth=obox.offsetWidth;
      var mData=0;
      var isStop = 1;
      var dir = 1;
      
      function s(){
        if (!canroll) return;
        if (dir) {
      if((awidth+mData)>=0)
      {
      mData=mData-step;
      }
      else
      {
      mData=-step;
      }
      } else {
        if(mData>=0)
        {
        mData=-awidth;
        }
        else
        {
        mData+=step;
        }
      }
      
      obox.style.marginLeft=mData+"px";
      
      if (isStop) return;
      
      setTimeout(s,speed)
      }
      
      
      function moveLeft() {
          var wasStop = isStop;
          dir = 1;
          speed = 50;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function moveRight() {
          var wasStop = isStop;
          dir = 0;
          speed = 50;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function scrollStop() {
        isStop=1;
      }
      
      function clickLeft() {
          var wasStop = isStop;
          dir = 1;
          speed = 25;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function clickRight() {
          var wasStop = isStop;
          dir = 0;
          speed = 25;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      </script> 
     </div>
     
          
          
          <div class="b_zoom v_m"><a href="javascript:;" onclick="window.open('gallery.php?id=4761'); return false;"><img src="/TP/t/Public/themes/jindong/images/zoom.gif" /> 点击查看大图</a></div>
          
          
           </div>
      </div>
        <div id="itemInfoList">
          
        <form action="/TP/t/index.php/Home/Cart/index" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
		 <ul class="line" >
               								
                        <li style="color:#999;">商品货号：P_<?php echo ($pro["id"]); ?></li>
                              <li>商品品牌：<a href="brand.php?id=241" ><?php echo ($brandname); ?></a></li>
                 
                        <li>市 场 价：<span class="marketPrice">￥<?php echo ($pro["price"]); ?>元</span></li>
                        <li>美 智 价：<span class="goodsPrice" id="ECS_SHOPPRICE">￥<?php echo ($pro["userprice"]); ?>元</span></li>
           
            <li>用户评价：<img src="/TP/t/Public/themes/jindong/images/stars5.gif" alt="comment rank 5" /></li>
           
           
                             <li class="padd">
       <font class="f1">购买商品达到以下数量区间时可享受的优惠价格：</font><br />
			 <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
				<tr>
					<td align="center" bgcolor="#FFFFFF"><strong>数量</strong></td>
					<td align="center" bgcolor="#FFFFFF"><strong>优惠价格</strong></td>
				</tr>
								<tr>
					<td align="center" bgcolor="#FFFFFF" class="shop"><?php echo ($pro["salenum"]); ?></td>
					<td align="center" bgcolor="#FFFFFF" class="shop">￥<?php echo ($pro["saleprice"]); ?>元</td>
				</tr>
					     </table>
      </li>
        
           
           <li>                 商品库存：         有货
              </li>
           
           
             <li>购买数量：
        <input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" style="border:1px solid #ccc; width:40px; height:18px; vertical-align:middle; padding-left:3px; "/>
        <input type="hidden" name="id" value="<?php echo ($pro["id"]); ?>"/>
        </li>
        
         <li>
         商品总价： <font id="ECS_GOODS_AMOUNT" class="goodsPrice"></font>
        
        
        
        
     </li>
            
            
         
          </ul><div style="clear:both"></div>
         
      <ul>
          <li id="itemBtnList">
          	 <a href="javascript:submitFrom()"><img src="/TP/t/Public/themes/jindong/images/btn_addcart.gif" alt="" /></a>
              <a href="javascript:collect(4761)"><img src="/TP/t/Public/themes/jindong/images/btn_addfav.gif" alt="" /></a><a href="user.php?act=affiliate&amp;goodsid=4761"><img src="/TP/t/Public/themes/jindong/images/tuijian.gif" alt="" /></a>
           </li>
          </ul>
      </form>
        </div>
      </div>
      
      
     <div id="goods_right">
     <script>
     function submitFrom()
     {
     	var ob=document.getElementById("ECS_FORMBUY");
     	ob.submit();
     }
     </script>
     
     
            
     
     <div class="tab_box">
        <div id="com_b" class="tab_title" style="padding: 0; height:27px; background:none; border-bottom:2px solid #be0000">
        <h2>商品介绍</h2>
        <h2 class="h2bg">规格参数</h2>
        
                 </div>
      <div  id="com_v" class="boxCenterList RelaArticle"></div>
      <div id="com_h" class="padd_box">
        <blockquote>
        <p><?php echo ($pro["content"]); ?></p>        </blockquote>
        <blockquote>
        <table class="shuxin_tab" width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#cccccc">
        	<tr>
        		<td><?php echo ($pro["style"]); ?></td>
        	</tr>
        </table>
        </blockquote>  
        <blockquote>
       
        <form name="tagForm" action="javascript:;" onsubmit="return submitTag(this)" id="tagForm">
         <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">&nbsp;
</table>
</table>
            <p id="ECS_TAGS">
                          </p>
            <p>
              <input type="text" name="tag" id="tag" class="textInput" />
              <input type="submit" value="添加我的标记" />
              <input type="hidden" name="goods_id" value="4761" />
            </p>
            <script type="text/javascript">
            //<![CDATA[
            
            /**
             * 用户添加标记的处理函数
             */
            function submitTag(frm)
            {
              try
              {
                var tag = frm.elements['tag'].value;
                var idx = frm.elements['goods_id'].value;
        
                if (tag.length > 0 && parseInt(idx) > 0)
                {
                  Ajax.call('user.php?act=add_tag', "id=" + idx + "&tag=" + tag, submitTagResponse, "POST", "JSON");
                }
              }
              catch (e) {alert(e);}
        
              return false;
            }
        
            function submitTagResponse(result)
            {
              var div = document.getElementById('ECS_TAGS');
        
              if (result.error > 0)
              {
                alert(result.message);
              }
              else
              {
                try
                {
                  div.innerHTML = '';
                  var tags = result.content;
        
                  for (i = 0; i < tags.length; i++)
                  {
                    div.innerHTML += '<a href="search.php?keywords='+tags[i].word+'">' +tags[i].word + '[' + tags[i].count + ']<\/a>&nbsp;&nbsp; ';
                  }
                }
                catch (e) {alert(e);}
              }
            }
            
            //]]>
            </script>
          </form>
       
        </blockquote>
                </div>
     </div>
    <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>
    <div style="clear:both"></div>
    
<div id="ECS_COMMENT" class="globalModule tab_box"><div id="globalComments">
  <div class="tab_title"><h3>用户评论</h3></div>
  <div id="globalComments" class="com_v">
  <table border="0" width="100%">
        <tr>
      <td id="globalNoComments">暂时还没有任何用户评论</td>
    </tr>
      </table>
    <div style="clear:both"></div>
  </div>
  <div class="tab_title"><h3>我要评论</h3></div>
  <div class="com_v">
  <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
    <table border="0">
      <tr>
        <th>用户名</th>
        <td>匿名用户</td>
        <td rowspan="4" valign="top">
          <textarea name="content" cols="45" rows="5"></textarea>
        </td>
      </tr>
      <tr>
        <th>电子邮件地址</th>
        <td><input name="email" type="text" id="email" size="30" maxlength="100" value="" class="textInput" /></td>
      </tr>
      <tr>
        <th>评价等级</th>
        <td>
          <input name="comment_rank" type="radio" value="1" id="comment_rank1" /> <label for="comment_rank1">1</label>
          <input name="comment_rank" type="radio" value="2" id="comment_rank2" /> <label for="comment_rank2">2</label>
          <input name="comment_rank" type="radio" value="3" id="comment_rank3" /> <label for="comment_rank3">3</label>
          <input name="comment_rank" type="radio" value="4" id="comment_rank4" /> <label for="comment_rank4">4</label>
          <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5" /> <label for="comment_rank5">5</label>
        </td>
      </tr>
            <tr>
        <th>验证码</th>
        <td>
          <input type="text" size="8" name="captcha" class="textInput vAlign" />
          <img src="captcha.php?39466540" alt="captcha" style="cursor:pointer;" onClick="this.src='captcha.php?'+Math.random()" class="vAlign" />
        </td>
      </tr>
            <tr>
        <th>&nbsp;</th>
        <td></td>
        <td>
          <input type="hidden" name="cmt_type" value="0" />
          <input type="hidden" name="id" value="4761" />
          <input type="image" src="/TP/t/Public/themes/jindong/images/button_08.jpg" />
         
        </td>
      </tr>
    </table>
  </form>
  </div>
</div>
<script type="text/javascript">
//<![CDATA[
var cmt_empty_username = "请输入您的用户名称";
var cmt_empty_email = "请输入您的电子邮件地址";
var cmt_error_email = "电子邮件地址格式不正确";
var cmt_empty_content = "您没有输入评论的内容";
var captcha_not_null = "验证码不能为空!";
var cmt_invalid_comments = "无效的评论内容!";

/**
 * 提交评论信息
*/
function submitComment(frm)
{
  var cmt = new Object;

  //cmt.username        = frm.elements['username'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  cmt.rank            = 0;

  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }

//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }

  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }

   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }

   Ajax.call('comment.php', 'cmt=' + cmt.toJSONString(), commentResponse, 'POST', 'JSON');
   return false;
}

/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
    if (result.message)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      var layer = document.getElementById('ECS_COMMENT');

      if (layer)
      {
        layer.innerHTML = result.content;
      }
    }
  }

//]]>
</script></div>
       
   </div>
    </div>
    
    <div class="blank"></div>
<div id="globalHelp" class="globalModule">
<div class="clearfix">
<dl>
<dt>
<img src="/TP/t/Public/themes/jindong/images/help_1.gif" />
<a href='article_cat.php?id=5' title="购物指南">购物指南</a>
</dt>
<div class="blank5"></div>
    <dd><a href="article.php?id=9" title="购物流程">购物流程</a></dd>
    <dd><a href="article.php?id=10" title="会员介绍">会员介绍</a></dd>
    <dd><a href="article.php?id=36" title="常见问题">常见问题</a></dd>
  </dl>
<dl>
<dt>
<img src="/TP/t/Public/themes/jindong/images/help_2.gif" />
<a href='article_cat.php?id=7' title="配送方式">配送方式</a>
</dt>
<div class="blank5"></div>
    <dd><a href="article.php?id=15" title="快递运输">快递运输</a></dd>
    <dd><a href="article.php?id=16" title="特快专递(EMS)">特快专递(EMS)</a></dd>
    <dd><a href="article.php?id=43" title="上门自提">上门自提</a></dd>
  </dl>
<dl>
<dt>
<img src="/TP/t/Public/themes/jindong/images/help_3.gif" />
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
<img src="/TP/t/Public/themes/jindong/images/help_4.gif" />
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
<img src="/TP/t/Public/themes/jindong/images/help_5.gif" />
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
<ul  class="line"><img src="/TP/t/Public/themes/jindong/images/serve_1.gif"></ul>
<ul  class="line"><img src="/TP/t/Public/themes/jindong/images/serve_2.gif"></ul>
<ul  class="line"><img src="/TP/t/Public/themes/jindong/images/serve_3.gif"></ul>
<ul ><img src="/TP/t/Public/themes/jindong/images/serve_4.gif"></ul>
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
       | <script type="text/javascript" src="/TP/t/Public/js/dialog3.js"></script>
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
  <p id="qureyInfo">共执行 8 个查询，用时 0.017147 秒，在线 3 人，Gzip 已禁用，占用内存 3.472 MB<img src="api/cron.php?t=1344195518" alt="" style="width:0px;height:0px;" /></p>
    
    <div align="center" ></div>
<div class="blank"></div>
<div style="text-align:center">
<a href="http://www.miibeian.gov.cn"><img src="/TP/t/Public/themes/jindong/images/fot_1.gif"></a> <a href="#"><img src="/TP/t/Public/themes/jindong/images/fot_2.gif"></a> <a href="http://police.cnool.net/infoCategoryListAction.do?act=init"><img src="/TP/t/Public/themes/jindong/images/fot_3.gif"></a>
 </div>      
</div>  </div>
  
	<div id="tag_box" style="z-index:9999; position:absolute;top:100px; right:5px;"></div>
</body>
</html>