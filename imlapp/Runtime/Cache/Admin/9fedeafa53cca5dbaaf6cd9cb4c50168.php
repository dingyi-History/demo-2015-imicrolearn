<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js login" lang="zh-CN">
<head>
<meta charset="utf-8">
<title>i微学后台管理</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="/imicrolearn/Public/favicon.ico">
<!-- Le styles -->
<link href="/imicrolearn/Public/backend/css/twitter/bootstrap.css" rel="stylesheet">
<link href="/imicrolearn/Public/backend/css/base.css" rel="stylesheet">
<link href="/imicrolearn/Public/backend/css/admin.css" rel="stylesheet">
<link href="/imicrolearn/Public/backend/css/twitter/responsive.css" rel="stylesheet">
<link href="/imicrolearn/Public/backend/css/jquery-ui-1.8.23.custom.css" rel="stylesheet">
<script src="/imicrolearn/Public/backend/js/plugins/modernizr.custom.32549.js"></script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

</head>
	<body>

		
		<div id ="cleannav"class="clearfix"></div>
		

		
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


		
		<div class="clearfix"></div>
		
		

		<script type="text/javascript" src="/imicrolearn/Public/js/jquery.js"></script> 
<script type="text/javascript" src="/imicrolearn/Public/backend/js/plugins/jquerypp.custom.js"></script> 
<script type="text/javascript" src="/imicrolearn/Public/backend/js/plugins/jquery.bookblock.js"></script> 
<script language="javascript" type="text/javascript" src="/imicrolearn/Public/backend/js/plugins/jquery.uniform.min.js"></script> 
	</body>
</html>