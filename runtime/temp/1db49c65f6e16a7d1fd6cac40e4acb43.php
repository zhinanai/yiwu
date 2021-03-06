<?php /*a:2:{s:71:"/www/wwwroot/yiwunqianbaonew/application/admin/view/user/edit_user.html";i:1535541834;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
			<label class="layui-form-label">昵称</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input dataIntegral" name="nickname" value="<?php echo htmlentities($data['nickname']); ?>" lay-verify="required"  placeholder="请输入">
				<input type="hidden" name="id" value="<?php echo htmlentities($data['id']); ?>">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">手机</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input dataIntegral" name="mobile" value="<?php echo htmlentities($data['mobile']); ?>"  lay-verify="required" placeholder="请输入">
				<input type="hidden" name="id" value="<?php echo htmlentities($data['id']); ?>" >
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">登录密码</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input dataIntegral" name="pwd" value="" lay-verify=""  placeholder="请输入">
				<input type="hidden" name="id" value="<?php echo htmlentities($data['id']); ?>" >
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">支付密码</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input dataIntegral" name="safety_pwd" value="" lay-verify=""  placeholder="请输入">
				<input type="hidden" name="id" value="<?php echo htmlentities($data['id']); ?>" >
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">头像</label>
			<div class="layui-input-block">
				<div class="layui-input-inline">
						<button type="button" class="layui-btn layui-btn-normal" id="test1">修改图片</button>
						<p id="demoText"></p>
				</div>
				<div class="layui-input-inline">
					<img id="preview" width="80px" src="<?php echo htmlentities($data['head_img']); ?>" >
				</div>
	
			</div>		
		</div>
		<!-- <div class="layui-form-item">
			<label class="layui-form-label">等级</label>
			<div class="layui-input-block">
				<!-- <input type="text" class="layui-input dataIntegral" name="level" value="<?php echo htmlentities($data['level']); ?>"  placeholder="请输入">
				<input type="hidden" name="id" value="<?php echo htmlentities($data['id']); ?>" > -->
				<!-- <select name="level" >
					<option value="1" <?php if($data['level'] == 0): ?> selected <?php endif; ?>>0</option>
					<option value="1" <?php if($data['level'] == 1): ?> selected <?php endif; ?>>1</option>
					<option value="2"<?php if($data['level'] == 2): ?> selected <?php endif; ?>>2</option>
					<option value="3"<?php if($data['level'] == 3): ?> selected <?php endif; ?>>3</option>
					<option value="4" <?php if($data['level'] == 4): ?> selected <?php endif; ?>>4</option>
					<option value="5" <?php if($data['level'] == 5): ?> selected <?php endif; ?>>5</option>
					<option value="6" <?php if($data['level'] == 6): ?> selected <?php endif; ?>>6</option>
				</select>
			</div>
		</div> --> 
		
		<div class="layui-form-item">
				<label class="layui-form-label">是否禁用</label>
				<div class="layui-input-block">
					<!-- <input type="text" class="layui-input dataIntegral" name="level" value="<?php echo htmlentities($data['level']); ?>"  placeholder="请输入">
					<input type="hidden" name="id" value="<?php echo htmlentities($data['id']); ?>" > -->
					<select name="disable" >
						<option value="0" <?php if($data['disable'] == 0): ?> selected <?php endif; ?>>禁用</option>
						<option value="1" <?php if($data['disable'] == 1): ?> selected <?php endif; ?>>启用</option>
						
					</select>
				</div>
			</div>
		<div class="layui-form-item">
			<label class="layui-form-label">推荐人</label>
			<div class="layui-input-block">
				<input type="text" disabled= "true " class="layui-input dataMoney" name="parent_id" value="<?php echo htmlentities($data['parent_id']); ?>" lay-verify="required" placeholder="请输入">
			</div>
		</div>
		<?php echo token(); ?>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="edituser">立即提交</button>
				<!-- <button type="reset" class="layui-btn layui-btn-primary">重置</button> -->
		    </div>
		</div>
	</form>
	
	


<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/detailsAdd.js"></script>
</body>
</html>