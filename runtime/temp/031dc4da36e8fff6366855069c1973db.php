<?php /*a:2:{s:68:"/www/wwwroot/yiwunqianbaonew/application/admin/view/reward/base.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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

<!--基础释放比例-->
<form class="layui-form" >
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 85px">基础释放比例</label>
		<div class="layui-input-inline">
			<input  name="base_reward" required lay-verify="required" value="<?php echo htmlentities($list['value']); ?>" placeholder="基础释放比例" autocomplete="off"  class="layui-input">
		</div>
		<div class="layui-form-mid layui-word-aux">%</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="editConfig1">立即提交</button>
	</div>
</form>

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

<script type="text/javascript" src="/static/admin/js/reward.js"></script>

</body>
</html>