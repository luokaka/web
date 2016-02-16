<?php
namespace Web\Controller;

class IndexController extends base {
	
	public function login(){
    	$this->display('login');
    }
    public function register(){
    	$this->display('register');
    }

    public function index(){
    	$this->display('index');	
    }
    
    public function jiankong(){
        
    	$this->display('jiankong');
    }

    public function memery(){

    	$this->display('memery');
    }

    public function memeryswap(){
    	$this->display('memeryswap');
    }
    public function cpuload(){
    	$this->display('cpuload');
    }
    public function cpuused(){
    	$this->display('cpuused');
    }
    public function diskio(){
    	$this->display('diskio');
    }
    public function diskused(){
    	$this->display('diskused');
    }
   
    public function netused(){
    	$this->display('netused');
    }
    
     public function log(){
    	$this->display('log');
    }
     public function logsearch(){
    	$this->display('logsearch');
    }
     public function logadd(){
    	$this->display('logadd');
    }
    public function logwarning(){
    	$this->display('logwarning');
    }
    public function loginfo(){
    	$this->display('loginfo');
    }
    public function loglist(){
    	$this->display('loglist');
    }
    public function addip(){
        $this->display('addip');
    }
    public function uppwd(){
        $this->display('uppwd');
    }

    public function upemail(){
        $this->display('upemail');
    }
    public function checkemail(){
        $this->display('checkemail');
    }

    public function checkphone(){
        $this->display('checkphone');
    }
    public function upphone(){
        $this->display('upphone');
    }
}