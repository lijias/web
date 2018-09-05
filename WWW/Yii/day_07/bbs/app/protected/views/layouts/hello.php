<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $this->getPageTitle()?></title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="<?php echo ROOT?>/css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <!-- 网站的头 -->
    <center>
      <a href="<?php echo APP?>/index/index">网站首页</a> | 
      <a href="<?php echo APP?>/login/index">会员登陆</a>
    </center>
    <br><br>
    
    <!-- 正文内容 -->
    <?php echo $content?>
    
    <!-- 页面脚注 -->
  </body>
</html>









