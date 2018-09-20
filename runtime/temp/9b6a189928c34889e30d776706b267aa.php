<?php /*a:2:{s:70:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/user/set_pwd.html";i:1535011708;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>密码修改</title>
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
<style>
    .add_bank_add_gr{border-bottom: none;}
    .mababno{border-bottom: 1px solid #ddd;}
</style>
   
</head>
<body>

<div class="header">
    <div class="header_l">
        <a href="javascript:history.go(-1)"><img src="/static/mobile/images/jiant.png" alt=""></a>
    </div>
    <div class="header_c">
        <h2><?php echo lang('密码修改'); ?></h2>
    </div>
    <div class="header_r"></div>
</div>
<div class="big_width100">
    <div class="add_bank_add_gr">
        <div class="fill_sty add_gr_b10 flex">
            <p><?php echo lang('旧密码'); ?></p>
            <input type="password" name="password" class="password" placeholder="<?php echo lang('输入旧密码'); ?>"   />
        </div>
        <div class="fill_sty add_gr_b10 mababno flex">
            <p><?php echo lang('新密码'); ?></p>
            <input type="password" name="password" class="passwordrepat" placeholder="<?php echo lang('输入新密码'); ?>"   />
            <input type="hidden" value="<?php echo htmlentities($pwdtype); ?>" class="pwdtype">
        </div>
    </div>
    <div class="wangjmim_se">    
        <eq name="type" value="1">
            <a href="<?php echo url('/mobile/Login/getpsw'); ?>"><?php echo lang('忘记登录密码'); ?>？</a>
            <else />
            <a href="<?php echo url('/mobile/Login/getpswpay '); ?>"><?php echo lang('忘记支付密码'); ?>？</a>
        </eq>
    </div>
    <div class="buttonGeoup">
        <a href="javascript:void(0)" class="not_next ljzf_but "><?php echo lang('确定'); ?></a>
    </div>
 </div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script>
$('.ljzf_but').click(function () {
    var pwd = $('.password').val();
    var pwdrpt = $('.passwordrepat').val();
    var pwdtype = $('.pwdtype').val();
    if(pwd == ''){
        msg_alert('<?php echo lang("旧密码不能为空哦"); ?>~');
    }
    if(pwdrpt == ''){
        msg_alert('<?php echo lang("新密码不能为空哦"); ?>');
        return;
    }
    if(pwdtype == 2){
        //交易密码必须为6位纯数字
        var reg = /^\d{6}\b/;
        if(!reg.test(pwdrpt)){
            msg_alert('<?php echo lang("交易密码只能为6位数"); ?>');
            return false;
        }
    }
    $.ajax({
        url:'/mobile/User/Setpwd',
        type:'post',
        data:{'pwd':pwd,'pwdrpt':pwdrpt,'pwdtype':pwdtype},
        datatype:'json',
        success:function (mes) {
            if(mes.status == 1){
                msg_alert(mes.message,mes.url);
            }else{
                msg_alert(mes.message);
            }
        }
    })
})
</script>

</body>
</html>