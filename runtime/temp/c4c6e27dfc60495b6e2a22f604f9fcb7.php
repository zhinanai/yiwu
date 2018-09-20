<?php /*a:2:{s:76:"/www/wwwroot/yiwunqianbaonew/application/admin/view/buy_order/configure.html";i:1535680616;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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

	<form   id="opeing" class="layui-form" style="width:80%;" enctype="multipart/form-data" id="userform">
		<div class="layui-form-item">
            <label class="layui-form-label" style="width: 80px">手续费:</label>
            <div class="layui-input-inline">
                <input  name="service_charge" required lay-verify="required" value="<?php echo htmlentities($service_charge); ?>" placeholder="手续费比例" autocomplete="off"  class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">%</div>
        </div>
		<div class="layui-form-item">
            <label class="layui-form-label" style="width: 80px">保证金:</label>
            <div class="layui-input-inline">
                <input  name="bond" required lay-verify="required" value="<?php echo htmlentities($bond['value']); ?>" placeholder="保证金" autocomplete="off"  class="layui-input">
            </div>
            <!-- <div class="layui-form-mid layui-word-aux">%</div> -->
        </div>

        <div class="layui-form-item">
        <label class="layui-form-label" style="width: 80px">促销:</label>
        <div class="layui-input-inline">
            <input  name="discount_ratio" required lay-verify="required" value="<?php echo htmlentities($discount_ratio); ?>" placeholder="手续费比例" autocomplete="off"  class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">%</div>
       </div> 
       <span style="margin-left:60px">提示:购买余额优惠的折扣</span>   

        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">保证金协议:</label>
            <div class="layui-input-block">
              <textarea name="desc" placeholder="请输入内容" class="layui-textarea"><?php echo htmlentities($bond['condition']); ?></textarea>
            </div>
          </div>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="revise">立即提交</button>
				<!-- <button type="reset" class="layui-btn layui-btn-primary">重置</button> -->
		    </div>
		</div>
	</form>
	
	


<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

    <script type="text/javascript" src="/static/admin/js/buy_orderList.js"></script>
    
</body>
</html>