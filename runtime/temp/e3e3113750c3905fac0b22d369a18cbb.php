<?php /*a:2:{s:85:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/digitalassets/trade_records.html";i:1535541834;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
交易记录
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
    
    <link rel="stylesheet" href="/static/mobile/css/fanStyle.css"/>
   
</head>
<body>

<div class="header">
	<div class="header_l">
		<a href="<?php echo url('/mobile/Digitalassets/index'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
	</div>
	<div class="header_c"><h2><?php echo lang('交易记录'); ?></h2></div>
	<div class="header_r"></div>
</div>
<div class="big_width100">
<div class="big_records">
        <div class="undone_order">
            <div class="undone_order_titel clear_wl">
                <a style="width: 44%;" href="<?php echo url('/mobile/Digitalassets/trade_records',['type'=>1]); ?>" class="undone_OT_l fl <?php if($type==1): ?>noe<?php endif; ?>" >
                <?php echo lang('转出记录'); ?>
                </a>
                <a href="<?php echo url('/mobile/Digitalassets/trade_records',['type'=>2]); ?>" class="undone_OT_r fr <?php if($type==2): ?>noe<?php endif; ?>">
                <?php echo lang('转入记录'); ?>
                </a>
            </div>
        </div>
            
        <div id="wrapper">
            <div class="scrollera">
                <ul>
                    <?php if(count($list)>0): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                                <?php if($type==1): ?><p><?php echo lang('接收方'); ?>:<?php echo htmlentities($vo['otheruser']['nickname']); ?></p>
                                <?php else: ?><p><?php echo lang('转出方'); ?>：<?php echo htmlentities($vo['user']['nickname']); ?></p>
                                <?php endif; ?>
                                
                                <p class="dig_re_p"><?php echo lang('资产数量'); ?>：<?php echo htmlentities($vo['num']); ?><span>&nbsp;<?php echo htmlentities($vo['time']); ?></span></p>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </ul>
        
                <input type="hidden" value="1" class="pagen">
                <input type="hidden" value="0" class="isover">
                <div class="more"><i class="pull_icon"></i><span><?php echo lang('加载更多'); ?>...</span></div>
            </div>
        </div>
</div>
</div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script src="/static/mobile/js/iscroll.js"></script>
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
                    $('.more span').text('<?php echo lang("加载中"); ?>...');
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

        function pullUpAction(){
            var p = Number($('.pagen').val());
            var isover = $('.isover').val();
            if(isover == 1){
                return;
            }
            setTimeout(function () {
                //是否已经没有数据了
                $.ajax({
                    url: '/Turntable/Trans',
                    type: 'get',
                    dataType: 'json',
                    data: {'p': p},
                    success: function (data) {
                        var str = '';
                        if (data.status == 1) {
                            $.each(data.message, function (key, val) {
                                str += '<li>';
                                if(val.trtype == 1){
                                    str += '<p><?php echo lang("转出"); ?>&nbsp;' +val.get_nums+ '&nbsp;Wpaey<span>-108.2098</span></p>';
                                }else{
                                    str += '<p><?php echo lang("购买"); ?>&nbsp;' +val.get_nums+ '&nbsp;Wpaey<span>-108.2098</span></p>';
                                }
                                str += '<p class="dig_re_p">' +val.get_timeymd+val.get_timedate+ '<span>与&nbsp;' +val.outinfo+ '<?php echo lang("完成交易"); ?></span></p>';
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


        if ($('.scrollera').height()<$('#wrapper').height()) {
            $('.more').hide();
            myscroll.destroy();
        }
    $('.undone_order a').click(function(){
        $(this).addClass('noe').siblings().removeClass('noe')
    //   return false;  
    })
	</script>

</body>
</html>