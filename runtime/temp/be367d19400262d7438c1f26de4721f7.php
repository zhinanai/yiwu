<?php /*a:2:{s:85:"/www/wwwroot/yiwunqianbaonew/application/admin/view/account_opeing_bank/editbank.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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

	<form id="opeing" class="layui-form" style="width:80%;" enctype="multipart/form-data">
		<div class="layui-form-item">
			<label class="layui-form-label">银行卡</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input dataIntegral" name="bank_name" value="<?php echo htmlentities($data['bank_name']); ?>" lay-verify="required"  placeholder="请输入">
				<input type="hidden" name="id" value="<?php echo htmlentities($data['id']); ?>">
			</div>
		</div>
		
		<div class="layui-form-item">
				<label class="layui-form-label">标识</label>
				<div class="layui-input-block">
					<div class="layui-input-inline">
							<!-- <button type="button" class="layui-btn layui-btn-normal" id="test1">修改图片</button> -->
							<input type="file" name="pic" >
							<p id="demoText"></p>
					</div>
					<div class="layui-input-inline">
						<img id="preview" width="80px" src="<?php echo htmlentities($data['pic']); ?>" >
					</div>
		
				</div>
				
		</div>
		
		
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="edituser">立即提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>
	</form>
	
	


<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/bankcardAdd.js"></script>
</body>
</html>