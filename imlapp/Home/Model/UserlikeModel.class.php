<?php 
namespace Home\Modle;
use Think\Model;

class UserlikeModel extends Model{
	public function userlike($userid)
	{
		$userlike = M('userlike');
		$c['userid']=$userid;
		$data = $userlike ->where($c)->select();
		return $data;
	}
}