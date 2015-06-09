<?php 
namespace Home\Controller;
use Think\Controller;

class WayController extends CommonController
{

	//展示最新的分享的学习思想路径
	public function showway(){
		$this->loginover();
		$this->showtype();

		$way = D('way');
		$data = $way->allway();
		$this->assign('allway',$data);
		$this->display();
	}

}