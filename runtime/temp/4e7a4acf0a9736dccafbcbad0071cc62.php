<?php /*a:2:{s:72:"/www/wwwroot/yiwunqianbaonew/application/admin/view/reward/transfer.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
<div class="layui-bg-green" style="padding: 5px;margin-bottom: 20px;width: 100px">流通奖励</div>
<form class="layui-form" >
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 155px">推荐有效用户人数</label>
		<div class="layui-input-inline">
			<input  name="liutong1" required lay-verify="required" value="<?php echo htmlentities($list1[0]['tip']); ?>" autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 85px">伞下代数</label>
		<div class="layui-input-inline">
			<input  name="liutong_daishu1" required lay-verify="required" value="<?php echo htmlentities($list4[0]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 100px">流通奖励</label>
		<div class="layui-input-inline">
			<input  name="liutong_bili1" required lay-verify="required" value="<?php echo htmlentities($list1[0]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<div class="layui-form-mid layui-word-aux">%</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 155px">推荐有效用户人数</label>
		<div class="layui-input-inline">
			<input  name="liutong2" required lay-verify="required" value="<?php echo htmlentities($list1[1]['tip']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 85px">伞下代数</label>
		<div class="layui-input-inline">
			<input  name="liutong_daishu2" required lay-verify="required" value="<?php echo htmlentities($list4[1]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 100px">流通奖励</label>
		<div class="layui-input-inline">
			<input  name="liutong_bili2" required lay-verify="required" value="<?php echo htmlentities($list1[1]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<div class="layui-form-mid layui-word-aux">%</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 155px">推荐有效用户人数</label>
		<div class="layui-input-inline">
			<input  name="liutong3" required lay-verify="required" value="<?php echo htmlentities($list1[2]['tip']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 85px">伞下代数</label>
		<div class="layui-input-inline">
			<input  name="liutong_daishu3" required lay-verify="required" value="<?php echo htmlentities($list4[2]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 100px">流通奖励</label>
		<div class="layui-input-inline">
			<input  name="liutong_bili3" required lay-verify="required" value="<?php echo htmlentities($list1[2]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<div class="layui-form-mid layui-word-aux">%</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 155px">推荐有效用户人数</label>
		<div class="layui-input-inline">
			<input  name="liutong4" required lay-verify="required" value="<?php echo htmlentities($list1[3]['tip']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 85px">伞下代数</label>
		<div class="layui-input-inline">
			<input  name="liutong_daishu4" required lay-verify="required" value="<?php echo htmlentities($list4[3]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 100px">流通奖励</label>
		<div class="layui-input-inline">
			<input  name="liutong_bili4" required lay-verify="required" value="<?php echo htmlentities($list1[3]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<div class="layui-form-mid layui-word-aux">%</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 155px">推荐有效用户人数</label>
		<div class="layui-input-inline">
			<input  name="liutong5" required lay-verify="required" value="<?php echo htmlentities($list1[4]['tip']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 85px">伞下代数</label>
		<div class="layui-input-inline">
			<input  name="liutong_daishu5" required lay-verify="required" value="<?php echo htmlentities($list4[4]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<label class="layui-form-label" style="width: 100px">流通奖励</label>
		<div class="layui-input-inline">
			<input  name="liutong_bili5" required lay-verify="required" value="<?php echo htmlentities($list1[4]['value']); ?>"  autocomplete="off"  class="layui-input">
		</div>
		<div class="layui-form-mid layui-word-aux">%</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="editConfig3">立即提交</button>
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