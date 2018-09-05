<?php 
  $arr = array(
  	  0=> array('url'=>'pic1.jpg','title'=>'南极人','price'=>200),
  	  1=> array('url'=>'pic2.jpg','title'=>'Callous Karach秋季男士长袖t恤修身青少年','price'=>300),
  	  2=> array('url'=>'pic3.jpg','title'=>'甘甘的世界2016秋季新款女装雪纺拼','price'=>400)
  );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>my demo</title>
</head>
<body>
<!-- 
   <ul>
      <li>
         <img src="pic1.jpg" alt=""/>
         <p>南极人</p>
         <p>200元</p>
      </li>
   </ul>
-->
<ul>
   <?php 
      foreach($arr as $key=>$val){//$val 一维数组
   ?>
   <li>
      <img src="images/<?php echo $val['url']?>" alt=""/>
      <p><?php echo $val['title']?></p>
      <p><?php echo $val['price']?>元</p>
   </li>
   <?php   	
      }
   ?>
</ul>
</body>
</html>








