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
					
						<li><a href="">基础引路</a></li>
						<li><a href="#pricing">经验进阶</a></li>
						<li><a href="#pricing" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">学习方向</a>
						<ul id="fangxiang" class="dropdown-menu" role="menu">
   					 	<li><a href="#"  class="text-center">Android</a></li>
    					<li><a href="#"  class="text-center">PHP</a></li>
  						</ul>
						</li>
					
						<li><a href="#" data-toggle="modal" data-target="#login">登录</a></li>
					</ul>

					
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
        <a href="../user/register">
        <button type="button" class="btn btn-primary">注册</button>
        </a>
     </form>
      </div>
      
    </div>
  </div>
</div>
		<div id ="cleannav"class="clearfix"></div>
		
		
<!-- start pricing -->
		<section id="pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow bounceIn">
						<h2 class="text-uppercase">所有教程</h2>
					</div>
				<?php if(is_array($showallcourse)): $i = 0; $__LIST__ = $showallcourse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="../course/showonecourse?id=<?php echo ($vo["id"]); ?>">
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing text-uppercase">
							<div class="pricing-title" style="padding:0px;max-width:300px;">
								<img src="" alt="" style="width:100%;height:200px; max-width:300px;">
							</div>
							<ul>
								<li style="padding:0px;"><h4><?php echo ($vo["cname"]); ?></h4></li>
								<li><p><?php echo ($vo["ctitle"]); ?></p></li>
							</ul>
						</div>
					</div>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>
					

				</div>
			</div>
		</section>
		<!-- end pricing -->



		
		<div class="clearfix"></div>
			<footer>
			<div class="container">
				<div class="row">
					<p>Copyright © 2015 zero0.cn |   <a href="http://www.imicrolearn.com/" title="i微学" target="_blank">imicrolearn</a></p>
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