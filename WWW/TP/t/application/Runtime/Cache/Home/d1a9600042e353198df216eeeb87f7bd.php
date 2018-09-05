<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />

<title>购物流程_京东网上商城-综合网购首选，正品行货，机打发票，售后上门取件，省钱又放心 - Powered by ECShop</title>

<link href="/TP/t/Public/themes/jindong/stye.css" rel="stylesheet" type="text/css" />  
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />


<script type="text/javascript" src="/TP/t/Public/js/common.js"></script><script type="text/javascript" src="/TP/t/Public/js/shopping_flow.js"></script></head>
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
  <h3><a href=".">首页</a> <code>&gt;</code> 购物流程</h3>
</div>
<div class="blank"></div>
  
  
  

        
                <div style="width:80%; margin:0 AUTO">
        <form action="success.html" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
        <script type="text/javascript">
        var flow_no_payment = "您必须选定一个支付方式。";
        var flow_no_shipping = "您必须选定一个配送方式。";
        </script>
        <div class="flowBox_title">
  	<dl></dl><dt>订单详情</dt><dd></dd>
  </div>
        <div class="flowBox dingdan_all">
        <h6><span>商品列表</span><a href="/TP/t/index.php/Home/Cart/index" class="f6">修改</a></h6>
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded">
            <tr>
              <th bgcolor="#ffffff">商品名称</th>
              <th bgcolor="#ffffff">属性</th>
              <th bgcolor="#ffffff">美智价</th>
              <th bgcolor="#ffffff">购买数量</th>
              <th bgcolor="#ffffff">小计</th>
            </tr>
            <?php if(is_array($productArr)): foreach($productArr as $key=>$vv): ?><tr>
              <td bgcolor="#ffffff">
              	<a href="goods.php?id=4779" target="_blank" class="f6"><?php echo ($vv["title"]); ?></a>
              </td>
              <td bgcolor="#ffffff"><?php echo ($vv["style"]); ?></td>
              <td bgcolor="#ffffff" align="center" style=" font-weight:bold; color:#F00">￥<?php echo ($vv["saleprice"]); ?>.00元</td>
              <td bgcolor="#ffffff" align="center"><?php echo ($vv["num"]); ?></td>
              <td bgcolor="#ffffff" align="right">￥<?php echo ($vv["xj"]); ?>.00元</td>
            </tr><?php endforeach; endif; ?>
            <tr>
              <td bgcolor="#ffffff" colspan="7" align="right" style=" color:#FF0000; font-weight:bold">
             		 购物金额小计 ￥<?php echo ($total); ?>.00元              
             </td>
            </tr>
           </table>
     
      <div class="blank"></div>
     
      <h6><span>收货人信息</span><a href="/TP/t/index.php/user/addr/showall.html" class="f6">修改</a></h6>
      <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded" id="shippingTable">
            <tr>
              <th bgcolor="#ffffff" width="5%">&nbsp;</th>
              <th bgcolor="#ffffff" width="10%">名称</th>
              <th bgcolor="#ffffff" width="15%">电话</th>                           
              <th bgcolor="#ffffff" width="15%">email</th>
              <th bgcolor="#ffffff" width="10%">邮编</th> 
              <th bgcolor="#ffffff" width="15%">送货时间</th>
              <th bgcolor="#ffffff">详细地址</th>
            </tr>
            <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>
              <td bgcolor="#ffffff" valign="top">
              <?php if($v['id']==$checkId['id']): ?><input name="addrid" type="radio" value="<?php echo ($v["id"]); ?>"  checked="checked"/>
              <?php else: ?>
              	<input name="addrid" type="radio" value="<?php echo ($v["id"]); ?>"/><?php endif; ?> 
              </td>
              <td bgcolor="#ffffff" align="center" valign="top"><?php echo ($v["name"]); ?></td>
              <td bgcolor="#ffffff" align="center" valign="top"><?php echo ($v["tel"]); ?></td>
              <td bgcolor="#ffffff" align="center" valign="top"><?php echo ($v["email"]); ?></td> 
              <td bgcolor="#ffffff" align="center" valign="top"><?php echo ($v["code"]); ?></td>            
              <td bgcolor="#ffffff" align="center" valign="top"><?php echo ($v["besttime"]); ?></td>             
              <td bgcolor="#ffffff" valign="top"><?php echo ($v["addr"]); ?></td>
            </tr><?php endforeach; endif; ?>
          </table>

     <div class="blank"></div>
        
    <h6><span>配送方式</span></h6>
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded" id="shippingTable">
            <tr>
              <th bgcolor="#ffffff" width="5%">&nbsp;</th>
              <th bgcolor="#ffffff" width="25%">名称</th>
              <th bgcolor="#ffffff">订购描述</th>
              <th bgcolor="#ffffff" width="15%">费用</th>
              <th bgcolor="#ffffff" width="15%">免费额度</th>
              <th bgcolor="#ffffff" width="15%">保价费用</th>
            </tr>
                        <tr>
              <td bgcolor="#ffffff" valign="top"><input name="sendtype" type="radio" value="1" checked="true" supportCod="0" insure="0" onclick="selectShipping(this)" />
              </td>
              <td bgcolor="#ffffff" valign="top"><strong>EMS 国内邮政特快专递</strong></td>
              <td bgcolor="#ffffff" valign="top">EMS 国内邮政特快专递描述内容</td>
              <td bgcolor="#ffffff" align="right" valign="top">￥20.00元</td>
              <td bgcolor="#ffffff" align="right" valign="top">￥4000.00元</td>
              <td bgcolor="#ffffff" align="right" valign="top">不支持保价</td>
            </tr>
          </table>
   
    <div class="blank"></div>
                
    <h6><span>支付方式</span></h6>
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded" id="paymentTable">
            <tr>
              <th width="5%" bgcolor="#ffffff">&nbsp;</th>
              <th width="20%" bgcolor="#ffffff">名称</th>
              <th bgcolor="#ffffff">订购描述</th>
              <th bgcolor="#ffffff" width="15%">手续费</th>
            </tr>
                        
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="apptype" value="1"  isCod="0" onclick="selectPayment(this)" /></td>
              <td valign="top" bgcolor="#ffffff"><strong>余额支付</strong></td>
              <td valign="top" bgcolor="#ffffff">使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。</td>
              <td align="right" bgcolor="#ffffff" valign="top">￥0.00元</td>
            </tr>
                        
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="apptype" value="2"  isCod="1" onclick="selectPayment(this)"/></td>
              <td valign="top" bgcolor="#ffffff"><strong>货到付款</strong></td>
              <td valign="top" bgcolor="#ffffff">开通城市： 新疆特区喀什市  
货到付款区域：新疆特区喀什市</td>
              <td align="right" bgcolor="#ffffff" valign="top"><span id="ECS_CODFEE">￥0.00元</span></td>
            </tr>
                        
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="apptype" value="3"  checked isCod="0" onclick="selectPayment(this)" /></td>
              <td valign="top" bgcolor="#ffffff"><strong>支付宝</strong></td>
              <td valign="top" bgcolor="#ffffff">支付宝网站(www.alipay.com) 是国内先进的网上支付平台。<br/>ECShop联合支付宝推出优惠套餐：无预付/年费，单笔费率1.5%，无流量限制。<br/><a href="https://www.alipay.com/himalayas/practicality_profile_edit.htm?market_type=from_agent_contract&customer_external_id=C4335319945672464113" target="_blank"><font color="red">立即在线申请</font></a></td>
              <td align="right" bgcolor="#ffffff" valign="top">￥5.00元</td>
            </tr>
   </table>

        <div class="blank"></div>
    <h6><span>其它信息</span></h6>
      <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded">
            <tr>
              <td valign="top" bgcolor="#ebf4fb"><strong>订单附言:</strong></td>
              <td bgcolor="#ffffff"><textarea name="postscript" cols="100" rows="3" id="postscript" style="border:1px solid #ccc;"></textarea></td>
            </tr>
      </table>
   
    <div class="blank"></div>

    <h6><span>费用总计</span></h6>
          <div id="ECS_ORDERTOTAL">
<table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" class="tableList f0_table" style="color:#FF0000">
    <tr>
    <td align="right" bgcolor="#ffffff">
     该订单完成后，您将获得            <font class="f4_b">999</font> 积分            ，以及价值               <font class="f4_b">￥0.00元</font>的红包。
          </td>

  </tr>

    <tr>
    <td align="right" bgcolor="#ffffff">
      商品总价: <font class="f4_b">￥999.00元</font>
                        + 配送费用: <font class="f4_b">￥20.00元</font>
                        + 手续费: <font class="f4_b">￥5.00元</font>
                      </td>
  </tr>
    <tr>
    <td align="right" bgcolor="#ffffff"> 应付款金额: <font class="f4_b">￥1024.00元</font>
    	</td>
  </tr>
</table>
</div>           <div align="center" style="margin:8px auto;">
            <input type="image" src="/TP/t/Public/themes/jindong/images/bnt_subOrder.gif" />
            <input type="hidden" name="step" value="done" />
            </div>
    </div>
    </form>
    </DIV>
        
        		
        

  <div class="blank"></div> 

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
  <p id="qureyInfo">共执行 365 个查询，用时 0.201028 秒，在线 2 人，Gzip 已禁用，占用内存 5.832 MB<img src="api/cron.php?t=1344206149" alt="" style="width:0px;height:0px;" /></p>

    
    <div align="center" ></div>

<div class="blank"></div>

<div style="text-align:center">
<a href="http://www.miibeian.gov.cn"><img src="/TP/t/Public/themes/jindong/images/fot_1.gif"></a> <a href="#"><img src="/TP/t/Public/themes/jindong/images/fot_2.gif"></a> <a href="http://police.cnool.net/infoCategoryListAction.do?act=init"><img src="/TP/t/Public/themes/jindong/images/fot_3.gif"></a>
 </div>      
</div>  </div>
</body>

<script type="text/javascript">
var process_request = "正在处理您的请求...";
var username_empty = "- 用户名不能为空。";
var username_shorter = "- 用户名长度不能少于 3 个字符。";
var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
var password_empty = "- 登录密码不能为空。";
var password_shorter = "- 登录密码不能少于 6 个字符。";
var confirm_password_invalid = "- 两次输入密码不一致";
var email_empty = "- Email 为空";
var email_invalid = "- Email 不是合法的地址";
var agreement = "- 您没有接受协议";
var msn_invalid = "- msn地址不是一个有效的邮件地址";
var qq_invalid = "- QQ号码不是一个有效的号码";
var home_phone_invalid = "- 家庭电话不是一个有效号码";
var office_phone_invalid = "- 办公电话不是一个有效号码";
var mobile_phone_invalid = "- 手机号码不是一个有效号码";
var msg_un_blank = "* 用户名不能为空";
var msg_un_length = "* 用户名最长不得超过7个汉字";
var msg_un_format = "* 用户名含有非法字符";
var msg_un_registered = "* 用户名已经存在,请重新输入";
var msg_can_rg = "* 可以注册";
var msg_email_blank = "* 邮件地址不能为空";
var msg_email_registered = "* 邮箱已存在,请重新输入";
var msg_email_format = "* 邮件地址不合法";
var msg_blank = "不能为空";
var no_select_question = "- 您没有完成密码提示问题的操作";
var passwd_balnk = "- 密码中不能包含空格";
var username_exist = "用户名 %s 已经存在";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
</html>