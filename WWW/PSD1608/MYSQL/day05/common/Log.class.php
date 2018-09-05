<?php
class Log{




	static function JLog($title,$str){
		if(!isset($num)){
			static $num=1;
		}
		
		if(is_array($str)){
			$str=json_encode($str);
		}

		$f=fopen('./log.txt','a');
		fwrite($f,$num." \r ".$title."\n".$str."\n");
		fclose($f);
		$num++;
	}
}