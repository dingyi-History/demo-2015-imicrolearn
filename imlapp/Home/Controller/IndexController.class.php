<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
	
    public function index(){
    	$this->loginover();
    	$this->showtype();
    	$this->display();
    }
}