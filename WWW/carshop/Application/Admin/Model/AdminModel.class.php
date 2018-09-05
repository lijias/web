<?php
namespace Admin\Model;
use Think\Model;

	class AdminModel extends Model {    	
		protected $_validate = array
		(
				array('username','require','管理员名称不能为空！',1),//默认情况下用正则进行验证
				array('username','','管理员名称不能重复！',1,'unique',1),//在新增的时候验证name字段是否唯一
				array('username','','管理员名称不能重复！',1,'unique',2),//在新增的时候验证name字段是否唯一
				array('password','require','管理员密码不能为空！',1),
				//array('verify','verify','验证码错误！',1,'callback',4),
				
		); 
		public function getpri($roleid)
		{
			$role = D("role");
			$privilege = D("Privilege");
			$role->field('rolename,pri_id_list')->find($roleid);
			session('rolename',$role->rolename);
			if ($role->pri_id_list=='*') 
			{
				session('privilege','*');
				$menu=$privilege->where("parentid=0")->select();
				foreach ($menu as $k=>$v)
				{
					$menu[$k]['sub']=$privilege->where('parentid='.$v['id'])->select();
				}
				session('menu',$menu);
			}
			else 
			{
				
				$pris=$privilege->field('id,parentid,pri_name,mname,cname,aname,CONCAT(mname,"/",cname,"/",aname) url')->where("id IN({$role->pri_id_list})")->select();
				$_pris=array();
				$menu=array();
				foreach ($pris as $k=>$v)
				{
					$_pris[]=$v['url'];
					if ($v['parentid']==0) 
					{
						$menu[]=$v;
					}
				}
				session('privilege',$_pris);
				foreach ($menu as $k=>$v)
				{
					foreach ($pris as $k1=>$v1)
					{
						if ($v1['parentid']==$v['id']) 
						{
							$menu[$k]['sub'][]=$v1;
						}
					}
				}
				session('menu',$menu);
			}
		}
		public function login()
		{
			$password = $this->password;
			$info = $this->where("username='$this->username'")->find();
			if ($info) 
			{
				$id=$info['id'];
				//$roles=$this->field('b.rolename')->alias('a')->join('LEFT JOIN cs_role b ON a.roleid=b.id')->where("a.id=$id")->find();
				$rolename=$roles['rolename'];
				if ($info['password']==md5($password))
				{
					session('id',$info['id']);
					session('username',$info['username']);
					//session('rolename',$rolename);
					$this->getpri($info['roleid']);					
					return true;
				}
				else 
				{
					return false;
				}
			}
			else 
			{
				return false;
			}
		}
		public function verify($code)
		{
			$verify = new \Think\Verify();
			return $verify->check($code,'');
		} 		
}