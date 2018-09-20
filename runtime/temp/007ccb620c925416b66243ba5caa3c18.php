<?php /*a:2:{s:72:"/www/wwwroot/yiwunqianbaonew/application/admin/view/reward/multiple.html";i:1535680616;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
    
<style>
	body{background: none !important;}
</style>

</head>
<body class="childrenBody">

<div class="layui-bg-green" style="padding: 5px;margin-bottom: 20px;width: 100px">倍数设置</div>
<form class="layui-form" >
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 140px">转账倍数设置</label>
		<div class="layui-input-inline">
			<input  name="transfor_multiple" required lay-verify="required" value="<?php echo htmlentities($list['value']); ?>" placeholder="转账倍数设置" autocomplete="off"  class="layui-input">
		</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="editConfig5">立即提交</button>
		</div>
	</div>
</form>
<form class="layui-form" >
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 140px">余额兑换积分倍数设置</label>
		<div class="layui-input-inline">
			<input  name="exchange_multiple" required lay-verify="required" value="<?php echo htmlentities($list1['value']); ?>" placeholder="转账倍数设置" autocomplete="off"  class="layui-input">
		</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="editConfig6">立即提交</button>
		</div>
	</div>
</form>
<hr>
<div style="height: 20px"></div>
<div class="layui-bg-green" style="padding: 5px;margin-bottom: 20px;width: 100px">余额积分兑换比例</div>
<form class="layui-form">
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">余额/积分</label>
		<div class="layui-input-inline">
			<input  name="yue_jifen" required lay-verify="required" value="<?php echo htmlentities($list3['value']); ?>" placeholder="请填写相应比例" autocomplete="off"  class="layui-input">
		</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="editConfig9">立即提交</button>
		</div>
	</div>
</form>

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

<script type="text/javascript" src="/static/admin/js/reward.js"></script>

</body>
</html>