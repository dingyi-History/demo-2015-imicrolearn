<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>【i微学】</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" href="/imicrolearn/Public/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="imicrolearn" />
  <link rel="stylesheet" href="/imicrolearn/Public/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/imicrolearn/Public/css/admin.css">
    <link rel="stylesheet" href="/imicrolearn/Public/css/animate.min.css">
    <link rel="stylesheet" href="/imicrolearn/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/imicrolearn/Public/css/font-awesome.min.css">
    <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/imicrolearn/Public/css/templatemo-style.css">
    <link rel="stylesheet" href="/imicrolearn/Public/css/imicrolearn.css">
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
					<a href="#"  data-toggle="modal" data-target="#index" class="navbar-brand">【i微学】</a>
				</div>
				
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
					
             
             <li><a href="#" data-toggle="modal" data-target="#fx">方向</a></li>
					
				    <?php if(empty($showusername)): ?><li><a href="#" data-toggle="modal" data-target="#login">登录</a></li>
            <?php else: ?> 
              <li><a href="#" data-toggle="modal" data-target="#user" ><?php echo ($showusername); ?></a></li><?php endif; ?>
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
        <h4 class="modal-title text-center" id="fx1">有方向很重要</h4>
      </div>
      <div class="modal-body">
      

            <div class="list-group">
            <?php if(is_array($alltype)): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/imicrolearn/course/typecourse?id=<?php echo ($vo["id"]); ?>" class="text-center list-group-item list-group-item-info"><h5><?php echo ($vo["typename"]); ?></h5></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
      
      </div>
      <div class="modal-footer">

        <a href="/imicrolearn/way/showway"><button type="button" class="btn btn-primary btn-lg btn-block">看全部经验</button></a>
        <br>
        <a href="/imicrolearn/course/showcourse"><button type="button" class="btn btn-primary btn-lg btn-block">看全部教程</button></a>
       
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
        <h4 class="modal-title text-center" id="user1">去哪儿？</h4>
      </div>
      <div class="modal-body">
      

            <div class="list-group">
         
            <a href="/imicrolearn/user/userinfo" class="text-center list-group-item list-group-item-info"><h5>查看我的收录</h5></a>
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

<!-- Modal -->
<div class="modal fade " id="index" tabindex="-1" role="dialog" aria-labelledby="index" aria-hidden="true">

  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="index">回首页？</h4>
      </div>
      <div class="modal-body">
      

            <div class="list-group">
         <a href="/imicrolearn/" class="text-center list-group-item list-group-item-info"><h5>回首页</h5></a>
            <a href="/imicrolearn/user/userinfo" class="text-center list-group-item list-group-item-info"><h5>查看我的收录</h5></a>
            <a href="/imicrolearn/course/addcourse" class="text-center list-group-item list-group-item-info"><h5>我要分享</h5></a>
         
            </div>
      
      </div>
      <div class="modal-footer">

     <button type="button" class="btn btn-danger btn-lg btn-block">关闭</button>
       
        </a>
      </div>
      
    </div>
  </div>
</div>
  <div id ="cleannav"class="clearfix"></div>
  <hr>
<!-- ---------------------------------------------------------------------------------------- -->
<div class="container-fluid">

<div id="usertitle" class="am-g">

<div class="container">
<br>
  <div class="am-u-sm-4">
  <img src="/imicrolearn/Public/imlogo.png" alt="" id="touxiang">

  </div>
  <div class="am-u-sm-6">
  <br>
<h3>你好！分享是美好的品质。</h3>
  </div>

<div class="am-u-sm-2">
  <button type="button" class="btn btn-info btn-lg btn-block">我的</button>
          <br>    
  <a href=""><button type="button" class="btn btn-success btn-lg btn-block">分享</button></a>
</div>
</div>
<br>
</div>
<hr>

<div class="container">

<block name="main">

<form action="" method="post">
<article class="am-comment"> <!-- 评论容器 -->

  <div class="am-comment-main"> <!-- 评论内容容器 -->
    <header class="am-comment-hd">
      <!--<h3 class="am-comment-title">评论标题</h3>-->
      <div class="am-comment-meta"> <!-- 评论元数据 -->
      <p><input type="text" class="am-form-field am-round" style="width:50%;" placeholder="点击添加标题" required/></p>
      </div>
    </header>

    <div class="am-comment-bd">
	<div class="am-form-group" >
      <textarea style="width:100%; border-radius:5px;"class="" rows="5" id="doc-ta-1" placeholder="点击添加分享内容" required></textarea>
    </div>

    </div> <!-- 评论内容 -->
  </div>
  <div class="am-g">
  <br>
  	<div class="am-u-sm-4 am-u-sm-offset-4">
  		<button type="submit" class="btn btn-success btn-lg btn-block">分享</button>
  	</div>

  </div>
  <hr>
</article>
</form>


<?php if(is_array($allway)): $i = 0; $__LIST__ = $allway;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$way): $mod = ($i % 2 );++$i;?><article class="am-comment"> <!-- 评论容器 -->
  <a href="">
    <img class="am-comment-avatar" alt="" style="width:50px;height:50px;" /> <!-- 评论者头像 -->   
  </a>

  <div class="am-comment-main"> <!-- 评论内容容器 -->
    <header class="am-comment-hd">
      <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($way["wtitle"]); ?></h4>
      <div class="am-comment-meta am-text-right"> <!-- 评论元数据 -->
        分享于 <time datetime=""><?php echo ($way["wdate"]); ?></time>
      </div>
    </header>

    <div class="am-comment-bd"><pre><?php echo ($way["wcontent"]); ?></pre></div> <!-- 评论内容 -->
  </div>
  <hr>
</article><?php endforeach; endif; else: echo "" ;endif; ?>


</div></div>
<hr>
<!-- ---------------------------------------------------------------------------------------- -->
	<footer>
			<div id="full" class="container-fluid">
			<div id="cb"></div>
			<div id="footer">
				<div class="container">
				<div class="row"  style="color:white;">
					<div class="col-md-4">
					<br><br>
					<img id="logo" src="/imicrolearn/Public/imlogo.png" alt="">
					<div class="text-center">imicrolearn</div>
					<button data-am-smooth-scroll type="button" class="btn btn-success">回到顶部</button>
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

<a class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/imicrolearn/Public/js/polyfill/rem.min.js"></script>
<script src="/imicrolearn/Public/js/polyfill/respond.min.js"></script>
<script src="/imicrolearn/Public/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/imicrolearn/Public/js/jquery.min.js"></script>
<script src="/imicrolearn/Public/js/amazeui.min.js"></script>
<!--<![endif]-->
<script src="/imicrolearn/Public/js/app.js"></script>
<script src="/imicrolearn/Public/js/jquery.js"></script>
    <script src="/imicrolearn/Public/js/bootstrap.min.js"></script>
    <script src="/imicrolearn/Public/js/wow.min.js"></script>
    <script src="/imicrolearn/Public/js/jquery.singlePageNav.min.js"></script>
    <script src="/imicrolearn/Public/js/custom.js"></script>
</body>
</html>

<script>
   $('#jz').on('click', function() {
    progress.done(true);
  });


</script>