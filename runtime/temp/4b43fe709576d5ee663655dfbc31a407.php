<?php /*a:2:{s:71:"/www/wwwroot/yiwunqianbaonew/application/admin/view/reward/registe.html";i:1535452294;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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

<div class="layui-bg-green" style="padding: 5px;margin-bottom: 20px;width: 100px">注册送积分</div>
<!--VIP奖励设置-->
<form class="layui-form">
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">注册赠送积分数</label>
		<div class="layui-input-inline">
			<input  name="registe_jifen" required lay-verify="required" value="<?php echo htmlentities($list['value']); ?>" placeholder="赠送积分数" autocomplete="off"  class="layui-input">
		</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="editConfig7">立即提交</button>
		</div>
	</div>
</form>
<hr>
<div style="height: 20px"></div>
<div class="layui-bg-green" style="padding: 5px;margin-bottom: 20px;width: 100px">推荐奖励设置</div>
<form class="layui-form">
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">推荐一个人赠送积分数</label>
		<div class="layui-input-inline">
			<input  name="recommend_jifen" required lay-verify="required" value="<?php echo htmlentities($list2['value']); ?>" placeholder="赠送积分数" autocomplete="off"  class="layui-input">
		</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">赠送积分最大推荐人数</label>
		<div class="layui-input-inline">
			<input  name="recommend_people" required lay-verify="required" value="<?php echo htmlentities($list2['tip']); ?>" placeholder="赠送积分最大推荐人数" autocomplete="off"  class="layui-input">
		</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="editConfig8">立即提交</button>
		</div>
	</div>
</form>
<hr>
<div style="height: 20px"></div>
<div class="layui-bg-green" style="padding: 5px;margin-bottom: 20px;width: 100px">有效用户积分设置</div>
<form class="layui-form">
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">积分设置</label>
		<div class="layui-input-inline">
			<input  name="limit_jifen" required lay-verify="required" value="<?php echo htmlentities($list4['value']); ?>" placeholder="请填写相应积分" autocomplete="off"  class="layui-input">
		</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="editConfig10">立即提交</button>
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