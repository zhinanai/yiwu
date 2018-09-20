<?php /*a:2:{s:75:"/www/wwwroot/yiwunqianbaonew/application/admin/view/notice/edit_notice.html";i:1535011708;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
    
</head>
<body class="childrenBody">

<form class="layui-form" id="articleForm" enctype="multipart/form-data">
		<div class="layui-form-item">
			<label class="layui-form-label">公告标题</label>
			<div class="layui-input-block">
				<input type="text" name="title" class="layui-input newsName" lay-verify="required" value="<?php echo htmlentities($notice['title']); ?>" placeholder="请输入公告标题">
				<input type="hidden" name="id" class="layui-input newsId" value="<?php echo htmlentities($notice['id']); ?>">

			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">公告导读</label>
			<div class="layui-input-block">
				<input type="text" name="read" class="layui-input newsName" lay-verify="required" value="<?php echo htmlentities($notice['read']); ?>" placeholder="请输入公告简介">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">公告内容</label>
			<div class="layui-input-block">
				<textarea class="layui-textarea layui-hide" name="content" lay-verify="content" id="news_content"><?php echo htmlentities($notice['content']); ?></textarea>
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="editNews">立即提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>
	</form>

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/newsAdd.js"></script>
</body>
</html>