<?php 
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller
{
	//统一的结果处理方法
	public function issuccess($rs,$msg0,$msg1,$url){
		if ($rs) {
    		  $this->success($msg1, $url);
    	}
    	else{
    		$this->error($msg0);
    	}
	}

	public function loginover(){
		$username = $_SESSION['username'];
    	$this->assign('showusername',$username);
	}
	
	public function isuser()
	{
		$username = I('session.username');
		if(empty($username))
		{
			$this->error('对不起，请先登录。');
			//重定向到指定的URL地址
			//redirect('../user/login', 2, '对不起，没登录。');
		}
		else
			{return $username;}
	}

	public function showtype(){
		$type = D('coursetype');
		$data = $type->showalltype();
		$this->assign('alltype',$data);
	}



}