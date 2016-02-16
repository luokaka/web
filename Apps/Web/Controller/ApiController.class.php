<?php
namespace Web\Controller;

class ApiController extends base {
	
	public function doreg(){
    	
    }
    public function logout(){
        session(null);
        $this->redirect('Index/login');
        exit;
    }
    public function dologin(){
    	echo 'ok';
        session('usid',1);
        exit;
    }

}