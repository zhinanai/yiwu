<?php /*a:2:{s:67:"/www/wwwroot/yiwunqianbaonew/application/admin/view/node/index.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
    
	<link rel="stylesheet" href="__ADMIN_/css/user.css" media="all" />
	<style>
		.layui-elem-quote{background: rgba(0,0, 0, 0.3);}
		.layui-elem-quote .layui-btn{background: #009688;}
		.layui-table thead tr{background: rgba(0,0, 0, 0.4);}
		.layui-table{color: #fff;background: rgba(0,0, 0, 0.3);}
		.layui-table-hover{background: rgba(0,0, 0, 0.4) !important;}
		.layui-input{background: rgba(0,0, 0, 0.3);color: #fff;}
		.layui-inline .layui-form-mid{color: #fff !important;}
		.layui-laypage span{color:#fff;}
		.layui-laypage .layui-laypage-skip {height: 30px;line-height: 30px;color: #fff;}
		.layui-icon {color: #fff;}
		.layui-table-page .layui-laypage a {color: #fff;}
		.layui-table-page .layui-laypage input {color: #000;}
		body{background: none !important;}
	</style>
	
</head>
<body class="childrenBody">

	<blockquote class="layui-elem-quote news_search">
			<div class="layui-inline">
					<div class="layui-input-inline">
						<input type="text" class="layui-input searchVal" placeholder="请输入搜索的内容">
					</div>
					<a class="layui-btn search_btn" data-type="reload">搜索</a>
				</div>
		<div class="layui-inline">
			<a class="layui-btn layui-btn-normal nodeAdd_btn">添加节点</a>
		</div>
		<!-- <div class="layui-inline">
			<a class="layui-btn layui-btn-danger batchDel">批量删除</a>
		</div> -->
		<div class="layui-inline">
			<div class="layui-form-mid layui-word-aux">　谨慎修改权限节点</div>
		</div>
	</blockquote>
	
	
	<table id="list" lay-filter="node" ></table>
	<script type="text/html" id="barDemo">

		<a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
		<a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
	  </script>

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/nodeList.js"></script>
</body>
</html>