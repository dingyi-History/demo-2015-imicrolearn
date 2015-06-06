<?php 
namespace Home\Model;
use Think\Model;

class CourseModel extends Model{

	public function showallcourse(){
		$course = M('course');
		$data = $course->select();
		return $data;
	}

	public function typecourse($typeid,$nowid)
	{
		$course = M('course');
		$condition['ctypeid']=array('EQ',"$typeid");
		$condition['cid']  = array('NEQ',"$nowid");
		$data = $course->where($condition)->select();
		return $data;
	}
}