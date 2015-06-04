<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>【i微学】一点一点轻松学</title>
</head>
<body>
<table>
	<th>用户ID</th><th>用户名</th><th>密码</th><th>邮箱</th><th>编辑</th>
	<?php if(is_array($alluser)): $i = 0; $__LIST__ = $alluser;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
	<td><?php echo ($vo["id"]); ?></td>
	<td><?php echo ($vo["name"]); ?></td>
	<td><?php echo (md5($vo["pwd"])); ?></td>
	<td><?php echo ($vo["email"]); ?></td>
	<td><a href="../admin/deloneuser?id=<?php echo ($vo["id"]); ?>">删除</a></td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>

</body>
</html>