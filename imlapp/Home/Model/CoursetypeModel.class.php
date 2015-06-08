<?php 
namespace Home\Model;
use Think\Model;

class CoursetypeModel extends Model
{
	public function showtype($typeid){
		$type = M('coursetype');
		$c['id']=$typeid;
		$data = $type->where($c)->select();
		return $data;
	}

	public function showalltype(){
		$type = M('coursetype');
		$data = $type->select();
		return $data;
	}
}