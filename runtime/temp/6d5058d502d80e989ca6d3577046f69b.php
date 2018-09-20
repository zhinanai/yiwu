<?php /*a:2:{s:70:"/www/wwwroot/yiwunqianbaonew/application/admin/view/user/add_user.html";i:1535711766;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
				<input type="text" class="layui-input dataIntegral" name="name" value=""  lay-verify="required" placeholder="请输入">
				
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">手机</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input dataIntegral" name="mobile" value=""   placeholder="请输入">
				
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">密码</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input dataIntegral" name="pwd" value="" lay-verify="required" placeholder="请输入">
			</div>	
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">支付密码</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input dataIntegral" name="safety_pwd" lay-verify="required" value=""  placeholder="请输入">
			</div>	
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">头像</label>
			<div class="layui-input-block">
				<div class="layui-input-inline">
						<button type="button" class="layui-btn layui-btn-normal" id="test1">上传头像图片</button>
						<p id="demoText"></p>
				</div>
				<div class="layui-input-inline">
					<img id="preview" width="80px" src="" >
				</div>
	
			</div>
			
	</div>
		
		
		<div class="layui-form-item">
			<label class="layui-form-label">是否禁用</label>
			<div class="layui-input-block">
				<!-- <input type="text" class="layui-input dataIntegral" name="level" value=""  placeholder="请输入"> -->
				<select name="nickname" >
					<option value="1">启用</option>
					<option value="0">禁用</option>
					
				</select>
				
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">推荐人</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input dataMoney" name="parent_id" value="" placeholder="请输入推荐人手机号/UID">
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="adduser">立即提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
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