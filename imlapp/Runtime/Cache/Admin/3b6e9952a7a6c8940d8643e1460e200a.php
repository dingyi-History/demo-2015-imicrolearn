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

		<div class="container">
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">用户</a></li>
  <li role="presentation"class="active"><a href="#">管理员</a></li>
  <li role="presentation"class="active"><a href="#">教程</a></li>
</ul>
</div>
		<div id ="cleannav"class="clearfix"></div>
	   <div class="container">
  	
		

<div class="table-responsive">
  <table class="table table-hover table-striped table-bordered ">
	<th class="text-center">教程号</th>
	<th class="text-center">教程标题</th>
	<th class="text-center">教程简介</th>
	<th class="text-center" class="text-center">分类ID</th>
	<th class="text-center">分类名</th>
	<th class="text-center">步骤序号</th>
	<th class="text-center">步骤内容</th>
	
	<?php if(is_array($allcourse)): $i = 0; $__LIST__ = $allcourse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    	<td class="text-center"><?php echo ($vo["cid"]); ?></td>
    	<td class="text-center"><?php echo ($vo["cname"]); ?></td>
    	<td class="text-center"><?php echo ($vo["ctitle"]); ?></td>
    	<td class="text-center"><?php echo ($vo["typeid"]); ?></td>
    	<td class="text-center"><?php echo ($vo["typename"]); ?></td>
    	<td class="text-center"><?php echo ($vo["stepid"]); ?></td>
    	<td class="text-center"><?php echo ($vo["scontent"]); ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>


		
    </div>
		<div class="clearfix"></div>
		
		

	</body>
</html>