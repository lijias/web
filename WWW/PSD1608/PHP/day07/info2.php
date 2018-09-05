<?php 
$arr =array(
		0=>array('user'=>'tom','age'=>22,'sex'=>'男'),
		1=>array('user'=>'rose','age'=>18,'sex'=>'男'),
		2=>array('user'=>'tina','age'=>23,'sex'=>'女'),
		3=>array('user'=>'alice','age'=>17,'sex'=>'男')
);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>my demo</title>
</head>
<body>
  <table border="1" align="center">
     <tr>
        <th>姓名</th><th>年龄</th><th>性别</th>
     </tr>
     <?php 
        foreach($arr as $val){
          echo '<tr>';
          echo '<td>'.$val['user'].'</td>';
          echo '<td>'.$val['age'].'</td>';
          echo '<td>'.$val['sex'].'</td>';
          echo '</tr>';
        }
     ?>
  </table>
</body>
</html>