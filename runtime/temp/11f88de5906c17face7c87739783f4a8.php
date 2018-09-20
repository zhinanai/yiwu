<?php /*a:2:{s:72:"/www/wwwroot/yiwunqianbaonew/application/admin/view/reward/coindets.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
	.layui-input{display: inline-block;width: 92%;}
	body{background: none !important;}
</style>

</head>
<body class="childrenBody">

<div class="layui-bg-green" style="padding: 5px;margin-bottom: 20px;width: 115px">资产增长比例管理</div>
<!--VIP奖励设置-->
<form class="layui-form" id="maxform">
	
	
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">资产增长率</label>
		<div class="layui-input-inline">
			<input  name="grwoth" required lay-verify="required" value="<?php echo htmlentities($growem); ?>" placeholder="当前比例" autocomplete="off"  class="layui-input">%	
			
		</div>
		
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px">资产增长上限比例</label>
		<div class="layui-input-inline">
			<input  name="maxcoindets" required lay-verify="required" value="<?php echo htmlentities($max); ?>" placeholder="当前比例" autocomplete="off"  class="layui-input">%
			
		</div>
		
	</div>

	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="maxcoindets">立即提交</button>
		</div>
	</div>
</form>
<hr>
<div class="layui-bg-green" style="padding: 5px;margin-bottom: 20px;width: 100px">资产价格管理</div>
<!--VIP奖励设置-->
<?php if(count($list)>0): ?>
<form class="layui-form" id="coindetsform">
	<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	
	<div class="layui-form-item">
		<label class="layui-form-label" style="width: 145px"><?php echo htmlentities($vo['coin_name']); ?></label>
		<div class="layui-input-inline">
			<input  name="<?php echo htmlentities($vo['coin_name']); ?>" required lay-verify="required" value="<?php echo htmlentities($vo['coin_price']); ?>" placeholder="当前价格" autocomplete="off"  class="layui-input">
			
		</div>
		<!-- <?php echo htmlentities($vo['cid']); ?> -->
	</div>
	
	<?php endforeach; endif; else: echo "" ;endif; ?>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="editcoindets">立即提交</button>
		</div>
	</div>
</form>
<?php else: ?>
	<span>无数据</span>
<?php endif; ?>


<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

<script type="text/javascript" src="/static/admin/js/reward.js"></script>

</body>
</html>