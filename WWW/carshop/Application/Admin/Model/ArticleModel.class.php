<?php
namespace Admin\Model;
use Think\Model;

	class ArticleModel extends Model {    	
		protected $_validate = array
		(
				array('title','require','文章标题不能为空！',1),//默认情况下用正则进行验证
				array('title','','文章标题不能重复！',1,'unique',1),//在新增的时候验证name字段是否唯一
		);  		
}