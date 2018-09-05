<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myclass 
{
    protected $CI;
    
    public function __construct()
    {
       $this->CI =& get_instance();
    }
    
    public function some_method()
    {
        echo $this->CI->config->item('base_url');
    }
}