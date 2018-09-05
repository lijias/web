<?php 
	namespace Home\Model;
	use Think\Model;
	
	class UserInfoModel extends Model
	{
		public $tableName = "userinfo";
		
		//验证的规则
		public $_validate = array(
			array("userName","require","用户名不能为空！"),
			array("password","require","密码不能为空！"),
			array("checkCode","require","验证码不能为空！"),
		);
	}
?>








