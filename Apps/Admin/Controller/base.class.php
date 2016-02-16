<?php
namespace Admin\Controller;
use Think\Controller;

class  base extends Controller{
	public 		$uid 			= 0;
	public 		$redis 			= null;
    
    public function _initialize(){
        
    	$this->assign('action',ACTION_NAME);
    }
    
}