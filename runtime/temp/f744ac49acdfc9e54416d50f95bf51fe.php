<?php /*a:2:{s:73:"/www/wwwroot/yiwunqianbaonew/application/admin/view/index/sms_config.html";i:1535711766;s:61:"/www/wwwroot/yiwunqianbaonew/application/admin/view/base.html";i:1535420122;}*/ ?>
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
            body{background: none !important;}
           .layui-editstyle {
                display: inline-block;
                height: 38px;
                line-height: 38px;
                padding: 0 18px;
                background-color: #009688;
                color: #fff;
                white-space: nowrap;
                text-align: center;
                font-size: 14px;
                border: none;
                border-radius: 2px;
                cursor: pointer;
            }
            .layui-input-block {
                margin-left: 130px;
            }
           .editstyle-mess{
               line-height:40px;
           }
           .w_duanxin{
               display: none;
           }
        </style>
    
</head>
<body class="childrenBody">

 <form class="layui-form" action="">
         <div class="layui-form-item">
             <label class="layui-form-label layui-editstyle">选择短信服务:</label>
             <div class="layui-input-block editstyle-mess">
               <input type="radio" <?php if($smso['status'] == 1): ?>checked<?php endif; ?> name="status" value="1" title="国内短信">
               <input type="radio" style="margin-left:20px;" <?php if($smst['status'] == 1): ?>checked<?php endif; ?> name="status" value="2" title="国外短信">
             </div>
         </div>
        
         <div class="w_duanxin">
            <label class="layui-form-label layui-editstyle"11>国内短信:</label>
            <div class="layui-form-item">
                <label class="layui-form-label">短信接口的URL:</label>
                <div class="layui-input-block">
                    <input type="text" id="sendUrl1" required  lay-verify="required" value="<?php echo htmlentities($smso['sendUrl']); ?>" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">您申请的APPKEY:</label>
                <div class="layui-input-block">
                    <input type="text" id="appkey1" required  lay-verify="required" value="<?php echo htmlentities($smso['appkey']); ?>" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">您申请的短信模板ID:</label>
                <div class="layui-input-block">
                    <input type="text" id="tpl_id1" required  lay-verify="required" value="<?php echo htmlentities($smso['tpl_id']); ?>" class="layui-input">
                </div>
            </div>
       </div>
       <div class="w_duanxin">
        <label class="layui-form-label layui-editstyle">国外短信:</label>
        <div class="layui-form-item">
             <label class="layui-form-label">国际短信接口的URL:</label>
             <div class="layui-input-block">
                <input type="text" id="sendUrl2" required  lay-verify="required" value="<?php echo htmlentities($smst['sendUrl']); ?>" class="layui-input">
             </div>
         </div>
         <div class="layui-form-item">
             <label class="layui-form-label">国际短信API账号:</label>
             <div class="layui-input-block">
                <input type="text" id="appkey2" required  lay-verify="required" value="<?php echo htmlentities($smst['appkey']); ?>" class="layui-input">
             </div>
         </div>
         <div class="layui-form-item">
             <label class="layui-form-label">国际短信API密码:</label>
             <div class="layui-input-block">
                <input type="text" id="tpl_name" required  lay-verify="required" value="<?php echo htmlentities($smst['tpl_name']); ?>" class="layui-input">
             </div>
        </div>
        </div>
        <div class="layui-form-item">
             <div class="layui-input-block">
                <input class="layui-btn" id="btnbtn" value="立即提交" readonly="readonly">
             </div>
        </div>
    

 </form>

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/static/common/lib/layui/layui.js"></script>

<script type="text/javascript" src="/static/admin/js/particles.min.js"></script>
<script>
    var layer;
    $("#btnbtn").click(function(){
        var sendUrl1 = $("#sendUrl1").val();  
        var appkey1 = $("#appkey1").val(); 
        var tpl_id1 = $("#tpl_id1").val();
        var sendUrl2 = $("#sendUrl2").val();  
        var appkey2 = $("#appkey2").val(); 
        var tpl_id2 = $("#tpl_id2").val();
        var tpl_name = $("#tpl_name").val();
        var status = $('input:radio:checked').val();
        $.ajax({
            type: "POST",
            url: "<?php echo url('admin/index/dosms'); ?>",
            data: {
                sendUrl1:sendUrl1,
                appkey1:appkey1,
                tpl_id1:tpl_id1,
                sendUrl2:sendUrl2,
                appkey2:appkey2,
                tpl_name:tpl_name,
                status:status
            },
            dataType: "json",
            success: function(data){
                if(data.code==1){
                   top.layer.msg("保存成功!");
                   //刷新父页面
                   setTimeout(parent.location.reload(),1500);
                }else{
                   top.layer.msg(data.msg);
                }
            }
        })
    })
    //短信切换
    layui.use(['form'], function(){
        var form = layui.form
        var html = $('.layui-form-radioed').children('div').html();
        if(html == '国内短信'){
            $('.w_duanxin').eq(0).css('display','block');
        }else{
            $('.w_duanxin').eq(1).css('display','block');
        }
        $(".layui-form-radio").eq(0).click(function(){
            $(".w_duanxin").eq(0).css("display","block");
            $(".w_duanxin").eq(1).css("display","none");
        });
        $(".layui-form-radio").eq(1).click(function(){
            $(".w_duanxin").eq(0).css("display","none");
            $(".w_duanxin").eq(1).css("display","block");
        });
    });
    
   

</script>

</body>
</html>