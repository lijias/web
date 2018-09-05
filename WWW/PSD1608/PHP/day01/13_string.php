<?php
header('Content-Type:text/html;charset=utf-8');
/*(a)W3C规定在浏览器中看到特殊符号必须用
  HTML实体,PHP中也必须用HTML实体实现  
  D>A B<C
  Tom & Jerry
  he said "this's a test" 
*/
$str = 'D&gt;A B&lt;C
  Tom &amp; Jerry
  he said &quot;this&#39;s a test &quot;';
echo $str;
echo '<hr/>';
/*(b)在源代码中用转义字符,在PHP中当单引号和 
 * 双引号冲突时用转义字符  */
echo '<a href="#">链接</a><br/>';
echo '<br/>';
echo '<a href=\'#\'>链接</a><br/>';
echo '<br/>';
echo "<a href=\"#\">链接</a><br/>";










