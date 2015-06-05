<?php 
namespace Home\Model;
use Think\Model;

class CourseModel extends Model{

	public function showallcourse(){
		$course = M('course');
		$data = $course->select();
		return $data;
	}
}