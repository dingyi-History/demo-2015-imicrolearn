<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js login" lang="zh-CN">
<head>
<meta charset="utf-8">
<title>i微学后台管理</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="/imicrolearn/Public/favicon.ico">
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
	<body>

		
		<div id ="cleannav"class="clearfix"></div>
	   <div class="container">
  	
		
<div id="login_page"> 
  <!-- Login page -->
  <div id="login">
    <div class="row-fluid fluid">
      <div class="span5"> <img src="/imicrolearn/Public/imlogo.png" /> </div>
      <div class="span7">
        <div class="title">
          <span class="name">i微学</span>
          <span class="subtitle">imicrolearn.com</span>
        </div>
        <form class="form-search row-fluid "  action="./admin/index/adminlogin" method="post">
          <div class="input-append row-fluid fluid">
            
			用户名<input type="text" name="name" placeholder="用户名" required><br>
			<div id="adminpwd"></div>
      密码<input   type="text" name="pwd" placeholder="密码"  required><br>
			<input   type="submit" value="登录" >

            </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End #login --> 
  <!-- <img src="img/ajax-loader.gif"> --> 
</div>
<!-- End #loading --> 


		
    </div>
		<div class="clearfix"></div>
		
		

	</body>
</html>