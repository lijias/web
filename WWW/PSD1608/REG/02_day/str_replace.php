<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 5、应用字符串替换函数，对下面的字符串进行替换：
   今天的晚饭是:"米饭、面条、炒饼"
   替换成喜欢吃的饭：
   今天的晚饭是:""

 */
$str='今天的晚饭是:米饭、面条、炒饼';
$s=array("米饭","面条","炒饼");
$p=array("米饭","鸡蛋","炒");
echo str_replace($s,$p,$str);
echo "<hr/>";
/*
 * 6、有如下的字符串：
   我是一个含有<span style='color:red;'>HTML</span>标签的<b>字符</b>串
   替换掉字符串中的HTML标签
 */
$subject="我是一个含有<span style='color:red;'>HTML</span>标签
		的<b>字符</b>串";
$pattern="/<\/?[\w\s\=\'\"\:\=\;]+>/";
$replace="";
echo $subject;
echo "<hr/>";
echo preg_replace($pattern,$replace,$subject);
/*
 * 7、有如下的字符串
   abcdhttps://www.baidu.com
   abchttp://www.sohu.com
   abcdhttp://music.yahoo.com
   abcdftp://www.163.com
 */
$subject="abcdhttps://www.baidu.comabchttp://www.sohu.comabcdhttp://music.yahoo.comabcdftp://www.163.com";
$pattern="/(https?|ftps?):\/\/(\w+)\.(.*?)\.(com|cn|net|org)/";
$replace="<a href='//\\1:\\2.\\3.\\4'>\\1://\\2.\\3.\\4</a>";
echo preg_replace($pattern,$replace,$subject);


















