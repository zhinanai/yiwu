<?php /*a:2:{s:73:"/www/wwwroot/yiwunqianbaonew/application/admin/view/admin/edit_admin.html";i:1535541834;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
    
</head>
<body class="childrenBody">

<form id="userform" class="layui-form" style="width:80%;" enctype="multipart/form-data">
	<div class="layui-form-item">
		<label class="layui-form-label">用户</label>
		<div class="layui-input-block">
			<input type="text" class="layui-input dataIntegral" name="name" value="<?php echo htmlentities($data['name']); ?>"   placeholder="请输入">
			<input type="hidden" name="id" value="<?php echo htmlentities($data['id']); ?>">
		</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label">密码</label>
		<div class="layui-input-block">
			<input type="password" class="layui-input dataIntegral" name="password" value=""   placeholder="（为空默认原密码）请输入6-12位">
			<input type="hidden" name="id" value="<?php echo htmlentities($data['id']); ?>" >
		</div>
	</div>
	<?php if($data['id']==1): ?>
		<!-- 默认不让修改	 -->
	<?php else: ?>
	<div class="layui-form-item">
		<label class="layui-form-label">权限角色</label>
		<div class="layui-input-block">
			<select name="role_id" lay-verify="">
					<?php foreach($list as $key=>$vo): ?> 
					<option value="<?php echo htmlentities($vo['id']); ?>" <?php echo $vo['id']==$data['role_id'] ? 'selected'  :  ''; ?>><?php echo htmlentities($vo['name']); ?></option>
					<?php endforeach; ?>
			  </select>     
		</div>
	</div>
	<?php endif; ?>
	<?php echo token(); ?>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit="" lay-filter="editadmin">立即提交</button>
			<!-- <button type="reset" class="layui-btn layui-btn-primary">重置</button> -->
		</div>
	</div>
</form>
	

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

	<script type="text/javascript" src="/static/admin/js/allUsers.js"></script>

</body>
</html>