<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
	
    public function index(){
    	$username = $_SESSION['username'];
    	$this->assign('showusername',$username);

    	$this->showtype();
    	$this->display();
    }
}