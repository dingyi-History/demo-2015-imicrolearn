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
           
            <a href="/imicrolearn/course/addcourse" class="text-center list-group-item list-group-item-info"><h5>我要分享</h5></a>
         
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
  <div class="am-u-sm-2 am-u-sm-offset-1 am-hide-sm-down">
  <img src="/imicrolearn/Public/imlogo.png" alt="" id="touxiang">

  </div>
  <div class="am-u-sm-5">
    
<?php if(is_array($userinfo)): $i = 0; $__LIST__ = $userinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><h3>你好！<?php echo ((isset($v["nickname"]) && ($v["nickname"] !== ""))?($v["nickname"]):"昵称"); ?></h3>
<p>用户名：<?php echo ($v["name"]); ?></p>
邮箱：<?php echo ((isset($v["email"]) && ($v["email"] !== ""))?($v["email"]):"没填邮箱"); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>

<div class="am-u-sm-3">
  
  <button type="button" class="btn btn-info btn-lg btn-block">我的</button>
          <br>    
  <a href=""><button type="button" class="btn btn-success btn-lg btn-block">分享</button></a>
</div>

</div>
<br>
</div>
<hr>

<div class="container">

<div class="am-cf admin-main">
  <!-- sidebar start -->

  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="admin-index.html"><span class="am-icon-home"></span> 我的收录<span class="am-icon-angle-right am-fr am-margin-right"></a></li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 我的资料 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub " id="collapse-nav">
            <li ><a href="../admin/alluser"  class="am-cf"><span class="am-icon-check"></span> 用户管理<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
            <li><a href="admin-help.html"><span class="am-icon-puzzle-piece"></span> 经验管理</a></li>
            <li><a href="../course/allcourse"><span class="am-icon-th"></span> 教程管理<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>   
            <li><a href="../coursetype/alltype"><span class="am-icon-th"></span>分类管理<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li> 
             <li><a href="../admin/alladmin"><span class="am-icon-th">
             </span> 管理员列表<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
          </ul>
        </li>
        <li><a href="admin-table.html"><span class="am-icon-table"></span> 分享经验<span class="am-icon-angle-right am-fr am-margin-right"></span></a></li>
        <li><a href="admin-form.html"><span class="am-icon-pencil-square-o"></span> 网站·总览<span class="am-icon-angle-right am-fr am-margin-right"></a></li>
        <li><a href="#"><span class="am-icon-bug"></span> 建议<span class="am-icon-angle-right am-fr am-margin-right"></a></li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 寄语</p>
          <p>时光静好，与君语；<br>细水流年，与君同。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;—— i微学</p>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> 欢迎</p>
          <h3>我的地盘</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar end -->
  <div class="admin-content">

<div class="container">
<article class="am-comment"> <!-- 评论容器 -->
  <a href="">
    <img class="am-comment-avatar" alt=""/> <!-- 评论者头像 -->
  </a>

  <div class="am-comment-main"> <!-- 评论内容容器 -->
    <header class="am-comment-hd">
      <!--<h3 class="am-comment-title">评论标题</h3>-->
      <div class="am-comment-meta"> <!-- 评论元数据 -->
        <a href="#link-to-user" class="am-comment-author">..</a> <!-- 评论者 -->
        评论于 <time datetime="">...</time>
      </div>
    </header>

    <div class="am-comment-bd">...</div> <!-- 评论内容 -->
  </div>
</article>

<article class="am-comment">
  <a href="#link-to-user-home">
    <img src="" alt="" class="am-comment-avatar" width="48" height="48"/>
  </a>

  <div class="am-comment-main">
    <header class="am-comment-hd">
      <!--<h3 class="am-comment-title">评论标题</h3>-->
      <div class="am-comment-meta">
        <a href="#link-to-user" class="am-comment-author">某人</a>
        评论于 <time datetime="2013-07-27T04:54:29-07:00" title="2013年7月27日 下午7:54 格林尼治标准时间+0800">2014-7-12 15:30</time>
      </div>
    </header>

    <div class="am-comment-bd">
      ...
    </div>
  </div>
</article>
</div>

</div>
</div>

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
					<button  data-am-smooth-scroll type="button" class="btn btn-success">回到顶部</button>
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