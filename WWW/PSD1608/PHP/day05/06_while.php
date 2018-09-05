<?php
header('Content-Type:text/html;charset=utf-8');
// 输出1-5 数
for($i=1;$i<=5;$i++){
	echo $i.'<br/>';
}
// while
$i=1;
while($i<=5){
	echo $i.'<br/>';
	$i++;
}
// do...while
$i=1;
do{
  echo $i.'<br/>';
  $i++;
}while($i<=5);

echo '<hr/>';
/*b.当第一次条件为假时，do...
  while比while多执行一次  */
$i =1;
while($i<1){
  echo 'hello';
}
echo '<br/>';
$i =1;
do{
  echo 'hello';
}while($i<1);

echo '<hr/>';
// while 不定次数的循环
// mt_rand:获得 1-10随机整数
// 输出 4个 5 
// 初始值 $link=''  步长: strlen($link)
$link = '';
while(strlen($link)<4){
  $rand = mt_rand(1,10);
  if($rand==5){
     $link .= $rand;
  }	
}
echo $link;
echo '<hr/>';
$link='';
for($i=1;$i<=4;$i++){
	$rand = mt_rand(1,10);
	if($rand==5){
	   $link.= $rand;
	}
}
echo $link;
















