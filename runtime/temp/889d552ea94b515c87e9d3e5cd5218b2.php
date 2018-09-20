<?php /*a:2:{s:69:"/www/wwwroot/yiwunqianbaonew/application/admin/view/index/banner.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
        .layui-elem-quote{background: rgba(0,0, 0, 0.3);border-left: 5px solid rgba(0, 150, 136, 0.5);}
		.layui-elem-quote .layui-btn{background: rgba(0, 150, 136, 0.5);}
		.layui-table thead tr{background: rgba(0,0, 0, 0.4);}
		.layui-table{color: #fff;background: rgba(0,0, 0, 0.3);}
        .layui-table-hover{background: rgba(0,0, 0, 0.4) !important;}
        .label{color: #fff !important;}
        .layui-input-block{color:#fff;}
        body{background-image: none !important;}
</style>

</head>
<body class="childrenBody">

	
<table class="layui-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>图片</th>
            <th>日期</th>
            <th>名称</th>
            <th>操作</th>
        </tr>
    </thead>
               
    <tbody>
        <?php foreach($imgs as $img): ?>
            <tr>   
                <td><?php echo htmlentities($img['id']); ?></td>
                <td><img height="40px" width="80px" src="<?php echo htmlentities($img['img']); ?>" /></td>                                                                   
                <td><?php echo htmlentities($img['create_time']); ?></td>
                <td><?php echo htmlentities($img['title']); ?></td>
                <td>
                    <a name="edit" title="编辑" class="label label-primary-outline label-pill" href="<?php echo url('admin/Index/editBanner',['id'=>$img['id']]); ?>">编辑</a>
                </td>  
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>


<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

</body>
</html>