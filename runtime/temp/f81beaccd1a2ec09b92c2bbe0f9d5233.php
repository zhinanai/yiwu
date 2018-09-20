<?php /*a:2:{s:71:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/index/turnout.html";i:1535421736;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    转出
</title>
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
    
<link rel="stylesheet" href="/static/mobile/css/yangStyle.css">
<style>
    body{ background: #f5f5f5;}
</style>
   
</head>
<body>

<div class="header">
	    <div class="header_l">
	    <a href="<?php echo url('/mobile/Index/index'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
	    </div>
	    <div class="header_c"><h2><?php echo lang('转出'); ?></h2></div>
	    <div class="header_r"><a href="<?php echo url('/mobile/Index/Turncords'); ?>"><?php echo lang('转出记录'); ?></a></div>
	</div>

    <div class="big_width100">
        <div class="fill_sty">
        <p><?php echo lang('对方账户'); ?></p>
        <input type="number" name="other_account" placeholder="<?php echo lang('请输入手机号码'); ?>/UID" autocomplete="off" id="phone_uid">
        </div>
        <div class="buttonGeoup">

        <a href="#" class="not_next" id="ternNextStep"><?php echo lang('下一步'); ?></a>
        <a href="<?php echo url('/mobile/Index/exehange'); ?>" class="exchange"><?php echo lang('积分兑换'); ?></a>
        </div>
    </div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script type="text/javascript">
    $('#ternNextStep').on('click', function(){
        Checku();
    });
    function Checku(){
        var mobile =$.trim($('#phone_uid').val()); //账号  //.trim() 去空格判断
        var exg = /^[1-9]\d*|0$/;
        if(!exg.test(mobile)){
            layer.msg('<?php echo lang("对方账户不能为空"); ?>');
            return;
        }
        $.ajax({
            type: "POST",
            url: '/mobile/Index/turnout',
            data:{'mobile':mobile},
            dataType: "json",
            success: function(mes){
                if(mes.status == 1)
                {
                    window.location.href = "<?php echo url('/mobile/Index/changeout/trid/'); ?>"+mes.data;
                }else{
                    msg_alert(mes.msg);
                }
            }
        });
    }
 </script>

</body>
</html>