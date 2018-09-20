<?php /*a:2:{s:82:"/www/wwwroot/yiwunqianbaonew/application/admin/view/account_opeing_bank/index.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
	td[data-field=pic] .layui-table-cell {
		height: 60px;
	}
	.layui-table-cell>div{width: 70px;height: 60px;margin: 0 auto;}
	.layui-table-cell>div>img{width: 70px;height: 60px;}
	.layui-table th{text-align: center}
	.layui-elem-quote{background: rgba(0,0, 0, 0.3);}
	.layui-elem-quote .layui-btn{background: #009688;}
	.layui-table thead tr{background: rgba(0,0, 0, 0.4);}
	.layui-table{color: #fff;background: rgba(0,0, 0, 0.3);}
	.layui-table-hover{background: rgba(0,0, 0, 0.4) !important;}
	.layui-laypage .layui-laypage-skip {height: 30px;line-height: 30px;color: #fff;}
	.layui-laypage span{color:#fff;}
	.layui-table-page .layui-laypage input {color: #000;}
	body{background: none !important;}
</style> 

</head>
<body class="childrenBody">

<blockquote class="layui-elem-quote news_search">
	<div class="layui-inline">
        <div class="layui-input-inline">
            <input type="text" class="layui-input searchVal" placeholder="姓名搜索">
        </div>
        <a class="layui-btn search_btn" data-type="reload">搜索</a>
    </div>
  
	<div class="layui-inline">
			<a class="layui-btn layui-btn-success userAdd_btn">添加银行卡</a>
	</div>
	
</blockquote>
<table id="list" lay-filter="user" ></table>

<script type="text/html" id="barDemo">
	<!-- <a class="layui-btn layui-btn-xs" lay-event="details">积分余额</a> -->
	<a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
	<a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
  </script>
  <script type="text/html" id="ISSHOW">
	<input type="checkbox" id="wrst1" name="disable" value="{{d.disable}}" {{# if(d.disable === 1) { }} checked {{# } }} class="switch"  lay-skin="switch" lay-filter="switchTest" lay-text="ON|OFF">
	
  </script>
  <!-- <script type="text/html" id="disable">
	{{# if(d.disable === 0) { }}
		<a href="javascript:;" class="layui-btn layui-btn-xs" >禁用</a>
	{{# } else {d.disable === 1 }}
		<a href="javascript:;" class="layui-btn layui-btn-xs layui-btn-normal">启用</a>
	{{# } }}
	
    
	</script> -->
<script type="text/html" id="pic">
    <div style="width:80px;"><img src="{{ d.pic }}" alt=""></div>
</script>

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

<script type="text/javascript" src="/static/admin/js/bankcardList.js"></script>
</body>
</html>