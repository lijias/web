<!DOCTYPE html>
<html>
<head>
    <title>text</title>
</head>
<body>

<p>
    <?php echo $title ?>
</p>
<hr/>
<?php foreach ($age as $v): ?>
    <p><?php echo $v; ?></p>
<?php endforeach; ?>
<hr/>
<p>
    到入口文件:<?php echo $url1 ?>
</p>
<hr/>
<p>
    根目录:<?php echo $url2 ?>
</p>
视图中使用foreach遍历数组
<br>
<?php
$query = [['Jack.C', 'Alxe.L']];
foreach ($query as $vv):
    foreach ($vv as $v1):
        echo $v1.'</br>';
    endforeach;
endforeach; ?>
<hr/>
视图中使用if判断
<?php if ($username == 'Sally'): ?>
    <h3>sally</h3>
<?php elseif ($username == 'Tom'): ?>
    <h3>Tom</h3>
<?php else: ?>
    <h3>no</h3>
<?php endif; ?>
<?php
$a = '下雨';
$b = '今天下雨了吗';
var_dump(strpos($b, $a));
echo strpos("Hello world!", "world", true);
?>
</body>
</html>
