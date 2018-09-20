<?php /*a:2:{s:72:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/user/complaint.html";i:1535420122;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>投诉建议</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/mobile/css/global.css"/>
    <link rel="stylesheet" href="/static/mobile/css/swiper.min.css"/>
    <link rel="stylesheet" href="/static/mobile/css/footer.css"/>
    <link rel="stylesheet" href="/static/mobile/js/dist/dropload.css"/>
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_698151_ecrzuynt8d1gu8fr.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_759057_pq7xcbkbnu.css">
    
<link rel="stylesheet" href="/static/mobile/css/wenStyle.css"/>
   
</head>
<body>

<div class="header">
    <div class="header_l">
        <a href="javascript:history.go(-1)"><img src="/static/mobile/images/jiant.png" alt=""></a>
    </div>
    <div class="header_c">
        <h2><?php echo lang('投诉建议'); ?></h2>
    </div>
    <div class="header_r"></div>
</div>
<div class="big_width100">
    <div class="opiniontop_d">
        <div class="opiniontop">
            <p><?php echo lang('请在下方输入您的宝贵意见'); ?></p>
        </div>
        <div class="opinion">
            <textarea name="introduce" id="introducebb" rows="8" placeholder="<?php echo lang('请输入'); ?>..."></textarea>
        </div>
        <!-- <div class="container">
            <div class="z_photo">
                <div class="z_file">
                    <input type="file" name="file" id="file" value="" accept="image/*" multiple onchange="imgChange('z_photo','z_file');" />
                </div>
            </div>
            <div class="z_mask">
                <div class="z_alert">
                    <p>确定要删除这张图片吗？</p>
                    <p>
                        <span class="z_cancel">取消</span>
                        <span class="z_sure">确定</span>
                    </p>
                </div>
            </div>
        </div> -->
    </div>
    <div class="buttonGeoup">
        <a href="javascript:void(0);"  class="not_next" id="cuanjdd"><?php echo lang('确定'); ?></a>
    </div>
</div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script>
    $('#cuanjdd').click(function () {
        var content = $('#introducebb').val();
        if(content == ''){
            msg_alert('<?php echo lang("请填写内容"); ?>');
            return false;
        }
        $.ajax({
            url:'/mobile/User/complaint',
            type:'post',
            data:{'content':content},
            datatype:'json',
            success:function (mes) {
                msg_alert(mes.mes,mes.url);
            }
        })
    })
</script>

</body>
</html>