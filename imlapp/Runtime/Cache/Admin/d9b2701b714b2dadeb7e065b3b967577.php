<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>imicrolearn</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" href="/imicrolearn/Public/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="imicrolearn" />
  <link rel="stylesheet" href="/imicrolearn/Public/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/imicrolearn/Public/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>iM-learn</strong> <small>后台管理</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>
<!-- ---------------------------------------------------------------------------------------- -->
<div class="am-cf admin-main">
  <!-- sidebar start -->

  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="admin-index.html"><span class="am-icon-home"></span> 首页</a></li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub " id="collapse-nav">
            <li ><a href="../admin/alluser"  class="am-cf"><span class="am-icon-check"></span> 用户管理<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
            <li><a href="admin-help.html"><span class="am-icon-puzzle-piece"></span> 经验管理</a></li>
            <li><a href="../course/allcourse"><span class="am-icon-th"></span> 教程管理<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>   
            <li><a href="../coursetype/alltype"><span class="am-icon-th"></span>分类管理<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li> 
             <li><a href="../admin/alladmin"><span class="am-icon-th">
             </span> 管理员列表<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
          </ul>
        </li>
        <li><a href="admin-table.html"><span class="am-icon-table"></span> 系统日志</a></li>
        <li><a href="admin-form.html"><span class="am-icon-pencil-square-o"></span> 网站·总览</a></li>
        <li><a href="#"><span class="am-icon-bug"></span> 404页面</a></li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>时光静好，与君语；细水流年，与君同。—— i微学</p>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> 欢迎</p>
          <p>imicrolearn</p>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar end -->
  <div class="admin-content">



    <div class="am-g">
      <div class="am-u-sm-12 am-scrollable-horizontal">
        <table class="am-table am-table-bd am-table-striped admin-content-table am-table-hover am-text-nowrap">
          <thead>
          <tr>
         <th class="am-text-justify">管理员ID</th>
         <th class="am-text-justify">用户名</th>
         <th class="am-text-justify">密码</th>
         <th class="am-text-justify">邮箱</th>
         <th class="am-text-justify">编辑</th>
          </tr>
          </thead>
          <tbody>
          	<?php if(is_array($alladmin)): $i = 0; $__LIST__ = $alladmin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
          <td><span class="am-badge am-badge-success"><?php echo ($vo["id"]); ?></span></td>
			<td><?php echo ($vo["aname"]); ?></td>
			<td><?php echo (md5($vo["apwd"])); ?></td>
			<td><?php echo ($vo["apwd"]); ?></td>
           <td>  
            <div class="am-dropdown" data-am-dropdown>
                <button class="am-btn am-btn-default am-btn-xs am-dropdown-toggle" data-am-dropdown-toggle><span class="am-icon-cog"></span> <span class="am-icon-caret-down"></span></button>
                <ul class="am-dropdown-content">
                  <li><a href="#">1. 编辑</a></li>
                  <li><a href="#">2. 删除</a></li>
                </ul>
              </div>
              </td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
         </tbody>
         </table>
         <hr>
         <br><br><br>
</div>
</div>


</div>
</div>
<!-- ---------------------------------------------------------------------------------------- -->
<footer>
  <hr>
  <p class="am-padding-left am-fr"> <a href="http://imicrolearn.com">© 2015 &nbsp; &nbsp;imicrolearn.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </p>
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
</body>
</html>

<script>
   $('#jz').on('click', function() {
    progress.done(true);
  });


</script>