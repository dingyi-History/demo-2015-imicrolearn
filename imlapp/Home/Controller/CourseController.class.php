<?php 
namespace Home\Controller;
use Think\Controller;

class CourseController extends CommonController
{

//展示所有教程
	public function showallcourse(){
		$course = D('course');
		$data = $course ->showallcourse();
		$this->assign('showallcourse',$data);
		//dump($data);
		$this->display();
	}


//详细展示一个教程的内容，步骤式内容
	public function showonecourse(){
		$courseid = I('get.id');
		$courseview  = D('CourseView');
		$condition['cid'] = $courseid;
		$data = $courseview->where($condition)->order('stepid')->select();
		$this->assign('onecourse',$data);
		
		$typeid =$data[0]['typeid'];
		$course =D('course');
		$coursename = $course->typecourse($typeid,$courseid);
		$this->assign('coursename',$coursename);
		$this->display();
	}

}