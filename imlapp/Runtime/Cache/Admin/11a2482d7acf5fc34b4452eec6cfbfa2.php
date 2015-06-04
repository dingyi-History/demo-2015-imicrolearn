<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>【i微学】一点一点轻松学</title>
</head>
<body>
<table>
	<th>管理员ID</th><th>用户名</th><th>密码</th><th>编辑</th>
	<?php if(is_array($alladmin)): $i = 0; $__LIST__ = $alladmin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
	<td><?php echo ($vo["id"]); ?></td>
	<td><?php echo ($vo["aname"]); ?></td>
	<td><?php echo (md5($vo["apwd"])); ?></td>
	<td><a href="../admin/deloneadmin?id=<?php echo ($vo["id"]); ?>">删除</a></td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>

</body>
</html>