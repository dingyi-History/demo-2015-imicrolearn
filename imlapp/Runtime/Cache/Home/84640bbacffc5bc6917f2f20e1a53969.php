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
					
<li><a href="#home">引言</a></li>
<li><a href="#feature">引路与进阶</a></li>
<li><a href="#pricing">主题与方法</a></li>
<li><a href="#download">下载APP</a></li>
<li><a href="#contact">注册</a></li>

  
             <li><a href="#" data-toggle="modal" data-target="#fx">方向</a></li>
					
				    <?php if(empty($showusername)): ?><li><a href="#" data-toggle="modal" data-target="#login">登录</a></li>
            <?php else: ?> 
              <li><a href="/imicrolearn/user/info" data-toggle="modal" data-target="#user" ><?php echo ($showusername); ?></a></li><?php endif; ?>
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
       
       <form action="/imicrolearn/user/islogin" method="post"><div class="form-group">
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
        <a href="/imicrolearn/user/register">
        <button type="button" class="btn btn-primary">注册</button>
        </a>
     </form>
      </div>
      
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade " id="fx" tabindex="-1" role="dialog" aria-labelledby="fx1" aria-hidden="true">

  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="fx1">请选择方向</h4>
      </div>
      <div class="modal-body">
      

            <div class="list-group">
            <?php if(is_array($alltype)): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/imicrolearn/course/typecourse?id=<?php echo ($vo["id"]); ?>" class="text-center list-group-item list-group-item-info"><h5><?php echo ($vo["typename"]); ?></h5></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
      
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary btn-lg btn-block">看全部经验</button>
        <button type="button" class="btn btn-primary btn-lg btn-block">看全部教程</button>
       
        </a>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade " id="user" tabindex="-1" role="dialog" aria-labelledby="user1" aria-hidden="true">

  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="user1">我要去？</h4>
      </div>
      <div class="modal-body">
      

            <div class="list-group">
         
            <a href="/imicrolearn/course/typecourse?id=<?php echo ($vo["id"]); ?>" class="text-center list-group-item list-group-item-info"><h5>查看我的收录</h5></a>
            <a href="/imicrolearn/course/typecourse?id=<?php echo ($vo["id"]); ?>" class="text-center list-group-item list-group-item-info"><h5>查看我的专辑</h5></a>
            <a href="/imicrolearn/course/typecourse?id=<?php echo ($vo["id"]); ?>" class="text-center list-group-item list-group-item-info"><h5>我要分享</h5></a>
         
            </div>
      
      </div>
      <div class="modal-footer">

       <a href="/imicrolearn/user/logout"><button type="button" class="btn btn-danger btn-lg btn-block">注销</button></a> 
       
        </a>
      </div>
      
    </div>
  </div>
</div>
		<div id ="cleannav"class="clearfix"></div>
		
		
		<!-- start 动画效果 -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div>
		<!-- end 动画效果 -->
		<!-- start home -->
		<section id="home">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
							<h1 class="text-upper">引路与前行，学习与分享</h1>
							<p class="tm-white">如今的我们，在纷繁喧嚣的尘下，需要一处静静的地，一步一步，一滴一点，让自己学习，让自己分享。</p>
							<img src="/imicrolearn/Public/images/software-img.png" class="img-responsive" alt="home img">
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- end home -->
		<!-- start divider -->
		<section id="divider">
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-laptop"></i>
						<h3 class="text-uppercase">一台电脑</h3>
						<p>也许你想要用更多，但它已经足够了。</p>
					</div>
					<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-twitter"></i>
						<h3 class="text-uppercase">一次翱翔</h3>
						<p>每一次开始，虽然不一定翱翔，但也许你需要从这有所启发。 </p>
					</div>
					<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-font"></i>
						<h3 class="text-uppercase">一种学习</h3>
						<p>当然，没什么绝对，不过这次，你，值得尝试，体验一种有互动有组织可以从零开始的学习 </p>
					</div>
				</div>
			</div>
		</section>
		<!-- end divider -->

		<!-- start feature -->
		<section id="feature">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
						<h2 class="text-uppercase">我的灯与你的舵</h2>
						<p>总有那么多的教程，总有那么多的书本，在想告诉你怎么做，<br>
						也许你需要来这，瞧瞧怎么学，毕竟，没有学的思路，做总是那么迷糊。<br>
						如果你也深有体会，来加入我们，一起前行。<br>
						不孤单，才更有勇气，或者可以试试找找组织，这是一个共赢对的时代。</p>
						<p><span><i class="fa fa-mobile"></i></span>【同舟】
						<a href="../way/showallway">学习每个方向每个前行者留下的足迹</a></p>
						<p><i class="fa fa-code"></i>【共济】
						<a href="">分享你的足迹，互动你的前行，共勉共进</a></p>
					</div>
					<div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
						<img src="/imicrolearn/Public/images/software-img.png" class="img-responsive" alt="feature img">
					</div>
				</div>
			</div>
		</section>
		<!-- end feature -->

		<!-- start feature1 -->
		<section id="feature1">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<img src="/imicrolearn/Public/images/software-img.png" class="img-responsive" alt="feature img">
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<h2 class="text-uppercase">我的自省与你的迷途</h2>
						<p>的确，路不怕长，但总要有些指引，有些互动，有前行的鼓舞。</p>
						<p><span><i class="fa fa-mobile"></i></span>【进阶】
						<a href="">迷途了，在这里寻找清晰，重获信心。</a></p>
						<p><i class="fa fa-code"></i>【交流】
						<a href="">自省了，在这里互动经验，分享喜悦。</a></p>
					</div>
				</div>
			</div>
		</section>
		<!-- end feature1 -->

		<!-- start pricing -->
		<section id="pricing">
			
				<div class="row">
				<div class="container-fluid">
					<div id="biaoti" class="col-md-12 wow bounceIn">
						<h2 class="text-uppercase">我们的主题与方法</h2>
					</div>
					</div>

					<div class="container">
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing text-uppercase">
							<div class="pricing-title">
								<h4>轻松学习</h4>
								<p>简洁·明了</p>
								<small class="text-lowercase">one</small>
							</div>
							<ul>
								<li>一步一步</li>
								<li>一点一滴</li>
								<li>一心一意</li>
							</ul>
							<button class="btn btn-primary text-uppercase">GO</button>
						</div>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing active text-uppercase">
							<div class="pricing-title">
								<h4>基础引路</h4>
								<p>思考·指导</p>
								<small class="text-lowercase">two</small>
							</div>
							<ul>
								<li>有路</li>
								<li>有朋友</li>
								<li>好有前景</li>
							
							</ul>
							<button class="btn btn-primary text-uppercase">GO</button>
						</div>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing text-uppercase">
							<div class="pricing-title">
								<h4>经验进阶</h4>
								<p>分享·互动</p>
								<small class="text-lowercase">three</small>
							</div>
							<ul>
								<li>用心</li>
								<li>共享方法</li>
								<li>鼓舞前行</li>
								
							</ul>
							<button class="btn btn-primary text-uppercase">GO</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end pricing -->

		<!-- start download -->
		<section id="download">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
						<h2 class="text-uppercase">下载APP，享受更畅快的学习</h2>
						<p>随时随地，分享，互动，学习。<br>自然，只看你关心的。 </p>
						<button class="btn btn-primary text-uppercase"><i class="fa fa-download"></i> Download</button>
					</div>
					<div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
						<img src="/imicrolearn/Public/images/software-img.png" class="img-responsive" alt="feature img">
					</div>
				</div>
			</div>
		</section>
		<!-- end download -->

		<!-- start contact -->
		<section id="contact">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
							<h2 class="text-uppercase">来吧！加入我们，找到组织</h2>
							<p>嘿，也许你和我一样，都厌烦这个环节。<br>
							不过，亲爱的小伙伴，忍忍，从此不再繁琐。<br>
							总要有个开始，踏上一段新路途。</p>
							<address>
								<p><i class="fa fa-map-marker"></i>imicrolearn.com</p>
								<p><i class="fa fa-phone"></i> QQ ：315129552</p>
								<p><i class="fa fa-envelope-o"></i> 315129552@qq.com</p>
							</address>
						</div>
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
							<div class="contact-form">
								<form action="../" method="post">
									<div class="col-md-12">
										<input type="text" class="form-control" placeholder="用户名" required>
									</div>
							
									<div class="col-md-6">
										<input type="password" class="form-control" placeholder="密码" required>
									</div>
									<div class="col-md-6">
										<input type="password" class="form-control" placeholder="确认密码" required>
									</div>
									
									<div class="col-md-12">
										<input type="email" class="form-control" placeholder="邮箱" required>
									</div>
									<div class="col-md-12">
										<textarea class="form-control" placeholder="有兴趣的话，可以在这畅言下加入感想。" rows="3"></textarea>
									</div>
									<div class="col-md-8">
										<input type="submit" class="form-control text-uppercase" value="注册">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
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