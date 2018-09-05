<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Keywords" content="" />
  <meta name="Description" content="" />
  
<link href="/project2/Public/themes/jindong/stye.css" rel="stylesheet" type="text/css" />  
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
  <title>用户中心_京东网上商城-综合网购首选，正品行货，机打发票，售后上门取件，省钱又放心 - Powered by ECShop</title>
  <script type="text/javascript" src="/project2/Public/js/common.js"></script><script type="text/javascript" src="/project2/Public/js/user.js"></script></head>

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
  
 <li><a href="/project2/index.php/index.php" <?php if($headerTid == 0): ?>class="cur"<?php endif; ?> >首页</a></li>
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
  <h3><li><a href="../.">首页</a> <code>&gt;</code> 用户中心</h3>
</div>
<div class="blank"></div>    
    <div id="globalLeft">
      <div class="globalModule">
  <h3><div id="list_t_l"><div id="list_t_r"><b>用户中心</b></div></div></h3>

<div id="global_box" class="userMenu">
<li><a href="../welcome.html" ><img src="/project2/Public/themes/jindong/images/u1.gif"> 欢迎页</a>
<li><a href="../userinfo.html"><img src="/project2/Public/themes/jindong/images/u2.gif"> 用户信息</a>
<li><a href="../dingdan.html"><img src="/project2/Public/themes/jindong/images/u3.gif"> 我的订单</a>
<li><a href="../address.html"class="curs"><img src="/project2/Public/themes/jindong/images/u4.gif"> 收货地址</a>
<li><a href="../shoucang.html"><img src="/project2/Public/themes/jindong/images/u5.gif"> 我的收藏</a>
<li><a href="../message.html"><img src="/project2/Public/themes/jindong/images/u6.gif"> 我的留言</a>
<li><a href="../user.php?act=logout" style="background:none; text-align:right; margin-right:10px;"><img src="/project2/Public/themes/jindong/images/bnt_sign.gif"></a>
</div>

</div>    </div>
    <div id="globalBigRight">
    <div class="tab_box">
                                                                                                  <script type="text/javascript" src="/project2/Public/js/region.js"></script><script type="text/javascript" src="/project2/Public/js/shopping_flow.js"></script>      <script type="text/javascript">
      //<![CDATA[
        region.isAdmin = false;
                var consignee_not_null = "收货人姓名不能为空！";
                var country_not_null = "请您选择收货人所在国家！";
                var province_not_null = "请您选择收货人所在省份！";
                var city_not_null = "请您选择收货人所在城市！";
                var district_not_null = "请您选择收货人所在区域！";
                var invalid_email = "您输入的邮件地址不是一个合法的邮件地址。";
                var address_not_null = "收货人的详细地址不能为空！";
                var tele_not_null = "电话不能为空！";
                var shipping_not_null = "请您选择配送方式！";
                var payment_not_null = "请您选择支付方式！";
                var goodsattr_style = "1";
                var tele_invaild = "电话号码不有效的号码";
                var zip_not_num = "邮政编码只能填写数字";
                var mobile_invaild = "手机号码不是合法号码";
                
        onload = function() {
          if (!document.all)
          {
            document.forms['theForm'].reset();
          }
        }
        
      //]]>
      </script>
      <div class="globalModule">
        <div class="tab_title"><h3>收货人信息</h3></div>
        <div class="globalModuleContent">
        <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><form action="/project2/index.php/User/Addr/update" method="post" name="theForm" onsubmit="return checkConsignee(this)">
            <table cellspacing="0" class="tableList">
              <tr>
                <td>收货人姓名:</td>
                <td><input name="name" type="text" id="consignee_0" value="<?php echo ($v["name"]); ?>" class="textInput" />
                  <span class="textDesc">(必填)</span> </td>
                <td>电子邮件地址:</td>
                <td><input name="email" type="text" id="email_0" value="<?php echo ($v["email"]); ?>" class="textInput" />
                  <span class="textDesc">(必填)</span></td>
              </tr>
              <tr>
                <td>详细地址:</td>
                <td><input name="addr" type="text" id="address_0" value="<?php echo ($v["addr"]); ?>" class="textInput" />
                  <span class="textDesc">(必填)</span></td>
                <td>邮政编码:</td>
                <td><input name="code" type="text" id="zipcode_0" value="<?php echo ($v["code"]); ?>" class="textInput" /></td>
              </tr>
              <tr>
                <td>电话:</td>
                <td><input name="tel" type="text" id="tel_0" value="<?php echo ($v["tel"]); ?>" class="textInput" />
                  <span class="textDesc">(必填)</span></td>
                <td>最佳送货时间:</td>
                <td><input name="besttime" type="text" id="best_time_0" value="<?php echo ($v["besttime"]); ?>" class="textInput" /></td>
              </tr>
             
              <tr>
                <td colspan="4" align="center">
                                    <input type="submit"  value="确认修改" />
                  <input name="button" type="button" onclick="if (confirm('你确认要删除该收货地址吗？'))location.href='user.php?act=drop_consignee&id=18'" value="删除" />
				  <input type="hidden" name="ref" value="<?php echo ($_GET['ref']); ?>"/>
                  <input name="id" type="hidden" value="<?php echo ($v["id"]); ?>" />
                </td>
              </tr>
            </table>
          </form><?php endforeach; endif; ?>
          <form action="/project2/index.php/User/Addr/add" method="post" name="theForm" onsubmit="return checkConsignee(this)">
            <table cellspacing="0" class="tableList">
              
              <tr>
                <td>收货人姓名:</td>
                <td><input name="name" type="text" id="consignee_1" value="" class="textInput" />
                  <span class="textDesc">(必填)</span> </td>
                <td>电子邮件地址:</td>
                <td><input name="email" type="text" id="email_1" value="beifangdelang107@163.com" class="textInput" />
                  <span class="textDesc">(必填)</span></td>
              </tr>
              <tr>
                <td>详细地址:</td>
                <td><input name="addr" type="text" id="address_1" value="" class="textInput" />
                  <span class="textDesc">(必填)</span></td>
                <td>邮政编码:</td>
                <td><input name="code" type="text" id="zipcode_1" value="" class="textInput" /></td>
              </tr>
              <tr>
                <td>电话:</td>
                <td><input name="tel" type="text" id="tel_1" value="" class="textInput" />
                  <span class="textDesc">(必填)</span></td>
                <td>最佳送货时间:</td>
                <td><input name="besttime" type="text"/></td>
              </tr>
             
              <tr>
                <td colspan="4" align="center">
                	<input type="hidden" name="ref" value="<?php echo ($_GET['ref']); ?>"/>
                   <input type="submit" value="新增收货地址" />
                                    
                </td>
              </tr>
            </table>
          </form>
                  </div>
      </div>
          
               
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
    <dd><li><a href="../article.php?id=9" title="购物流程">购物流程</a></dd>
    <dd><li><a href="../article.php?id=10" title="会员介绍">会员介绍</a></dd>
    <dd><li><a href="../article.php?id=36" title="常见问题">常见问题</a></dd>
  </dl>
<dl>
<dt>
<img src="/project2/Public/themes/jindong/images/help_2.gif" />
<a href='article_cat.php?id=7' title="配送方式">配送方式</a>
</dt>
<div class="blank5"></div>
    <dd><li><a href="../article.php?id=15" title="快递运输">快递运输</a></dd>
    <dd><li><a href="../article.php?id=16" title="特快专递(EMS)">特快专递(EMS)</a></dd>
    <dd><li><a href="../article.php?id=43" title="上门自提">上门自提</a></dd>
  </dl>
<dl>
<dt>
<img src="/project2/Public/themes/jindong/images/help_3.gif" />
<a href='article_cat.php?id=10' title="支付方式">支付方式</a>
</dt>
<div class="blank5"></div>
    <dd><li><a href="../article.php?id=18" title="货到付款">货到付款</a></dd>
    <dd><li><a href="../article.php?id=19" title="在线支付">在线支付</a></dd>
    <dd><li><a href="../article.php?id=20" title="银行转账">银行转账</a></dd>
    <dd><li><a href="../article.php?id=37" title="分期付款">分期付款</a></dd>
  </dl>
<dl>
<dt>
<img src="/project2/Public/themes/jindong/images/help_4.gif" />
<a href='article_cat.php?id=8' title="售后服务">售后服务</a>
</dt>
<div class="blank5"></div>
    <dd><li><a href="../article.php?id=21" title="退换货原则">退换货原则</a></dd>
    <dd><li><a href="../article.php?id=22" title="退换货流程">退换货流程</a></dd>
    <dd><li><a href="../article.php?id=23" title="价格保护">价格保护</a></dd>
    <dd><li><a href="../article.php?id=38" title="退款说明">退款说明</a></dd>
  </dl>
<dl>
<dt>
<img src="/project2/Public/themes/jindong/images/help_5.gif" />
<a href='article_cat.php?id=9' title="特色服务">特色服务</a>
</dt>
<div class="blank5"></div>
    <dd><li><a href="../article.php?id=24" title="商品拍卖">商品拍卖</a></dd>
    <dd><li><a href="../article.php?id=25" title="DIY装机">DIY装机</a></dd>
    <dd><li><a href="../article.php?id=26" title="上门服务">上门服务</a></dd>
    <dd><li><a href="../article.php?id=39" title="上门装机">上门装机</a></dd>
    <dd><li><a href="../article.php?id=40" title="香港代购">香港代购</a></dd>
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
        <li><a href="../article.php?id=1" >关于我们</a> 
        |
          <li><a href="../article.php?id=2" >联系我们</a> 
        |
          <li><a href="../article.php?id=3" >广告服务</a> 
        |
          <li><a href="../http://jetli.taobao.com/" >品牌加盟</a> 
        |
          <li><a href="../wholesale.php" >批发方案</a> 
        |
          <li><a href="../myship.php" >配送方式</a> 
       | <script type="text/javascript" src="/project2/Public/js/dialog3.js"></script>
  </p>
  <p id="copyright">&copy; 2005-2012 京东网上商城 版权所有，并保留所有权利。</p>
   
    
  <p id="address">
        
  </p>
  <p id="phone">
  	</p>
	  <p id="imList">
            <img src="http://wpa.qq.com/pa?p=1:393769718:4" alt="QQ" /> <li><a href="../http://wpa.qq.com/msgrd?V=1&amp;Uin=393769718&amp;Site=京东网上商城&amp;Menu=yes" target="_blank">393769718</a>
                    <img src="http://amos1.taobao.com/online.ww?v=2&amp;uid=tddt8&amp;s=2" alt="淘宝旺旺" /><li><a href="../http://amos1.taobao.com/msg.ww?v=2&amp;uid=tddt8&amp;s=2" target="_blank"> tddt8</a>
                                              </p>
  <p id="qureyInfo">共执行 20 个查询，用时 0.049712 秒，在线 2 人，Gzip 已禁用，占用内存 5.321 MB<img src="api/cron.php?t=1344205417" alt="" style="width:0px;height:0px;" /></p>

    
    <div align="center" ></div>

<div class="blank"></div>

<div style="text-align:center">
<li><a href="../http://www.miibeian.gov.cn"><img src="/project2/Public/themes/jindong/images/fot_1.gif"></a> <li><a href="../#"><img src="/project2/Public/themes/jindong/images/fot_2.gif"></a> <li><a href="../http://police.cnool.net/infoCategoryListAction.do?act=init"><img src="/project2/Public/themes/jindong/images/fot_3.gif"></a>
 </div>      
</div>  </div>
</body>
</html>