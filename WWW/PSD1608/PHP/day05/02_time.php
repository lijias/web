<?php
header('Content-Type:text/html;charset=utf-8');

date_default_timezone_set('Asia/Chongqing');
echo date('Y-m-d H:i:s');
echo '<br/>';
echo date_default_timezone_get();
echo '<br/>';
//  获得年
echo date('Y');
echo '<br/>';
//  获得月
echo date('m');
echo '<br/>';
//  获得日
echo date('d');
echo '<br/>';
//  获得一周中的星期几(0-6)
echo date('w');
echo '<br/>';
echo '<hr/>';
//  获得当前的系统时间
echo date('Y年m月d日 H 小时i分钟s秒',time());
echo '<br/>';
echo time();
echo '<br/>';
//  获得3天后的现在
echo date('Y-m-d H:i:s',time()+60*60*24*3);
echo '<br/>';
// 获得 5天前的现在
echo date('Y-m-d H:i:s',time()-60*60*24*5);
echo '<br/>';
echo date('Y-m-d H:i:s',strtotime('- 5days'));
// 获得 7天前的现在
echo '<br/>';
echo date('Y-m-d H:i:s',strtotime('-1week'));
echo '<br/>';
// 获得 2年 7个月 15天 8小时后的现在
echo date('Y-m-d H:i:s',strtotime('+2years +7months +15days +8hours'));
echo '<br/>';
// 获得  1年  8个月 22天 5小时前的现在
echo date('Y-m-d H:i:s',strtotime('-1year -8months -22days -5hours'));
echo '<br/>';
// 获得 未来时间  2019-01-01
echo date('Y-m-d',strtotime('2019-01-01'));
echo '<br/>';
echo date('Y-m-d',strtotime('2019-18-01'));
echo '<br/>';
// mktime:取得一个日期的 Unix 时间戳
//  参数顺序: 小时 ,分钟, 秒,月,日,年
echo date('Y-m-d',mktime(0,0,0,18,01,2019));
echo '<br/>';
// 获得 下一个月的日期
$nextmonth = mktime(0,0,0,date('m')+1,
		date('d'),date('Y'));
echo date('Y-m-d',$nextmonth);
echo '<br/>';
// (7) microtime:返回当前 Unix 时间戳和微秒数
echo time();
echo '<br/>';
echo microtime();
echo '<br/>';
echo microtime(true);

































