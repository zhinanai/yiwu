<?php /*a:2:{s:74:"/www/wwwroot/yiwunqianbaonew/application/admin/view/assetsinfos/index.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
    .layui-input{background: rgba(0,0, 0, 0.3);color: #fff;}
    body{background: none !important;}
</style> 

</head>
<body class="childrenBody">

<blockquote class="layui-elem-quote news_search">
	<div class="layui-inline">
        <div class="layui-input-inline">
            <input type="text" class="layui-input searchVal" placeholder="请输入搜索的会员名称">
        </div>
        <a class="layui-btn search_btn" data-type="reload">搜索</a>
    </div>
    
</blockquote>
<table id="list" lay-filter="integral" ></table>
<!-- <script type="text/html" id="titleTpl">
    {{# if(d.disable === 0) { }}
    <a href="javascript:;" class="layui-btn layui-btn-xs" >禁用</a>
    {{# } else {d.disable === 1 }}
        <a href="javascript:;" class="layui-btn layui-btn-xs layui-btn-normal">启用</a>
    {{# } }}
	
  </script> -->
  

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

<script type="text/javascript" src="/static/admin/js/assetsinfos.js"></script>
</body>
</html>