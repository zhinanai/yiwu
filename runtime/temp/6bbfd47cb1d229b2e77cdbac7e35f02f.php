<?php /*a:2:{s:69:"/www/wwwroot/yiwunqianbaonew/application/admin/view/user/details.html";i:1535541834;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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

<div style="height: 20px"></div>
<div class="layui-bg-green" style="padding: 5px;margin-bottom: 20px;width: 100px">余额充值</div>
<form class="layui-form" id="wallet">
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">原有余额</label>
		<div class="layui-input-inline">
				<input type="hidden" name="uid" value="<?php echo htmlentities($data['uid']); ?>">
			<input  name="wallet_num" required lay-verify="required" value="<?php echo htmlentities($data['wallet_num']); ?>"  autocomplete="off" readonly="readonly" class="layui-input">
		</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">选择操作</label>
		<div class="layui-input-inline">
		<select name="atype" lay-verify="">
			<option value="1">增加</option>
			<option value="2">减少</option>
			
		  </select>
		  </div>  
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">数量</label>
		<div class="layui-input-inline">
			<input  name="new_num"  value="" placeholder="" autocomplete="off"  class="layui-input">
		</div>
	</div>
	
	
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="walletConfig">立即提交</button>
		</div>
</form>
<hr>

<div style="height: 20px"></div>
<div class="layui-bg-green" style="padding: 5px;margin-bottom: 20px;width: 100px">积分充值</div>
<form class="layui-form" id="integral">
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">原有积分</label>
		<div class="layui-input-inline">
			<input type="hidden" name="uid" value="<?php echo htmlentities($data['uid']); ?>">
			<input  name="integral_num" required lay-verify="required" value="<?php echo htmlentities($data['integral_num']); ?>" readonly="readonly" autocomplete="off"  class="layui-input">
		</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">选择操作</label>
		<div class="layui-input-inline">
		<select name="atype" lay-verify="">
			<option value="1">增加</option>
			<option value="2">减少</option>
			
		  </select>
		  </div>  
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">数量</label>
		<div class="layui-input-inline">
			<input  name="new_num" value="" placeholder="" autocomplete="off"  class="layui-input">
		</div>
	</div>
	<?php echo token(); ?>
	
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="integralConfig">立即提交</button>
		</div>
</form>



<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/detailsAdd.js"></script>
</body>
</html>