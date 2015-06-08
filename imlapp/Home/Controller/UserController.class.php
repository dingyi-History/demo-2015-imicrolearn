<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {



	//用户注册页面
    public function register(){
    	$this->display();
    }

    //用户登录页面
    public function login(){
    	
    	$this->display();
    }


   	//用户注册业务处理
    public function isregister(){
    	$user = D('user');
    	$name = I('post.name');
    	$pwd1 = I('post.pwd1');
    	$pwd2 = I('post.pwd2');
    	$email =I('post.email');

    	if($name && ($pwd1==$pwd2))
    	{
            $pwd = $pwd2;
            //先查看是否已经存在相同用户名
            $samename = $user ->samename($name);
            if(!$samename)
           {$rs = $user->adduser($name,$pwd,$email);}
    	}

        $msg0 = '对不起，注册失败';
        $msg1 = '恭喜你，注册成功。';
        $url = '../user/login';
        $this->issuccess($rs,$msg0,$msg1,$url);

    }

    //用户登录业务处理
    public function islogin(){
    	$user = D('user');
    	$name = I('post.name');
    	$pwd = I('post.pwd');

    	if($name && $pwd)
    	{
    		$rs = $user->isuser($name,$pwd);
    	}
        if($rs)
            {   $_SESSION['username'] = $name;}
    	$msg0 = '对不起，登录失败';
        $msg1 = '恭喜你，登录成功。';
        $url = '../index/index';
        $this->issuccess($rs,$msg0,$msg1,$url);

    }


//注销
    public function logout(){
        session('username',null); // 删除name
        $this->success('注销成功', '/imicrolearn');
    }
}