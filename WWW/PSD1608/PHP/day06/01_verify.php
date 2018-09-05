<?php
header('Content-Type:text/html;charset=utf-8');
// 获得4位的随机整数
$code = mt_rand(1000,9999);
echo $code;
echo '<br/>';
// 获得4位颜色是红色的随机整数
$code ='<span style="color:#f00">'
		.mt_rand(1000,9999).'</span>';
echo $code;
echo '<br/>';
// 获得每位一个颜色的4位随机整数
$code ='';
$code .='<span style="color:#f00">'
		.mt_rand(0,9).'</span>';
$code .='<span style="color:#0ff">'.mt_rand(0,9).'</span>';
$code .='<span style="color:#00f">'.mt_rand(0,9).'</span>';
$code .='<span style="color:#0f0">'.mt_rand(0,9).'</span>';
echo $code;
echo '<br/>';
// 获得每位一个随机颜色的4位随机整数
$code ='';
$code .='<span style="color:
		rgb('.mt_rand(0,255).','
		.mt_rand(0,255)
        .','.mt_rand(0,255).')">'
		.mt_rand(0,9).'</span>';
$code .='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
$code .='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
$code .='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo $code;
echo '<br/>';
// 用循环实现：获得每位一个随机颜色的4位随机整数
$code ='';
for($i=1;$i<=4;$i++){
	$rand = mt_rand(0,9);
	$code .='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
}
echo $code;
echo '<hr/>';
// 用循环实现：获得每位一个随机颜色的4位随机字符(数字和字母)
$code ='';
$str ='abcdefghigklmnopqrstuvwxyzQWERTYUIOPLKJHGFDSAZXCVBNM0123456789';
for($i=1;$i<=4;$i++){
	//获得$str中任意的一个随机字符
	$rand =substr($str,mt_rand(0,
			strlen($str)-1),1);
	$code .='<span style="color:rgb('
			.mt_rand(0,255).','
			.mt_rand(0,255).','
			.mt_rand(0,255).')">'
			.$rand.'</span>';
}
echo $code;








