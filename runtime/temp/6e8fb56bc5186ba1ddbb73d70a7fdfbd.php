<?php /*a:2:{s:67:"/www/wwwroot/yiwunqianbaonew/application/admin/view/index/area.html";i:1535680616;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
    	
<link rel="stylesheet" href="/static/admin/css/news.css" media="all" />
<style>
	.layui-elem-quote {
		background: rgba(0,0, 0, 0.3);
	}
	.layui-table thead tr {
		background: rgba(0,0, 0, 0.4);
	}
	.layui-table {
		color: #fff;
		background: rgba(0,0, 0, 0.3);
	}
	body{background: none !important;}
</style>

</head>
<body class="childrenBody">

	<blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
			<a class="layui-btn layui-btn-normal newsAdd_btn">添加区号配置</a>
		</div>
	</blockquote>
	<div class="layui-form news_list">
	  	<table class="layui-table">
		    <colgroup>
				<col>
				<col>
				<col>
				<col>
				<col>
				<col>
				<col>
				<col>
		    </colgroup>
		    <thead>
				<tr>
					<th style="width: 50px">区号id</th>
					<th>地区名字</th>
					<th>区号</th>
					<th>操作</th>
				</tr> 
		    </thead>
		    <tbody class="news_content">
			<?php foreach($area as $v): ?>
			<tr>
				<td align="left"><?php echo htmlentities($v['id']); ?></td>
				<td><?php echo htmlentities($v['areaname']); ?></td>
				<td><?php echo htmlentities($v['area']); ?></td>
				<td><a class="layui-btn layui-btn-mini news_edit" data-id="<?php echo htmlentities($v['id']); ?>"><i class="iconfont icon-edit"></i> 编辑</a>
					<a class="layui-btn layui-btn-danger layui-btn-mini news_del" data-id="<?php echo htmlentities($v['id']); ?>"><i class="layui-icon"></i> 删除</a></td>
			</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<div id="page"></div>

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/addArea.js"></script>
</body>
</html>