<?php /*a:2:{s:69:"/www/wwwroot/yiwunqianbaonew/application/admin/view/reward/share.html";i:1535595682;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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

<form class="layui-form" >
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 60px">积分达到</label>
		<div class="layui-input-inline">
			<input  name="share_jifen1" required lay-verify="required" value="<?php echo htmlentities($list[0]['tip']); ?>" placeholder="所需积分" autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 115px">推荐有效用户人数</label>
		<div class="layui-input-inline">
			<input  name="share_renshu1" required lay-verify="required" value="<?php echo htmlentities($list2[0]['value']); ?>" placeholder="推荐有效用户" autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 85px">直推奖励加速</label>
		<div class="layui-input-inline">
			<input  name="share_bili1" required lay-verify="required" value="<?php echo htmlentities($list[0]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<div class="layui-form-mid layui-word-aux">%</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 60px">积分达到</label>
		<div class="layui-input-inline">
			<input  name="share_jifen2" required lay-verify="required" value="<?php echo htmlentities($list[1]['tip']); ?>" placeholder="所需积分" autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 115px">推荐有效用户人数</label>
		<div class="layui-input-inline">
			<input  name="share_renshu2" required lay-verify="required" value="<?php echo htmlentities($list2[1]['value']); ?>" placeholder="推荐有效用户" autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 85px">直推奖励加速</label>
		<div class="layui-input-inline">
			<input  name="share_bili2" required lay-verify="required" value="<?php echo htmlentities($list[1]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<div class="layui-form-mid layui-word-aux">%</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 60px">积分达到</label>
		<div class="layui-input-inline">
			<input  name="share_jifen3" required lay-verify="required" value="<?php echo htmlentities($list[2]['tip']); ?>" placeholder="所需积分" autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 115px">推荐有效用户人数</label>
		<div class="layui-input-inline">
			<input  name="share_renshu3" required lay-verify="required" value="<?php echo htmlentities($list2[2]['value']); ?>" placeholder="推荐有效用户" autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 85px">直推奖励加速</label>
		<div class="layui-input-inline">
			<input  name="share_bili3" required lay-verify="required" value="<?php echo htmlentities($list[2]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<div class="layui-form-mid layui-word-aux">%</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 60px">积分达到</label>
		<div class="layui-input-inline">
			<input  name="share_jifen4" required lay-verify="required" value="<?php echo htmlentities($list[3]['tip']); ?>" placeholder="所需积分" autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 115px">推荐有效用户人数</label>
		<div class="layui-input-inline">
			<input  name="share_renshu4" required lay-verify="required" value="<?php echo htmlentities($list2[3]['value']); ?>" placeholder="推荐有效用户" autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 85px">直推奖励加速</label>
		<div class="layui-input-inline">
			<input  name="share_bili4" required lay-verify="required" value="<?php echo htmlentities($list[3]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<div class="layui-form-mid layui-word-aux">%</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="editConfig2">立即提交</button>
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