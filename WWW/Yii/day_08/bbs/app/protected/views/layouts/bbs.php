<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $this->getPageTitle()?></title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="css/bbs.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <!-- 网站的头 -->
    <center>
      <a href="index.php?r=index/index">网站首页</a> | 
      <a href="index.php?r=add/index">添加记录</a> | 
      <a href="index.php?r=sql/index">执行sql语句</a> | 
      <a href="index.php?r=page1/index">数据库分页</a> | 
      <a href="index.php?r=page2/index">自定义分页类</a> | 
      <a href="index.php?r=login/index">会员登陆</a> | 
      <a href="index.php?r=write/index">发表文章</a> | 
      <a href="index.php?r=cache1/index">片段缓存</a> | 
      <a href="index.php?r=cache2/index">页面缓存</a> | 
      <a href="index.php?r=cache3/index">数据缓存</a> | 
      <a href="index.php?r=cache4/index">动态缓存</a>
    </center>
    <br><br>
    
    <!-- 正文内容 -->
    <?php echo $content?>
    
    <!-- 页面的脚 -->
  </body>
</html>










