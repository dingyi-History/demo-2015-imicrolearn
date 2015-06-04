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
}