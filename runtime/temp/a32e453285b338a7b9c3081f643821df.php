<?php /*a:2:{s:68:"/www/wwwroot/yiwunqianbaonew/application/admin/view/index/close.html";i:1535420122;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
    .layui-form-label{color: #fff;}
    .layui-form-radio div{color: #fff;}
    .layui-input {background: rgba(0, 0, 0, 0.3);color: #fff;border: 1px solid rgba(0, 0, 0, 0.4);}
    body{background: none !important;}
</style>

</head>
<body class="childrenBody">


   <form class="layui-form" id="formId" action="<?php echo url("","",true,false);?>" method="post" onsubmit="return sub();">
        <div class="layui-form-item">
             <label class="layui-form-label">关闭网站:</label>
             <div class="layui-input-block">
                <input type="radio" <?php if($con['close_net'] == 1): ?> checked="checked" <?php endif; ?> name="close_net" value="1" title="关闭">
                <input type="radio" <?php if($con['close_net'] == 0): ?> checked="checked" <?php endif; ?> name="close_net" value="0" title="打开">
             </div>
        </div>
        <div class="layui-form-item">
             <label class="layui-form-label">提示信息:</label>
             <div class="layui-input-block">
                <input type="text" name="close_net_content" required  lay-verify="required" value="<?php echo htmlentities($con['close_net_content']); ?>" class="layui-input">
             </div>
        </div>
        <div class="layui-form-item">
             <label class="layui-form-label">关闭注册:</label>
             <div class="layui-input-block">
                <input type="radio" <?php if($con['close_reg'] == 1): ?> checked="checked" <?php endif; ?> name="close_reg" value="1" title="关闭">
                <input type="radio" <?php if($con['close_reg'] == 0): ?> checked="checked" <?php endif; ?> name="close_reg" value="0" title="打开">
             </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">提示信息:</label>
            <div class="layui-input-block">
                <input type="text" name="close_reg_content" required  lay-verify="required" value="<?php echo htmlentities($con['close_reg_content']); ?>" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
             <div class="layui-input-block">
                <button class="layui-btn" type="button" onclick="sub()">立即提交</button>
             </div>
        </div>
   </form>


<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script>
layui.use('form', function(){

});
</script>
<script>
     function sub() {  
        $.ajax({  
                cache: true,  
                type: "POST",  
                url:"<?php echo url("","",true,false);?>",  
                data:$('#formId').serialize(),
                async: false,  
                success: function(data) {  
                    msg_alert("提交成功!");  
                }  
            });  
    }  

</script>

</body>
</html>