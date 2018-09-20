<?php /*a:2:{s:70:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/growth/intro.html";i:1535420122;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    转入
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
    /* body{ background: #48b1a4;margin-top: .92rem;} */
    html{width: 100%;height: 100%;}
    body{background: rgb(17, 18, 22);background-position: center;background-size: 100% 100%;}
    .big_width{margin-top: 1.8rem;}
    .qrCodeGro{width: 100%;margin: .4rem auto 0;}
</style>
   
</head>
<body>

    <div class="header">
	    <div class="header_l" style="width:33.3%;">
            <a href="<?php echo url('/mobile/Index/index'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
	    </div>
	    <div class="header_c" style="width:33.3%;"><h2><?php echo lang('转入'); ?></h2></div>
	    
	</div>

    <div class="big_width">
        <div class="qrCodeGro">
        <p><?php echo lang('扫一扫，向我付款'); ?></p>
        <img src="<?php echo url('mobile/Growth/CreateCode'); ?>" class="qr_img">
        </div>
        <div class="intoButt">
        <a href="<?php echo url('/mobile/Growth/Introrecords'); ?>"><?php echo lang('转入记录'); ?></a>
        </div>
    </div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>


</body>
</html>