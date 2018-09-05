<?php
namespace Admin\Model;
use Think\Model;

	class PrivilegeModel extends Model {    	
		protected $_validate = array
		(
				array('pri_name','require','权限名称不能为空！',1),//默认情况下用正则进行验证
				array('mname','require','模块名称不能为空！',1),
				array('cname','require','控制器名称不能为空！',1),
				array('aname','require','方法名称不能为空！',1),
				array('pri_name','','管理员名称不能重复！',1,'unique'),//在新增的时候验证name字段是否唯一
				
		);  
		public function privilegetree()
		{
			$date=$this->select();
			return $this->resort($date);
		}
		public function resort($data,$parentid=0,$level=0)
		{
			static $ret=array();
			foreach ($data as $k=>$v)
			{
				if ($v['parentid']==$parentid) 
				{
					$v['level']=$level;
					$ret[]=$v;
					$this->resort($data,$v['id'],$level+1);
				}
			}
			return $ret;
		}
		//删除	
		public  function childid($priid)
		{
			$data = $this->select();
			return $this->getchildid($data,$priid);
		}
		public function getchildid($data,$parentid)	
		{
			static $ret = array();
			foreach ($data as $k=>$v)
			{
				if ($v['parentid']==$parentid) 
				{
					$ret[]=$v['id'];
					$this->getchildid($data, $v['id']);
				}
			}
			return $ret;	
		}
		public function _before_delete($options)
		{
			if (is_array($options['where']['id']))
			{
				$arr = explode(",", $options['where']['id'][1]);
				$sonprires = array();
				foreach ($arr as $k=>$v)
				{					
					$sonprires2 = $this->childid($v);
					$sonprires = array_merge($sonprires,$sonprires2);
				}
				$sonprires = array_unique($sonprires);
				$childrenids = implode(",", $sonprires);
			}
			else
			{
				$childrenids = $this->childid($options['where']['id']);
				$childrenids = implode(",", $childrenids);
			}
			if ($childrenids) 
			{
				$this->execute("delete from cs_privilege where id in($childrenids)");
			}
		}
		
		
		
		
		
		
		
}