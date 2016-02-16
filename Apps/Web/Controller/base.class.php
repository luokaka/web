<?php
namespace Web\Controller;
use Think\Controller;

class  base extends Controller{
	public 		$uid 			= 0;
	public 		$redis 			= null;
    private   	$preKey 		= 'Companys:';		#客户的基本信息、配置信息
    public function _initialize(){

    	if(!in_array(ACTION_NAME,explode(',',"login,dologin,register,doreg,logout"))){
             if(!isset($_SESSION['usid'])||!session('?usid')){      
                 $this->redirect('login');
             }
        }else{
        	if(session('?usid')&&ACTION_NAME!='logout'){      
                 $this->redirect('Index');
             }
        }
        //$this->redis = Cache::getInstance('Redis');
    	$this->assign('action',ACTION_NAME);
    }
    
}