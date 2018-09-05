<?php
header('Content-Type:text/html;charset=utf-8');
/*e.===(全等于) 和!==(不全等于)严格比较的使用
    原理:PHP是弱类型语言 ,根据程序运行环境
            自动转换，比如 0,0.0 '0'"0"会自动转换为
      false,为了避免自动转换产生的错误，要有
      ===(全等于) 和!==(不全等于)解决  */
/* strpos:查找子字符串在字符串中首次出现的编号位置
 * 格式:mixed strpos ( string $haystack
 *  , mixed $needle [, int $offset = 0 ] )
 *  成功返回编号位置，失败返回 false
 *  编号从0开始
 */
 $var ='abcdef';
 echo strpos($var,'a');//0
 echo '<br/>';
 echo strpos($var,'e');//4
 echo '<br/>';
 echo strpos($var,'z');//false
 echo '<hr/>';
 $str ='hellowrold';
 // 在$str 中查找h 如果存在输出 ok，否则输出error
 //===(全等于) 和!==(不全等于)严格比较
 //将 0和false区分开
 if(0!==false){//产生错误: 0自动转为false
 	echo 'ok';      // false!==false --fasle
 }else{             // 0!==false    --true
 	echo 'error';   // 2!==fasle    --true
 }
 echo '<br/>';
 if(strpos($str,'h')===false){//产生错误: 0自动转为false
 	echo 'error';   // false===false --true
 }else{             // 0===false     --false
 	echo 'ok';      // 2===fasle    --false
 }
 







