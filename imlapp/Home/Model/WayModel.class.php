<?php 
namespace Home\Model;
use Think\Model;

class WayModel extends Model{

	public function allway(){
		$way = M('way');
		$data = $way->order('wid desc')->select();
		return $data;
	}

}