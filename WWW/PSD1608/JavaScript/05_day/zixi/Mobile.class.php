<?php
header('Content-Type:text/html;charset=utf-8');
//1、定义一个类文件Mobile，在类文件中定义成员方法call，里面有代码"I can make a phone call".
//另外建立一个test.php文件，在test.php文件中应用autoload魔术方法，实例化Mobile类，访问类的成员方法call
class Mobile {
	
	function call(){
		echo "I can make a phone call";
	}
}