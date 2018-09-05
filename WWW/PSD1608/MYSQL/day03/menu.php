<?php
header('Content-Type:text/html;charset=utf-8');
$arr = array(
	     array('id'=>1,'name'=>'家用电器','pid'=>0),
		 array('id'=>2,'name'=>'手机,数码','pid'=>0),
		 array('id'=>3,'name'=>'电脑,办公','pid'=>0),
		 array('id'=>4,'name'=>'电视','pid'=>1),
		 array('id'=>5,'name'=>'空调','pid'=>1),
		 array('id'=>6,'name'=>'洗衣机','pid'=>1),
		 array('id'=>7,'name'=>'合资品牌','pid'=>4),
		 array('id'=>8,'name'=>'国产品牌','pid'=>4),
		 array('id'=>9,'name'=>'壁挂式空调','pid'=>5),
		 array('id'=>10,'name'=>'柜式空调','pid'=>5),
		 array('id'=>11,'name'=>'滚筒洗衣机','pid'=>6),
		 array('id'=>12,'name'=>'洗烘一体衣机','pid'=>6),
		 array('id'=>13,'name'=>'TCL','pid'=>8),
		 array('id'=>14,'name'=>'乐视','pid'=>8),
);
/*无限级联菜单
 *  递归 遍历节点(树型结构)
 */
function menuTree($arr,$id){// $id 当前菜单的id是下一级菜单pid
	$li ='';
	$ul ='';
	$func = __FUNCTION__;
	foreach($arr as $v){ // $v 一维数组
		if($id==$v['pid']){ 
	   	   $code = $func($arr,$v['id']);
	   	   $li.= '<li>'.$v['name'].$code.'</li>';
	   	   /* 分析 家用电器一支
	   	    * 最后一层(四级菜单)
	   	    *    $v['id']=17 递归结束
	   	    *    '<li>'.$v['name'].null.'</li>';
	   	    *    '<ul>'. 最后一层li代码.'</ul>';
	   	    * 跳出一层(三级菜单)
	   	    *    '<li>'.$v['name'].$code.'</li>';
	   	    *    $code 是最后一层 ul菜单
	   	    * 再跳出一层 (二级菜单)
	   	    *    '<li>'.$v['name'].$code.'</li>';
	   	    *    $code 是最后一层 ul菜单 和三级菜单的ul
	   	    * ...   
	   	    */
		}
	}
	if($li!=''){
	  $ul.='<ul>'.$li.'</ul>';
	}
	return $ul;
}
echo menuTree($arr, 0);
?>
<!--   <ul>
     <li>家用电器
         <ul>
            <li>大家电
                <ul>
                    <li>空调
                        <ul>
                           <li>海尔</li>
                           <li>格力</li>
                        </ul>
                    </li>
                    <li>冰箱</li>
                    <li>洗衣机</li>
                </ul>
            </li>
            <li>生活电器
                <ul>
                    <li>饮水机</li>
                    <li>电话机</li>
                    <li>加湿器</li>
                </ul>
            </li>
            <li>厨房电器</li>
         </ul>
     </li>
     <li>手机,数码</li>
     <li>电脑,办公</li>
  </ul> -->












