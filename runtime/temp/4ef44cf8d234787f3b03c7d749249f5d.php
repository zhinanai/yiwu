<?php /*a:2:{s:72:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/user/set_uname.html";i:1535011708;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>昵称修改</title>
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

</style>
   
</head>
<body>

<div class="header">
    <div class="header_l">
        <a href="javascript:history.go(-1)"><img src="/static/mobile/images/jiant.png" alt=""></a>
    </div>
    <div class="header_c">
        <h2><?php echo lang("昵称修改"); ?></h2></div>
    <div class="header_r"></div>
</div>
<div class="big_width100">
    <div class="nic_xiu">
        <input type="text" name="username" class="username" value="<?php echo htmlentities($username); ?>" placeholder="<?php echo lang('请输入昵称'); ?>" autocomplete="off">
    </div>
    <div class="buttonGeoup">
        <a href="javascript:void(0)" class="not_next ljzf_but "><?php echo lang("确定"); ?></a>
    </div>
 </div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script>
$('.ljzf_but').click(function () {
    var uname = $('.username').val();
    if(uname == ''){
        msg_alert('<?php echo lang("请填写昵称"); ?>');
    }
    $.ajax({
        url:'/mobile/User/Setuname',
        type:'post',
        data:{'uname':uname},
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