<?php /*a:2:{s:67:"/www/wwwroot/yiwunqianbaonew/application/admin/view/index/main.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
    
<link rel="stylesheet" href="/static/admin/css/main.css" media="all" />
<style>
	body{background: none !important;}
</style>

</head>
<body class="childrenBody">

<body class="childrenBody">
	<div class="panel_box row">
		<div class="panel col">
			<a href="javascript:;" data-url="<?php echo url('admin/Recharge/wallet'); ?>">
				<div class="panel_icon">
					<i class="layui-icon" data-icon="&#xe65e;">&#xe65e;</i>
				</div>
				<div class="panel_word newMessage">
				
					<cite>总余额</cite>
					<span><?php echo htmlentities($wallet_num); ?></span>
				</div>
			</a>
		</div>
		<div class="panel col">
			<a href="javascript:;" data-url="<?php echo url('admin/Recharge/integral'); ?>">
				<div class="panel_icon" style="background-color:#FF5722;">
					<i class="layui-icon" data-icon="&#xe659;">&#xe659;</i>
				</div>
				<div class="panel_word userAll">
					<cite>总积分</cite>
					<span><?php echo htmlentities($integral_num); ?></span>
					
				</div>
			</a>
		</div>
		<div class="panel col">
			<a href="javascript:;" data-url="<?php echo url('admin/User/index'); ?>">
				<div class="panel_icon" style="background-color:#009688;">
					<i class="layui-icon" data-icon="&#xe613;">&#xe613;</i>
				</div>
				<div class="panel_word userAll">
					<cite>用户总数</cite>
					<span><?php echo htmlentities($total_number); ?></span>
				</div>
			</a>
		</div>
		<div class="panel col">
			<a href="javascript:;" data-url="<?php echo url('admin/User/index'); ?>">
				<div class="panel_icon" style="background-color:#5FB878;">
					<i class="layui-icon" data-icon="&#xe612;">&#xe612;</i>
				</div>
				<div class="panel_word imgAll">
					<cite>新增人数</cite>
					<span><?php echo htmlentities($num); ?></span>
				</div>
			</a>
		</div>
		<div class="panel col">
			<a href="javascript:;" data-url="<?php echo url('admin/Recharge/wallet'); ?>">
				<div class="panel_icon" style="background-color:#F7B824;">
					<i class="layui-icon" data-icon="&#xe621;">&#xe621;</i>
				</div>
				<div class="panel_word waitNews">
					<cite>总释放</cite>
					<span><?php echo htmlentities($total_money); ?></span>
					
				</div>
			</a>
		</div>
		<div class="panel col max_panel">
			<a href="javascript:;" data-url="<?php echo url('admin/Recharge/wallet'); ?>">
				<div class="panel_icon" style="background-color:#2F4056;">
					<i class="layui-icon" data-icon="&#xe61d;">&#xe61d;</i>
				</div>
				<div class="panel_word allNews">
					<cite>总释放</cite>
					<em>今日总释放</em>
				    <span><?php echo htmlentities($sameday_money); ?></span>
				</div>
			</a>
		</div>
	</div>


<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/main.js"></script>
</body>
</html>