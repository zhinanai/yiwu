<?php /*a:2:{s:71:"/www/wwwroot/yiwunqianbaonew/application/admin/view/business/index.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
	td[data-field=head_img] .layui-table-cell {
		height: 80px;
	}
	.layui-elem-quote{background: rgba(0,0, 0, 0.3);}
	.layui-table thead tr{background: rgba(0,0, 0, 0.4);}
	.layui-table{color: #fff;background: rgba(0,0, 0, 0.3);}
	.layui-table-hover{background: rgba(0,0, 0, 0.4) !important;}
	.layui-input{background: rgba(0,0, 0, 0.3); color: #fff;}
	.layui-laypage span{color:#fff;}
	.layui-laypage .layui-laypage-skip {height: 30px;line-height: 30px;color: #fff;}
	.layui-table-page .layui-laypage input {color: #000;}
	body{background: none !important;}
</style>

</head>
<body class="childrenBody">

<blockquote class="layui-elem-quote news_search">
	<div class="layui-inline demoTable" style="width: 100%">
		<div class="layui-input-inline" style="width: 100%">
			<input type="text" class="layui-input searchVal" name="keyword" id="demoReload" placeholder="请输入商家id" style="width: 10%;display: inline-block">
			<select name="status" class="layui-input searchVal" id="demoReload2" style="width: 10%;display: inline-block">
				<option value=""  >请选择审核状态</option>
				<option value="1"  >未审核</option>
				<option value="2"  >已审核</option>
			</select>
			<a class="layui-btn search_btn"  data-type="reload">搜索</a>
		</div>
	</div>
</blockquote>
<table id="list" lay-filter="business" ></table>
<script type="text/html" id="titleTpl">
	<img src="{{d.head_img}}" width="80px"/>
</script>
<script type="text/html" id="barDemo">
	<a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
	<a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

<script type="text/javascript" src="/static/admin/js/businessList.js"></script>

</body>
</html>