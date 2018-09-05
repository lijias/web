<?php
header('Content-Type:text/html;charset=utf-8');
//strlen:获得字符串的字符长度
$var = 'abcde';
echo strlen($var);
echo '<br/>';
$var ='abcdefgh';
// 获得字符串  fgh
echo  substr($var,5);
echo '<br/>';
echo substr($var,2,3);//cde
echo '<br/>';
echo substr($var,2,1);//c
echo '<br/>';
// 随机截取任意一位 :随机开始的编号位置mt_rand()
//  获得 字符串的 总长度 strlen($var)
echo substr($var,mt_rand(0,strlen($var)-1)
	,1);
echo '<br/>';
//如果$start 开始编号大于字符串的总长度，返回false
echo substr($var,16,3);// false
echo '<br/>';
//(4)$start,$length如果是负值，位置倒数
$var ='abcdefgh';
echo substr($var,2,-2);//cdef
echo '<br/>';
// 截取除了最后一位的所有字符串
echo substr($var,0,-1);
echo '<br/>';
echo substr($var,-5,2);//de
echo '<br/>';
echo substr($var,-5,-2);//def
echo '<br/>';
echo substr($var,-6,4);//cdef
echo '<hr/>';
$var ='heLLO worLD';
echo strtoupper($var);
echo '<br/>';
echo strtolower($var);
echo '<br/>';
echo ucfirst($var);
echo '<br/>';
echo ucwords($var);
echo '<hr/>';
$var = '  AB  ';
echo '#',trim($var),'#';
echo '<br/>';
echo '#',ltrim($var),'#';
echo '<br/>';
echo '#',rtrim($var),'#';
echo '<br/>';
$var ='.jpg.';
echo trim($var,'.');
echo '<br/>';
echo ltrim($var,'.');
echo '<br/>';
echo rtrim($var,'.');
echo '<br/>';

























