<?php
namespace Admin\Model;
use Think\Model;

	class ReplyModel extends Model {    	
		protected $_validate = array
		(
				array('content','require','回复内容不能为空！',1),//默认情况下用正则进行验证			
		);  		
}