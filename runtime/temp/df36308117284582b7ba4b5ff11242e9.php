<?php /*a:2:{s:68:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/shop/index.html";i:1535421736;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    商城首页
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
    
<link rel="stylesheet" href="/static/mobile/css/wenStyle.css"/>
<link rel="stylesheet" href="/static/mobile/css/shop.css">
   
</head>
<body>

<iframe id="geoPage" width=0 height=0 frameborder=0  style="display:none;" scrolling="no"
    src="https://apis.map.qq.com/tools/geolocation?key=OB4BZ-D4W3U-B7VVO-4PJWW-6TKDJ-WPB77&referer=myapp">
</iframe>
<!-- 头部 -->
<div class="fxm_header">
    <div class="fxm_left">
        <a href="<?php echo url('/mobile/index/index'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
    </div>
    <div class="fxm_center"><?php echo lang('商城首页'); ?></div>
</div>
<!-- 轮播图 -->
<div class="swiper-container myimg">
    <div class="swiper-wrapper imgbox">
        <div class="swiper-slide"><img src="/static/mobile/images/banner-1.png"></div>
        <div class="swiper-slide"><img src="/static/mobile/images/banner-2.png"></div>
        <div class="swiper-slide"><img src="/static/mobile/images/banner-3.png"></div>
    </div>
    <div class="swiper-pagination"></div>
</div> 
<!-- 商品分类 -->
<div class="fenlei_bg clearfix">
    <div class="dp_fenlei">
        <ul class="w_shang">
            <?php foreach($shopType as $key=>$vo): ?>
            <li><a href="<?php echo url('/mobile/shop/search',['id'=>$vo['typeid']]); ?>"><img style="width: 46px;height: 46px" src="<?php echo htmlentities($vo['image']); ?>"><?php echo htmlentities($vo['type_name']); ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<!-- 商品图片 -->
<div class="w_shoptp">
    <div class="w_shoptpleft">
        <a href="<?php echo url('/mobile/shop/search'); ?>"><img src="/static/mobile/images/1.png"></a>
    </div>
    <div class="w_shoptpright">
        <div class="w_shoptprtop">
            <a href="<?php echo url('/mobile/shop/search'); ?>"><img src="/static/mobile/images/2.png"></a>
        </div>
        <div class="w_shoptprbottom">
            <div class="w_leftxiao">
                <a href="<?php echo url('/mobile/shop/search'); ?>"><img src="/static/mobile/images/3.png"></a>
            </div>
            <div class="w_rightxiao">
                <a href="<?php echo url('/mobile/shop/search'); ?>"><img src="/static/mobile/images/4.png"></a>
            </div>
        </div>
    </div>
</div>
 <!-- 推荐商家 -->
<div class="w_tuijian">
    
</div>
<!-- 底部 -->
<!-- <div class="footer-fan">
    <a href="<?php echo url('/mobile/index/index'); ?>">
        <i class="iconfont icon-shouye"></i>
        <p><?php echo lang('首页'); ?></p>
    </a>
    <a href="<?php echo url('/mobile/Digitalassets/index'); ?>">
        <i class="iconfont icon-money"></i>
        <p><?php echo lang('资产'); ?></p>
    </a>
    <a href="<?php echo url('/mobile/Shop/index'); ?>" class="active">
        <i class="iconfont icon-shangcheng"></i>
        <p><?php echo lang('商城'); ?></p>
    </a>
    <a href="<?php echo url('/mobile/user/index'); ?>">
        <i class="iconfont icon-jingjirenjinglikehuxianxingcopy"></i>
        <p><?php echo lang('我的'); ?></p>
    </a>
</div> -->


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script type="text/javascript" src="/static/mobile/js/swiper.min.js"></script>
<script>
    // 轮播图
    var mySwiper = new Swiper(".swiper-container",{
    direction:"horizontal",
    loop:true,
    pagination:".swiper-pagination",
    autoplay:3000,
    autoplayDisableOnInteraction : false,
    });
$(function () {
    $.get("<?php echo url('/mobile/login/hongbao'); ?>",function(res){
        var data = eval('(' + res + ')');
        if(data[0].hongbao=='1'){
            $('.money-pag').hide();
        }else{
            $('.money-pag').show();
            $('.getnums').html(data[0].money)
        } 
    })
    $('#hide').click(function () {
        $.get("<?php echo url('/mobile/login/linghongbao'); ?>",function(res){
            var data=eval('(' + res + ')');
            //console.log(data.type)
            if(data.type==1){
                $('.money-pag').hide();
                window.location.reload();
            }else{
                $('.money-pag').show();
            }
        })
    })
})
</script>
<script type="text/javascript" src="/static/mobile/js/swiper.min.js"></script>
<script>
    window.addEventListener('message', function(event) {
        // 接收位置信息
        var loc = event.data
            ,storage = window.localStorage;
        if (loc != null) {
            var city = loc.city
            ,lat = loc.lat
            ,lng = loc.lng
            $.ajax({
            url: '/mobile/shop/index'
            ,type: 'GET'
            ,data: {city: city, lat: lat, lng: lng}
            ,success: function(res) {
                $('.w_tuijian').html(res);
            }
        });
        }
}, false);
</script>

</body>
</html>