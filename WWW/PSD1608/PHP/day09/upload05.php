<?php
header('Content-Type:text/html;charset=utf-8');
include 'inc/common.function.php';
include 'inc/upload.function.php';

// 返回重命名后的新的二维数组，目的将来重命名后的文件存入数据
echo '<pre>';
print_r(uploadFile());
echo '</pre>';