<?php /*a:2:{s:73:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/shop/navigation.html";i:1535452294;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    应用导航
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
    
<link rel="stylesheet" href="/static/mobile/css/shop.css">
<style>
    body{background: #f5f5f5;}
</style>

   
</head>
<body>


<!-- 头部 --> 
<div class="fxm_header">
    <div class="w_yydaohang"><?php echo lang('应用导航'); ?></div>
</div>

<!-- 内容 -->
<div class="w_dhcontent">
    <div class="w_dhtwo">
        <a href="<?php echo url('/mobile/index/exehange'); ?>">
            <i class="iconfont icon-jifen1" style="color: #f4b00c"></i>
            <span><?php echo lang('积分兑换'); ?></span>
        </a>
        <a href="<?php echo url('/mobile/index/Exchangerecords'); ?>">
            <i class="iconfont icon-jilu" style="color: #b98efa"></i>
            <span><?php echo lang('兑换记录'); ?></span>
        </a>
    </div>
    <div class="w_dhtwo">
        <!-- <a href="###" class="notopen">
            <i class="iconfont icon-shangcheng1" style="color: #0d45d5"></i>
            <span><?php echo lang('线上商城'); ?></span>
        </a> -->
        <a href="<?php echo url('/mobile/shop/index'); ?>">
            <i class="iconfont icon-shangjia1" style="color: #f3ac46"></i>
            <span><?php echo lang('商家联盟'); ?></span>
        </a>
    </div>
    <div class="w_dhtwo">
        <a href="<?php echo url('/mobile/User/Sharecode'); ?>">
            <i class="iconfont icon-tuisong-copy" style="color: #f884fc"></i>
            <span><?php echo lang('分享推广'); ?></span>
        </a>
        <a href="<?php echo url('/mobile/User/Teamdets'); ?>">
            <i class="iconfont icon-guanli" style="color: #8dec7d"></i>
            <span><?php echo lang('团队管理'); ?></span>
        </a>
    </div>
    <div class="w_dhtwo">
        <a href="###" class="notopen">
            <i class="iconfont icon-yule2" style="color: #ff4d4d"></i>
            <span><?php echo lang('社群娱乐'); ?></span>
        </a>
        <a href="###"  class="notopen">
            <i class="iconfont icon-xinwen" style="color: #82e0ff"></i>
            <span><?php echo lang('行业新闻'); ?></span>
        </a>
    </div>
</div>
<div class="footer-fan">
	<a href="<?php echo url('/mobile/index/index'); ?>">
		<i class="iconfont icon-shouye"></i>
		<p><?php echo lang('首页'); ?></p>
	</a>
	<a href="<?php echo url('/mobile/Digitalassets/index'); ?>">
		<i class="iconfont icon-money"></i>
		<p><?php echo lang('资产'); ?></p>
    </a>
    <a href="<?php echo url('/mobile/index/redpay'); ?>">
		<i class="iconfont icon-hongbao"></i>
		<p><?php echo lang('红包'); ?></p>
	</a>
	<a href="<?php echo url('/mobile/Shop/navigation'); ?>" class="active">
		<i class="iconfont icon-daohang"></i>
		<p><?php echo lang('导航'); ?></p>
	</a>
	<a href="<?php echo url('/mobile/user/index'); ?>">
		<i class="iconfont icon-jingjirenjinglikehuxianxingcopy"></i>
		<p><?php echo lang('我的'); ?></p>
    </a>
    <div class="shop_list">

    </div>
</div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script>
    $(".notopen").click(function(){
        msg_alert("<?php echo lang('该功能暂未开放，敬请期待'); ?>");
    });
</script>

</body>
</html>