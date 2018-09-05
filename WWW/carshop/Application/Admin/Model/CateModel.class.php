<?php
namespace Admin\Model;
use Think\Model;

	class CateModel extends Model {    	
		protected $_validate = array
		(
				array('name','require','栏目名称不能为空！',1),//默认情况下用正则进行验证
				array('name','','栏目名称不能重复！',1,'unique',1),//在新增的时候验证name字段是否唯一
		);  
		function catetree()
		{
			$data = $this->order("sort asc")->select();
			return $this->resort($data);	
		} 
		function resort($data,$parentid=0,$level=0)
		{
			static $ret = array();
			foreach ($data as $k=>$v)
			{
				if ($v['parentid']==$parentid) 
				{
					$v['level'] = $level;
					$ret[] = $v;
					$this->resort($data,$v['id'],$level+1);
				}
			}
			return $ret;
		}
		public function childid($cateid)
		{
			$data = $this->select();
			return $this->getchildid($data,$cateid);
		}
		public  function getchildid($data,$parentid)
		{
			static $ret = array();
			foreach ($data as $k=>$v)
			{
				if ($v['parentid']==$parentid) {
					$ret[]=$v['id'];
					$this->getchildid($data, $v['id']);
				}
			}
			return $ret;
		}
		public function _before_delete($options)
		{
			//单独删除时候id的值,是一个整型,是一个单独的id
			//$options['where']['id'];
			if (is_array($options['where']['id']))
			{
				$arr = explode(",", $options['where']['id'][1]);
				$soncates = array();
				foreach ($arr as $k=>$v)
				{
					$soncates2 = $this->childid($v);
					$soncates = array_merge($soncates,$soncates2);
				}
					$soncates = array_unique($soncates);
					$childrenids = implode(",", $soncates);
			}
			else
			{
				$childrenids = $this->childid($options['where']['id']);
				$childrenids = implode(",", $childrenids);
			} 
			if ($childrenids)
			{
				$this->execute("delete from cs_cate where id in($childrenids)");
			}
		}
}