<?php /*a:2:{s:71:"/www/wwwroot/yiwunqianbaonew/application/admin/view/complaint/edit.html";i:1535011708;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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

<form class="layui-form" id="complaintForm" >
	<input type="hidden" class="layui-input"  value="<?php echo htmlentities($data['id']); ?>" name="id">
    <div class="layui-form-item">
        <label class="layui-form-label">投诉人id</label>
        <div class="layui-input-block">
            <input type="text" name="name" class="layui-input newsName" readonly value="<?php echo htmlentities($data['userid']); ?>" >
        </div>
    </div>
	<div class="layui-form-item">
		<label class="layui-form-label">投诉人昵称</label>
		<div class="layui-input-block">
			<input type="text" name="nums" value="<?php echo htmlentities($data['nickname']); ?>" readonly class="layui-input newsName"  >
		</div>
	</div>
    <div class="layui-form-item">
        <label class="layui-form-label">投诉人电话</label>
        <div class="layui-input-block">
            <input type="text" name="limit" value="<?php echo htmlentities($data['mobile']); ?>" readonly class="layui-input  newsName"  >
        </div>
    </div>
	<div class="layui-form-item layui-form-text">
		<label class="layui-form-label">投诉内容</label>
		<div class="layui-input-block">
			<textarea name="desc"  class="layui-textarea" readonly><?php echo htmlentities($data['content']); ?></textarea>
		</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label">投诉状态</label>
		<div class="layui-input-block">
			<select name="status" lay-verify="required" id="status">
				<?php foreach($status as $key => $value): ?>
				<option value="<?php echo htmlentities($key); ?>" <?php if($key == $data['status']): ?> selected <?php endif; ?> ><?php echo htmlentities($value); ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label">投诉时间</label>
		<div class="layui-input-block">
			<input type="text" name="time" class="layui-input newsName" readonly value="<?php echo htmlentities($data['create_time']); ?>" lay-verify="required" >
		</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit="" lay-filter="complaintEdit">立即提交</button>
		</div>
	</div>
</form>

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/complaintEdit.js"></script>
</body>
</html>