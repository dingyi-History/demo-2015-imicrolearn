<?php 
namespace Home\Model;
use Think\Model;

class UserModel extends Model {

	
//判断是否用户名已经存在
	public function samename($name)
	{
		$user = M('user');
		$rs = $user ->where("name = '$name'") ->find();
		return $rs;
	}

//注册用户 ok
	public function adduser($name,$pwd,$email)
	{
		$user = M('user');
		$data = array(
			'name'=> "$name",
			'pwd'=> "$pwd",
			'email' => "$email",
			);
		return $user->add($data);
	}


//判断登录用户名和密码是否匹配
	public function isuser($name,$pwd)
	{
		 $user = M('user');
		// 查找status值为1name值为think的用户数据 ,查询为安全需要加单引号
		$data = $user->where("name='$name' AND pwd='$pwd'")->find();
		return $data;

	}
}

 ?>