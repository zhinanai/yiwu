<?php /*a:2:{s:75:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/growth/buyrecords.html";i:1537420366;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    买入记录
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
    #wrapper li{box-sizing: content-box;background: #fff;}
</style>
   
</head>
<body>

    <div class="header">
        <div class="header_l">
            <a href="<?php echo url('/mobile/Growth/buycenter'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
        </div>
        <div class="header_c"><h2><?php echo lang("买入记录"); ?></h2></div>
        <div class="header_r"></div>
    </div>
    <div>
            <div class="yugejil">
                <p><?php echo lang("卖出帐号"); ?></p>
                <p><?php echo lang("买入金额"); ?></p>
                <p><?php echo lang('买入时间'); ?></p>
            </div>        
            <div id="wrapper">
                <ul>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
                            <li>
                                <p><eq name="v.sell_id" value="0"><else/>(<?php echo htmlentities($v['users_nickname']); ?>)</eq></p>
                                <p><?php echo htmlentities($v['money']); ?></p>
                                <?php if($v['status'] == 0): ?>
                                <p class="p24">等待交易</br></p>
                                <?php elseif($v['status'] == 3): ?>
                                <p class="p24">交易失败</br></p>
                                <?php else: ?>
                                <p class="p24"><?php echo htmlentities($v['update_time']); ?></br></p>
                                <?php endif; ?>
                            </li>
                     <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>        
                <div class="scroller" style="overflow: hidden;">
                    <input type="hidden" value="1" class="pagen">
                    <input type="hidden" value="0" class="isover">
                    <div class="more" style="display: none">
                        <i class="pull_icon"></i>
                        <span><?php echo lang("上拉加载"); ?>...</span>
                    </div>
                </div>
            </div>
        </div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script>
        var myscroll = new iScroll("wrapper", {
            onScrollMove: function () {
                if (this.y < (this.maxScrollY)) {
                    $('.pull_icon').addClass('flip');
                    $('.pull_icon').removeClass('loading');
                } else {
                    $('.pull_icon').removeClass('flip loading');
                    $('.more span').text('<?php echo lang("上拉加载"); ?>...')
                }
            },
            onScrollEnd: function () {
                if ($('.pull_icon').hasClass('flip')) {
                    $('.pull_icon').addClass('loading');
                    $('.more span').text('加载中...');
                    //加载P+1
                    var pagen = Number($('.pagen').val());
                    $('.pagen').val(pagen + 1);
                    $('.more span').text('<?php echo lang("释放加载"); ?>...');
                    pullUpAction();
                }
            },
            onRefresh: function () {
                $('.more').removeClass('flip');
                $('.more span').text('<?php echo lang("上拉加载"); ?>...');
            }
        });
    
        function pullUpAction() {
            var p = Number($('.pagen').val());
            var isover = $('.isover').val();
            if(isover == 1){
                return;
            }
            setTimeout(function () {
                //是否已经没有数据了
                $.ajax({
                    url: '/Index/Outrecords',
                    type: 'get',
                    dataType: 'json',
                    data: {'p': p},
                    success: function (data) {
                        var str = '';
                        if (data.status == 1) {
                            $.each(data.message, function (key, val) {
    
                                str += '<li>';
                                if (val.trtype == 1) {
                                    str += '<p> <?php echo lang("转入"); ?> </p>';
                                    str += '<p>-' +val.get_nums+ '</p>';
                                } else {
                                    str += '<p><?php echo lang("转出"); ?></p>';
                                    str += '<p>+' +val.get_nums+ '</p>';
                                }
                                str += '<p class="p24">' +val.get_timeymd+ '</br>' +val.get_timedate+ '</p>';
                                str += '</li>';
                            })
                            $('.scroller ul').append(str);
                            myscroll.refresh();
                        }else{
                            var isover = $('.isover').val();
                            if(isover == 0) {
                                $('.isover').val(1);
                                str += '<div class="annalWa">';
                                str += '<p><?php echo lang("暂无更多记录"); ?></p></div>';
                            }
                            $('.scroller ul').append(str);
                        }
    
                    },
                    error: function () {
                        //console.log('error');
                    },
                })
            }, 1000)
        }
    
        if ($('.scroller').height() < $('#wrapper').height()) {
            $('.more').hide();
            myscroll.destroy();
        }
    </script>

</body>
</html>