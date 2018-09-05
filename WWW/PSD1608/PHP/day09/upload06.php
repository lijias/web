<?php
header('Content-Type:text/html;charset=utf-8');
include 'inc/common.function.php';
include 'inc/uploadnew.function.php';
// 实现上传,返回重名后的新二维数组,目的将文件名称存人数据库中
echo '<pre>';
print_r(uploadFile('aaa'));
echo '</pre>';