<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="/imicrolearn/Public/css/animate.min.css">
		<link rel="stylesheet" href="/imicrolearn/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/imicrolearn/Public/css/font-awesome.min.css">
		<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/imicrolearn/Public/css/templatemo-style.css">
		<link rel="stylesheet" href="/imicrolearn/Public/css/imicrolearn.css">
		<link rel="shortcut icon" href="/imicrolearn/Public/favicon.ico">
		<title>【i微学】一点一滴轻松学</title>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">

				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="../index/index" class="navbar-brand">【i微学】</a>
				</div>
				
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
					
             
						<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">学习方向</a>
						<ul id="fangxiang" class="dropdown-menu" role="menu">
              <li><a href="#"  class="text-center">Android</a></li>
              <li><a href="#"  class="text-center">php</a></li>
              <li><a href="#"  class="text-center">javaweb</a></li>
   					 	<li><a href="#"  class="text-center">mysql</a></li>
  						</ul>
						</li>
				         
            <li><a href="#" data-toggle="modal" data-target="#login">登录</a></li>
           
					</ul>

					
				</div>
				
			</div>
      <div class="row" >
      <div id="full" class="container-fluid">
      <div id="cb"></div>
      </div>
      </div>
</nav>

<!-- Modal -->
<div class="modal fade " id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">【请登录】</h4>
      </div>
      <div class="modal-body">
       
       <form action="../user/islogin" method="post"><div class="form-group">
    	<label for="name"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
   		<input type="text" class="form-control" id="name" placeholder="用户名" name="name" required>
  		</div>
  		<div class="form-group">
    	<label for="pwd"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
    	<input type="password" class="form-control" id="pwd" placeholder="密码" name="pwd" required>
  		</div>
  		<div class="checkbox">
    	<label>
      	<input type="checkbox">自动登录
    	</label>
  		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">登录</button>
        <a href="/imicrolearn/index.php/user/register">
        <button type="button" class="btn btn-primary">注册</button>
        </a>
     </form>
      </div>
      
    </div>
  </div>
</div>



		<div id ="cleannav"class="clearfix"></div>
		
		

<div class="container-fluid" style="padding:0;">
<div id="login" >
<div class="container">
<div class="row">
<div class="col-md-5 col-md-offset-2 ">
	<br><br><br><br><br><br><br><br><br><br>
<h3 style="color:white;">你好！小伙伴,请登录！</h3>
<p style="color:white;">今天跬步，明日千里。</p>
</div>

<div id="logintext" class="col-md-4 col-md-offset-1">
<br><br><br><br><br><br><br><br><br><br>
<form  action="./islogin" method="post" class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="e3">用户名</label>
    <input type="text" class="form-control" id="e3" placeholder="用户名" name="name" required>
  </div>
  <br><br>
  <div class="form-group">
    <label class="sr-only" for="e4">密码</label>
    <input type="password" name="pwd" class="form-control" id="e4" placeholder="密码" required>
  </div>
  <br><br>
  
  <div class="checkbox">
    <label style="color:white;">
      <input type="checkbox"> 记住密码
    </label>
  </div><br><br>
  <div id="tijiao">
  <button type="submit" class="btn btn-info">登陆</button>
  <a href="../user/register"><button type="button" class="btn btn-warning">注册</button></a>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>

		
		<div class="clearfix"></div>
			<footer>
			<div id="full" class="container-fluid">
			<div id="cb"></div>
			<div id="footer">
				<div class="container">
				<div class="row"  style="color:white;">
					<div class="col-md-4">
					<br><br><br><br>
					<img id="logo" src="/imicrolearn/Public/imlogo.png" alt="">
					<div class="text-center">imicrolearn</div>
					</div>

					<div class="col-md-4 hidden-xs">
					<br><br>
					<div class="list-group">
  <a href="" class="list-group-item list-group-item-success">加入我们</a>
  <a href="#" class="list-group-item list-group-item-info">基础引路</a>
  <a href="#" class="list-group-item list-group-item-warning">经验进阶</a>
  <a href="#" class="list-group-item list-group-item-danger">梦想与现实</a>
</div>
					</div>
					<div class="col-md-4 hidden-xs hidden-md">
					<br><br>
<div class="list-group">
  <a href="../user/login" class="list-group-item list-group-item-success">加入我们</a>
  <a href="#" class="list-group-item list-group-item-info">基础引路</a>
  <a href="#" class="list-group-item list-group-item-warning">经验进阶</a>
  <a href="#" class="list-group-item list-group-item-danger">梦想与现实</a>
</div>

					</div>
				</div>
				<div  class="row" style="color:white;">
				<br>
					<p>Copyright © 2015 zero0.cn |   <a style="color:white;" href="http://www.imicrolearn.com" target="_blank">imicrolearn.com</a></p>
				</div>
				</div>
			</div>
			</div>
			<div class="row" >
			<div id="full" class="container-fluid">
			<div id="cb"></div>
			</div>
			</div>
	</footer>
		<script src="/imicrolearn/Public/js/jquery.js"></script>
		<script src="/imicrolearn/Public/js/bootstrap.min.js"></script>
		<script src="/imicrolearn/Public/js/wow.min.js"></script>
		<script src="/imicrolearn/Public/js/jquery.singlePageNav.min.js"></script>
		<script src="/imicrolearn/Public/js/custom.js"></script>
	</body>
</html>