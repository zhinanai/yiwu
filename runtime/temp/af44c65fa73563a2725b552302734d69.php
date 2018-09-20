<?php /*a:2:{s:68:"/www/wwwroot/yiwunqianbaonew/application/admin/view/admin/index.html";i:1535680616;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>标题</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/admin/css/xadmin.css" media="all"/>
    <link rel="stylesheet" href="/static/admin/css/swiper.min.css" media="all"/>
    <link rel="stylesheet" href="/static/common/lib/layui/css/layui.css" media="all"/>
    <style>
        .childrenBody {
            margin-top: 10px;
            padding: 0 20px;
        }
        p{color: #fff !important;}
    </style>
    
	<link rel="stylesheet" href="__ADMIN_/css/user.css" media="all" />
	<style>
		.layui-elem-quote{background: rgba(0,0, 0, 0.3);}
		.layui-table thead tr{background: rgba(0,0, 0, 0.4);}
		.layui-table{color: #fff;background: rgba(0,0, 0, 0.3);}
		.layui-table-hover{background: rgba(0,0, 0, 0.4) !important;}
		.layui-btn{background: #009688;}
		.layui-form-mid{color: #fff !important;}
		 body{background: none !important;}
	</style>
	
</head>
<body class="childrenBody">

	<blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
			<a class="layui-btn layui-btn-normal adminAdd_btn">添加管理员账号</a>
		</div>
		<!-- <div class="layui-inline">
			<a class="layui-btn layui-btn-danger batchDel">批量删除</a>
		</div> -->
		<div class="layui-inline">
			<div class="layui-form-mid layui-word-aux">　添加管理员账号，请妥善保管好您的账号密码</div>
		</div>
	</blockquote>
	<div class="layui-form users_list">
	  	<table class="layui-table" lay-filter="admins">
		    <colgroup>
				<col>
				<col>
		    </colgroup>
		    <thead>
				<tr>
					<th>ID</th>
					<th>登录名</th>
					<th>角色</th>
					<th>注册时间</th>
					<th>操作</th>
				</tr> 
		    </thead>
		    <tbody class="users_content">
<?php foreach($admin_list as $v): ?>
			<tr>
					<td><?php echo htmlentities($v['id']); ?></td>
				<td><?php echo htmlentities($v['name']); ?></td>
				<td><?php echo htmlentities($v['roles']['name']); ?></td>
				<td><?php echo htmlentities($v['create_time']); ?></td>
				<td>
					<?php if($v['id']==1): ?><a class="layui-btn layui-btn-success layui-btn-mini admins_edit" data-id="<?php echo htmlentities($v['id']); ?>" ><i class="layui-icon"></i> 修改</a>
					<?php else: ?> <a class="layui-btn layui-btn-danger layui-btn-mini admins_del" data-id="<?php echo htmlentities($v['id']); ?>" ><i class="layui-icon"></i> 删除</a>
					<a class="layui-btn layui-btn-success layui-btn-mini admins_edit" data-id="<?php echo htmlentities($v['id']); ?>" ><i class="layui-icon"></i> 修改</a>
					<?php endif; ?>
					
				</td>
			</tr>
<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<div id="page"></div>

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/allUsers.js"></script>
</body>
</html>