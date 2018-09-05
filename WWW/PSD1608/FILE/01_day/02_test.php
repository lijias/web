<?php
header('Content-Type:text/html;charset=utf-8');
$filename="note.html";
echo "当前文件的创建时间:".
date("Y-m-d H:i:s",filectime($filename));
echo "<br/>";
echo "当前文件的修改时间:".
date("Y-m-d H:i:s",filemtime($filename));
echo "<br/>";
echo "当前文件的访问时间:".
date("Y-m-d H:i:s",fileatime($filename));
//
echo "<hr/>";
$pathname="bb";
$dir=opendir($pathname);
/*while($f){
echo $f;
$f = readdir($dir);
echo "<br/>";*/
while ($f=readdir($dir)){
	echo $f;
	echo "<br/>";
}
closedir($dir);