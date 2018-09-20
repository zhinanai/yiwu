<?php /*a:2:{s:67:"/www/wwwroot/yiwunqianbaonew/application/admin/view/user/index.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
	.layui-elem-quote{background: rgba(0,0, 0, 0.3);}
	.layui-table-view{border-color: rgba(255, 255, 255, 0.2);}
	.layui-laypage span{color: #fff;}
	.layui-laypage .layui-laypage-skip{height: 30px;line-height: 30px;color: #FFF;}
	.layui-table-page .layui-laypage input { color: #000;}
	body{background: none !important;}
    td[data-field=head_img] .layui-table-cell {
        height: 50px;
    }
</style> 

</head>
<body class="childrenBody">

<blockquote class="layui-elem-quote news_search">
	<div class="layui-inline">
        <div class="layui-input-inline">
            <input type="text" class="layui-input searchVal" placeholder="请输入姓名/UID/手机号">
        </div>
        <a class="layui-btn search_btn" data-type="reload">搜索</a>
    </div>
    <!-- <div class="layui-inline">
        <a class="layui-btn layui-btn-danger batchDel">批量删除</a>
	</div> -->
	<div class="layui-inline">
			<a class="layui-btn layui-btn-success userAdd_btn">添加用户</a>
	</div>
	<!-- <div class="layui-inline">
			<a class="layui-btn layui-btn-normal userlog_btn">充值记录</a>
	</div> -->
	<!-- <div class="layui-inline">
			<a class="layui-btn layui-btn-danger leveluser_btn" style="background-color:#5FB878">会员等级</a>
		</div> -->
</blockquote>
<table id="list" lay-filter="user" ></table>


<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

<script type="text/javascript" src="/static/admin/js/userList.js"></script>
<script type="text/html" id="titleTpl">
	<img src="{{d.head_img}}" width="80px"/>
</script>
<script type="text/html" id="barDemo">
	<a class="layui-btn layui-btn-xs" lay-event="login">登录</a>
	<a class="layui-btn layui-btn-xs" lay-event="details">充值</a>
	<a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
	<!-- <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a> -->
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

</body>
</html>