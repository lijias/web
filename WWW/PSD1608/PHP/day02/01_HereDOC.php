<?php
header('Content-Type:text/html;charset=utf-8');
$str ='
	 <ul>
	   <li>one</li>
	   <li>two</li>
	   <li>three</li>	
	 </ul>	
	';
echo $str;

//HereDoc(自定义定界符)
$var ='tom';
$str =<<<AA
   <ul>
	   <li>one</li>
	   <li>two</li>
	   <li>$var</li>
	   <li>\\</li>	
   </ul>
AA;
echo $str;
echo '<br/>';
//NowDoc(自定义定界符)
$var ='tom';
//$str =<<<'UL'
//   <ul>
//	   <li>one</li>
//	   <li>two</li>
//	   <li>$var</li>
//	   <li>\\</li>
//   </ul>
UL;
echo $str; 








