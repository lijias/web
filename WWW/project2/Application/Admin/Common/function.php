<?php
function getTypeByProduct($fid=0,$fstr="",$indentNum=0){
	$Type=M('Type');
	$arr=$Type->where("fid=$fid and state<9")->select();
	$optionStr="";
	$indentStr=str_repeat("—", $indentNum);
	$indentNum++;
	foreach($arr as $v){
		$optionStr.="<option value='>{$fstr}{$v['id']}>'>{$indentStr}{$v['tname']}</option>";
		$nFstr=$fstr."{$v['id']}>";
		$strS=getTypeByProduct($v['id'],$nFstr,$indentNum);
		$optionStr.=$strS;
	}
	return $optionStr;
}
//获取第一级分类
function getTypes($fid=0,$indentNum=0){
	$Type=M('Type');	
	$arr=$Type->where("fid=$fid and state<9")->select();
	$optionStr="";
	//产生缩进字符串
	$indentStr=str_repeat("—", $indentNum);
	$indentNum++;
	foreach($arr as $v){
		$optionStr.="<option value='{$v['id']}'>{$indentStr}{$v['tname']}</option>";
		//获取子集  
		$sStr=getTypes($v['id'],$indentNum);
		$optionStr.=$sStr;
	}
	return $optionStr;
}
function getTypeByArr($fid=0,$indentNum=0){
	$Type=M("Type");
	$arr=$Type->where("fid=$fid and state<9")->select();
	static $reArr=array();
	$str=str_repeat("—", $indentNum);
	$indentNum++;
	foreach($arr as $v){
		$reArr[]=array('id'=>$v['id'],'tname'=>$str.$v['tname']);
		getTypeByArr($v['id'],$indentNum);
	}
	return $reArr;
}













