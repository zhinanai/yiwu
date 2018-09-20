<?php /*a:2:{s:71:"/www/wwwroot/yiwunqianbaonew/application/admin/view/shoptype/index.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
	.layui-elem-quote .layui-btn{background:#009688;}
	.layui-table thead tr{background: rgba(0,0, 0, 0.4);}
	.layui-table{color: #fff;background: rgba(0,0, 0, 0.3);}
	.layui-table-hover{background: rgba(0,0, 0, 0.4) !important;}
	body{background: none !important;}
	</style>

</head>
<body class="childrenBody">

	<blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
			<a class="layui-btn layui-btn-normal adminAdd_btn">添加类别</a>
		</div>
		<!-- <div class="layui-inline">
			<a class="layui-btn layui-btn-danger batchDel">批量删除</a>
		</div> -->
		<div class="layui-inline">
			<div class="layui-form-mid layui-word-aux">　</div>
		</div>
	</blockquote>
	<div class="layui-form users_list">
	  	<table class="layui-table" lay-filter="admins">
		    <colgroup>
				<col>
				<col>
		    </colgroup>
		    <thead>
				<tr>
					<!-- <th>店铺id</th> -->
					<th>店铺类别</th>
					<th>排序</th>
					<th>图片</th>
					<th>时间</th>
					<th>操作</th>
				</tr> 
		    </thead>
		    <tbody class="users_content">
		<?php foreach($admin_list as $v): ?>
			<tr>
				
				<td><?php echo htmlentities($v['type_name']); ?></td>
				<td><?php echo htmlentities($v['sort']); ?></td>
				<?php
				
				$res=str_replace('\\','/',$v['image']);
			
				?>
				<td><img style="width:50px;"src="/<?php echo htmlentities($res); ?>" alt=""></td>
				<td><?php echo htmlentities($v['create_time']); ?></td>
				<!-- <td><?php echo htmlentities($v['typeid']); ?></td> -->
				<td>
						 <a class="layui-btn layui-btn-danger  layui-btn-sm admins_del" data-id="<?php echo htmlentities($v['typeid']); ?>" ><i class="layui-icon"></i> 删除</a>
						<a class="layui-btn layui-btn-success layui-btn-sm admins_edit" data-id="<?php echo htmlentities($v['typeid']); ?>" ><i class="layui-icon"></i> 修改</a>
					
				</td>
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
<script type="text/javascript" src="/static/admin/js/shoptype.js"></script>
</body>
</html>