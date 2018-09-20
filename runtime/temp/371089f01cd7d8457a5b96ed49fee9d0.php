<?php /*a:2:{s:79:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/index/exchangerecords.html";i:1535421736;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    积分记录
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
        body{ background: #f5f5f5;margin-top: .92rem;}
        .yugejil1 {
            width: 100%;
            height: .8rem;
            background: #ddd;
            line-height: .8rem;
        }
        .yugejil1 p {
            float: left;
            width: 24.3%;
            font-size: .28rem;
            text-align: center;
            color: #000;
        }
        .p23 {
            line-height: .8rem;
        }
        #wrapper li p {
            float: left;
            width: 24.3%;
            font-size: .28rem;
            text-align: center;
            color: #000;
        }
    </style>
   
</head>
<body>

<div class="header">
    <div class="header_l">
            <a href="javascript:history.go(-1)"><img src="/static/mobile/images/jiant.png" alt=""></a>
        </div>
        <div class="header_c"><h2><?php echo lang('积分兑换记录'); ?></h2></div>
        <div class="header_r"></div>
    </div>
    <div>
        <div class="yugejil1">
            <p><?php echo lang('业务类型'); ?></p>
            <p><?php echo lang('数额'); ?></p>
            <p><?php echo lang('当前积分'); ?></p>
            <p><?php echo lang('时间'); ?></p>
        </div>
        <div id="wrapper">
            <div class="scroller">
                <ul>
                  <?php foreach($integral as $int): ?>
                    <li>    
                        <p style="line-height: .4rem;"><?php echo lang('积分兑换'); ?></p>
                        <p><?php echo htmlentities($int['num']); ?></p>
                        <p class="p23"><?php echo htmlentities($int['now_integral']); ?></p>
                        <p class="p24"><?php echo htmlentities($int['create_time']); ?></p>
                    </li>
                   <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

    <!--<script>-->
        <!--var myscroll = new iScroll("wrapper", {-->
            <!--onScrollMove: function () {-->
                <!--if (this.y < (this.maxScrollY)) {-->
                    <!--$('.pull_icon').addClass('flip');-->
                    <!--$('.pull_icon').removeClass('loading');-->
                <!--} else {-->
                    <!--$('.pull_icon').removeClass('flip loading');-->
                    <!--$('.more span').text('上拉加载...')-->
                <!--}-->
            <!--},-->
            <!--onScrollEnd: function () {-->
                <!--if ($('.pull_icon').hasClass('flip')) {-->
                    <!--$('.pull_icon').addClass('loading');-->
                    <!--$('.more span').text('加载中...');-->
                    <!--//加载P+1-->
                    <!--var pagen = Number($('.pagen').val());-->
                    <!--$('.pagen').val(pagen + 1);-->
                    <!--$('.more span').text('释放加载...');-->
                    <!--pullUpAction();-->
                <!--}-->
            <!--},-->
            <!--onRefresh: function () {-->
                <!--$('.more').removeClass('flip');-->
                <!--$('.more span').text('上拉加载...');-->
            <!--}-->
        <!--});-->
    <!---->
        <!--function pullUpAction() {-->
            <!--var p = Number($('.pagen').val());-->
            <!--var isover = $('.isover').val();-->
            <!--if(isover == 1){-->
                <!--return;-->
            <!--}-->
            <!--setTimeout(function () {-->
                <!--//是否已经没有数据了-->
                <!--$.ajax({-->
                    <!--url: '/Index/Outrecords',-->
                    <!--type: 'get',-->
                    <!--dataType: 'json',-->
                    <!--data: {'p': p},-->
                    <!--success: function (data) {-->
                        <!--var str = '';-->
                        <!--if (data.status == 1) {-->
                            <!--$.each(data.message, function (key, val) {-->
                                <!--str += '<li>';-->
                                <!--str += '<p >' +v.now_nums + '</p>';-->
                                <!--str += '<p >' +v.get_nums + '</p>';-->
                                <!--str += '<p class="p24">' +val.get_timeymd+ '</br>' +val.get_timedate+ '</p>';-->
                                <!--str += '</li>';-->
                            <!--})-->
                            <!--$('.scroller ul').append(str);-->
                            <!--myscroll.refresh();-->
                        <!--}else{-->
                            <!--var isover = $('.isover').val();-->
                            <!--if(isover == 0) {-->
                                <!--$('.isover').val(1);-->
                                <!--str += '<div class="annalWa">';-->
                                <!--str += '<p>暂无更多记录</p></div>';-->
                            <!--}-->
                            <!--$('.scroller ul').append(str);-->
                        <!--}-->
    <!---->
                    <!--},-->
                    <!--error: function () {-->
                        <!--//console.log('error');-->
                    <!--},-->
                <!--})-->
            <!--}, 1000)-->
        <!--}-->
        <!--if ($('.scroller').height() < $('#wrapper').height()) {-->
            <!--$('.more').hide();-->
            <!--myscroll.destroy();-->
        <!--}-->
<!--</script>-->

</body>
</html>