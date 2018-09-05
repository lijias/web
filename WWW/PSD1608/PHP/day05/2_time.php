<?php
header('Content-Type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
//  距离 2017-1-1的倒计时
//当前的时间戳
$now = time();
// 将来2017-1-1 时间戳
$future = strtotime('2017-1-1');
// 剩余的秒数
$remain_time = $future -$now;
//剩余的天 =   剩余的秒数/(1天的秒) 向下取整
$remain_day =floor($remain_time/(60*60*24));
//剩余的小时 =（剩余的秒数 -天的秒数）/(60*60) 向下取整
$remain_hours =floor(($remain_time -$remain_day*60*60*24)/(60*60));
//剩余的分钟 =（剩余的秒数 -天的秒数 -小时的秒）/60 向下取整
$remain_minutes =floor(($remain_time -$remain_day*60*60*24 -$remain_hours*60*60)/60);
//剩余的秒 =（剩余的秒数 -天的秒数 -小时的秒 -分的秒)
$remain_seconds = $remain_time -$remain_day*60*60*24 -$remain_hours*60*60 -$remain_minutes*60;
echo '距离 2017-1-1的倒计时:',$remain_day,'天',$remain_hours,'小时',$remain_minutes,'分钟',$remain_seconds,'秒'; 
 


