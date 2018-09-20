<?php /*a:2:{s:68:"/www/wwwroot/yiwunqianbaonew/application/admin/view/index/about.html";i:1535680616;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
    .layui-form-label{color: #fff !important;}
    .layui-layedit-tool .layui-icon {color: #fff;}
    p{color: #fff;}
    body{background: none !important;}
</style>

</head>
<body class="childrenBody">

<form class="layui-form" id="articleForm" enctype="multipart/form-data">
		
		<div class="layui-form-item">
			<label class="layui-form-label">关于我们</label>
			<div class="layui-input-block">
				<textarea class="layui-textarea layui-hide" name="content" lay-verify="content" id="news_content"><?php echo htmlentities($about); ?></textarea>
			</div>
		</div>
        <?php echo token(); ?>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="addAbout">立即提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>
	</form>

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

<script>
layui.config({
    base: "/static/admin/js/"
}).use(['form', 'layer', 'jquery', 'layedit', 'upload'], function () {
    var form = layui.form,
        layer = parent.layer === undefined ? layui.layer : parent.layer,
        upload = layui.upload,
        layedit = layui.layedit,
        $ = layui.jquery;
        
        //创建一个编辑器
        var editIndex = layedit.build('news_content', {
            uploadImage: {
                url: '/admin/Notice/uploadImg/'
                ,type: 'post'
            }
        });
        form.on("submit(addAbout)", function (data) {
            data.field.content = layedit.getContent(editIndex);
           
            var formdom = $('#articleForm')[0]
                ,formdata = new FormData(formdom);
            formdata.append('content', layedit.getContent(editIndex));
            $.ajax({
               url: '/admin/index/addAbout',
               type: 'POST',
               data: formdata,
               processData: false, // jQuery不要去处理发送的数据
                contentType: false, // jQuery不要去设置Content-Type请求头
               success: function(res) {
                  console.log(res);
                  if(res==1){
                    top.layer.msg("添加成功！");
                    layer.closeAll("iframe");
                    //刷新父页面
                    setTimeout(parent.location.reload(),1500);
                  }else{
                    top.layer.msg("添加失败！");
                    setTimeout(parent.location.reload(),1500);
                  }
               }

           });

        
            return false;
        })
        
});

</script>


</body>
</html>