<?php
namespace Admin\Controller;

class IndexController extends base {
	
	public function login(){
    	$this->display('login');
    }
    

    public function index(){
    	$this->display('index');	
    }
   

}