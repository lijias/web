<?php
namespace Admin\Controller;

	class SystemController extends CommonController 
{
		//友情链接管理
    	public function lst()
    	{
    		if (IS_POST)
    		{
    			$file ='./Application/Common/Conf/config.php';
    			$config = array_merge(include $file,array_change_key_case($_POST,CASE_UPPER));
    			$str = "<?php\r\nreturn ".var_export($config,true)."; ?>";
    			if (file_put_contents($file, $str)) 
    			{
    				$this->success("修改配置成功!",U("lst"));
    			}
    			else
    			{
    				$this->error("修改配置失败!");
    			}
    			return ;
    		}
        	$this->display();
    	}  	
}