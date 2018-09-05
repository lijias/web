<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>热点要闻</title>
  </head>
  <body>
    <table border="1" align="center">
<?php 
	//通过php调用视图
	$url = "mysql:host=localhost;dbname=news";
	$user = "root";
	$pwd = "root";
	$conn = new PDO($url,$user,$pwd);
	$conn->query("set names utf8");
	$st = $conn->query("select * from newsInfo order by hints desc limit 0,6");
	$rs = $st->fetchAll();
	foreach ($rs as $v)
	{
?>
      <tr>
        <td>
          [<a href=""><?php echo $v["typeName"]?></a>]&nbsp;&nbsp;
          <a href=""><?php echo $v["title"]?></a>&nbsp;&nbsp;
          <?php echo $v["dateandtime"]?>
        </td>
      </tr>
<?php 
	}
?>
    </table>
  </body>
</html>










