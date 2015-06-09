<?php 
namespace Home\Controller;
use Think\Controller;

class CourseController extends CommonController
{

//展示所有教程
	public function showcourse(){
		$this->loginover();
		$this->showtype();
		$course = D('course');
		$data = $course ->showallcourse();
		$this->assign('showallcourse',$data);
		$type = array('i'=>'1');
		$this->assign('type',$type);
		$this->display();
	}

//分类显示教程
	public function typecourse(){
		$this->loginover();
		$this->showtype();
		$typeid = I('get.id');
		$course = D('course');
		$nowid=null;
		$data = $course ->typecourse($typeid,$nowid);
		$this->assign('showallcourse',$data);
		$type = D('coursetype');
		$d = $type->showtype($typeid);
		$this->assign('type',$d);

		$this->display('showcourse');
	}


//详细展示一个教程的内容，步骤式内容
	public function showonecourse(){
		$this->loginover();
		$this->showtype();
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


	//添加教程
	public function addcourse(){
		$this->loginover();
		$this->showtype();
		$user = session('username');
		$this->display();

	}

}