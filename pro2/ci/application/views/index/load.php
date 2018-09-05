<?php
include './phpexcel/Classes/PHPExcel.php';

//  echo __FILE__;   /Applications/MAMP/htdocs/test/excel/test2.php
// echo dirname(__FILE__);  /Applications/MAMP/htdocs/test/excel
// echo __DIR__;  /Applications/MAMP/htdocs/test/excel  等同于dir_name(__FILE__)，除了根目录

$dir = __DIR__;

$phpexcel = new PHPExcel(); //实例化类对象
$sheet = $phpexcel->getActiveSheet(); //获取当前活动表格标签
$sheet->setTitle('demo');

$arr = array(
array('姓名','分数'),
array('',''),
array('曹鹏','99'),
array('童话','59'),
array('风云','82')
    );
$sheet->fromArray($arr);

$write = PHPExcel_IOFactory::createWriter($phpexcel,'Excel2007');

header("Pragma: public");

header("Expires: 0");

header("Cache-Control:must-revalidate, post-check=0, pre-check=0");

header("Content-Type:application/force-download");

header("Content-Type:application/vnd.ms-execl");

header("Content-Type:application/octet-stream");

header("Content-Type:application/download");;

header('Content-Disposition:attachment;filename="testdata.xls"');

header("Content-Transfer-Encoding:binary");

$write->save('php://output');
