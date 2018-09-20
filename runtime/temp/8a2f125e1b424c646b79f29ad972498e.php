<?php /*a:2:{s:67:"/www/wwwroot/yiwunqianbaonew/application/admin/view/reward/vip.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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

<div class="layui-bg-green" style="padding: 5px;margin-bottom: 20px;width: 100px">成为VIP</div>
<form class="layui-form" >
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 110px">成为VIP积分设置</label>
		<div class="layui-input-inline">
			<input  name="limit_vip" required lay-verify="required" value="<?php echo htmlentities($list['value']); ?>" placeholder="基础释放比例" autocomplete="off"  class="layui-input">
		</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="editConfig11">立即提交</button>
	    </div>
    </div>
</form>
<hr>
<div class="layui-bg-green" style="padding: 5px;margin-bottom: 20px;width: 100px">VIP奖励比例</div>
<form class="layui-form" >
    <div class="layui-form-item">
        <label class="layui-form-label" style="width: 115px">伞下会员余额流通比例</label>
        <div class="layui-input-inline">
            <input  name="vip1" required lay-verify="required" value="<?php echo htmlentities($list2[0]['value']); ?>"  autocomplete="off"  class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">%</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label" style="width: 115px">伞下VIP伞下会员余额流通比例</label>
        <div class="layui-input-inline">
            <input  name="vip2" required lay-verify="required" value="<?php echo htmlentities($list2[1]['value']); ?>" autocomplete="off"  class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">%</div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="editConfig12">立即提交</button>
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