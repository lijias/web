<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>网站首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/TP/bbs/public/css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <center>
  <a href="/TP/bbs/index.php/Index/index.html">网站首页</a> | 
  <a href="/TP/bbs/index.php/Login/index.html">会员登陆</a>
</center>
<br><br>
    
    <?php echo ($userName); ?><br><br>
    
    <?php echo ($age); ?><br><br>
    
    <?php echo ($cityList["0"]); ?><br><br>
    
    <?php echo ($cityList[1]); ?><br><br>
    
    <?php echo ($userInfo["userName"]); ?><br><br>
    
    <?php echo ($userInfo["address"]); ?><br><br>
    
    <?php if($userName=='张三'): ?>小三
    <?php elseif($userName=='李四'): ?>
    小四
    <?php else: ?>
    不知道<?php endif; ?><br><br>
    
    <?php if($age < 18): ?>未成年
    <?php else: ?>
    己成年<?php endif; ?><br><br>
    
    <?php switch($age): case "1": ?>出场亮相<?php break;?>
      <?php case "10": ?>天天向上<?php break;?>
      <?php case "20": ?>远大理想<?php break;?>
      <?php case "30": ?>基本定向<?php break;?>
      <?php case "40": ?>处处吃香<?php break;?>
      <?php default: ?>不知道<?php endswitch;?><br><br>
    
    <?php $__FOR_START_15135__=0;$__FOR_END_15135__=5;for($i=$__FOR_START_15135__;$i < $__FOR_END_15135__;$i+=1){ ?>Hello<?php echo ($i); ?>&nbsp;&nbsp;<?php } ?><br><br>
    
    <?php if(is_array($cityList)): foreach($cityList as $k=>$v): echo ($k); ?>---<?php echo ($v); ?><br><?php endforeach; endif; ?><br>
    
    <?php if(is_array($userInfo)): foreach($userInfo as $k=>$v): echo ($k); ?>---<?php echo ($v); ?><br><?php endforeach; endif; ?><br>
    
    <?php if(is_array($cityList)): $k = 0; $__LIST__ = $cityList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k; echo ($k); ?>---<?php echo ($v); ?><br><?php endforeach; endif; else: echo "" ;endif; ?><br>
    
    <?php if(is_array($userInfo)): $k = 0; $__LIST__ = $userInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k; echo ($k); ?>---<?php echo ($v); ?><br><?php endforeach; endif; else: echo "" ;endif; ?><br>
    
    
      {$userInfo.address}
    <br><br>
    
    <?php echo "大家好"; ?><br><br>
    
  </body>
</html>