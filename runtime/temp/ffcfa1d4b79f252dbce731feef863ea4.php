<?php /*a:2:{s:74:"/www/wwwroot/yiwunqianbaonew/application/admin/view/index/edit_banner.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
.layui-input-block input{color: #fff;}
body{background-image: none !important;}
</style>

</head>
<body class="childrenBody">

 <form class="layui-form" id="userform" class="form-horizontal form form-builder" enctype="multipart/form-data" >
    <div class="layui-form-item">
        <label class="layui-form-label">名称:</label>
        <div class="layui-input-block">
          <input type="text" name="title" value="<?php echo htmlentities($info['title']); ?>" placeholder="请输入标题"  class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">图片:</label>
        <div class="layui-input-block">
            <img height="86px" width="250px" src="<?php echo htmlentities($info['img']); ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="file" name="image" />
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">排序:</label>
        <div class="layui-input-block">
            <input type="text" name="sort" value="<?php echo htmlentities($info['sort']); ?>"  class="layui-input">
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo htmlentities($info['id']); ?>">
     <?php echo token(); ?>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button type="submit" class="layui-btn" lay-submit lay-filter="editbanner">立即提交</button>
        </div>
    </div>
 </form>


<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

    <script type="text/javascript" src="/static/admin/js/shoptype.js"></script>

</body>
</html>