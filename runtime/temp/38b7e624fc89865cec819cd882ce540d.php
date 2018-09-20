<?php /*a:2:{s:70:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/index/redpay.html";i:1535680616;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    红包
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
<style>
    .qindHB{padding-bottom: .92rem;}
    .qindHB_nb{height: 100%;}
    .qinb_imga{height: 100%; width: 100%;margin-top: 0;}
    .qiandHB_wz{top:8.3rem;}
	.footer-fan{z-index: 999;}
	.qiandHB_wz h3{border-bottom: none;}
	.qindfoot{background:#D5D5D5;width:100%;height:1rem;border-bottom: .02rem solid #f5f5f5;margin-top:0.78rem;}
	.qindfoot_proty{background:#071D48;width:30%;height:.6rem;line-height: .6rem;color:#F8F4ED;margin:0 auto;text-align:center;font-size: .4rem;letter-spacing:3px;}
	.bu_circleall{margin-top:-2.1rem;text-align: center;}
	.bu_circle{width: .8rem;height:.8rem;border-radius: 50%;border:.04rem solid #DBC46D;background:#000;z-index:999;display:inline-block;}
	.bu_circle img{width:100%;height:100%;background-size:100% 100%;border-radius:50%;}
	.bu_sign{display:block;font-size: .28rem;color:#fff;margin-top: .2rem;}
</style>
   
</head>
<body>

<div class="qindHB">
    <div class="qindHB_nb">
        <img src="/static/mobile/images/bg-img2.png" class="qinb_imga">
        <div class="qiandHB_wz">
            <h3><span class="getnums" id="target"><?php echo htmlentities($countmoney); ?></span></h3>
        </div>
		<div class="bu_circleall">
			<div class="bu_circle">
				<img id="bgl" src="<?php echo htmlentities($user['head_img']); ?>"/>
			</div>
			<span class="bu_sign">UID:&nbsp;<?php echo htmlentities($user['id']); ?></span>

		</div>
	</div>
	<div class="qindfoot">
		<div class="qindfoot_proty"><?php echo lang('账目明细'); ?></div>
	</div>
	<div>
		<div class="record_list flex">
			<a href="javascript:;" class="on"><span><?php echo lang('余额明细'); ?></span></a>
			<a href="javascript:;"><span><?php echo lang('积分明细'); ?></span></a>
		</div>
		<div>
			<div class="content_box">
				<div class="list_content active"  style="padding-bottom: 1rem">
					<div class="list_thred flex">
						<p><?php echo lang('类型'); ?></p>
						<p><?php echo lang('金额'); ?></p>
						<p><?php echo lang('当前余额'); ?></p>
						<p><?php echo lang('时间'); ?></p>
					</div>
					<ul class=" list_content1">
						<?php foreach($wallet as $key=>$vo): ?>
						<li>
							<p><?php echo lang($vo['type']); ?></p>
							<p><?php echo htmlentities($vo['money']); ?></p>
							<p><?php echo htmlentities($vo['now_wallet']); ?></p>
							<p><?php echo htmlentities($vo['create_time']); ?></p>
						</li>
						<?php endforeach; ?>
					</ul>
					<div class="addlist">
						<div class="load load1"><img src="/static/mobile/images/loading.gif" alt=""></div>
						<p id="add" class="addmore"><?php echo lang('点击加载更多'); ?></p>
						<!--<a>版权所有©朗金科技</a>-->
					</div>
				</div>
				<div class="list_content"  style="padding-bottom: 1rem">
					<div class="list_thred flex">
						<p><?php echo lang('类型'); ?></p>
						<p><?php echo lang('金额'); ?></p>
						<p><?php echo lang('当前积分'); ?></p>
						<p><?php echo lang('时间'); ?></p>
					</div>
					<ul class=" list_content2">
						<?php foreach($integral as $key=>$vo): ?>
						<li>
							<p><?php echo lang($vo['type']); ?></p>
							<p><?php echo htmlentities($vo['num']); ?></p>
							<p><?php echo htmlentities($vo['now_integral']); ?></p>
							<p><?php echo htmlentities($vo['create_time']); ?></p>
						</li>
						<?php endforeach; ?> 
					</ul>
					<div class="addlist">
						<div class="load load2"><img src="/static/mobile/images/loading.gif" alt=""></div>
						<p id="add2" class="addmore"><?php echo lang('点击加载更多'); ?></p>
					</div>
				</div>
			</div>
		</div>
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
	<a href="<?php echo url('/mobile/index/redpay'); ?>" class="active">
		<i class="iconfont icon-hongbao"></i>
		<p><?php echo lang('红包'); ?></p>
	</a>
	<a href="<?php echo url('/mobile/Shop/navigation'); ?>">
		<i class="iconfont icon-daohang"></i>
		<p><?php echo lang('导航'); ?></p>
	</a>
	<a href="<?php echo url('/mobile/user/index'); ?>">
		<i class="iconfont icon-jingjirenjinglikehuxianxingcopy"></i>
		<p><?php echo lang('我的'); ?></p>
	</a>
</div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script type="text/javascript" src="/static/mobile/js/jquery.animateNumber.min.js"></script>
<script>
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
			if(data.type==1){
				$('.money-pag').hide();
                window.location.reload();
			}else if(data.type==2){
                $('.money-pag').hide();
			}else{
				$('.money-pag').show();
			}
		})
	})
	$(".record_list>a").click(function(){
		var n = $(".record_list>a").index($(this));
		$(this).addClass('on').siblings().removeClass('on');
		$(".content_box>div").removeClass('active').eq(n).addClass('active');
	});
});
    var page = 1;
    var page2 = 1;
	$("#add").on("click",function () {
		var that = this;
		$(".load1").show();
		$(that).hide();
        page++;
        $.ajax({
            type: 'POST',
            url: '/mobile/Index/wallet',
            data: {page: page},
            dataType: 'json',
            success: function (data) {
				$(".load1").hide();
		        $(that).show();
                var str = "";
                if (data.status == 1) {
                    $.each(data.data,function (key,value) {
                        str += '<li><p>'+value.type+'</p>';
                        str += '<p>'+value.money+'</p>';
                        str += '<p>'+value.now_wallet+'</p>';
                        str += '<p>'+value.create_time+'</p></li>';
                    });
                    $(".list_content1").append(str);
                } else {
                    $(that).html("<?php echo lang('没有更多记录了'); ?>...");
                }
            }
        })
    });
	//选项卡
    $("#add2").on("click",function () {
		var that = this;
		$(".load2").show();
		$(that).hide();
        page2++;
        $.ajax({
            type: 'POST',
            url: '/mobile/Index/integral',
            data: {page: page2},
            dataType: 'json',
            success: function (data) {
				$(".load2").hide();
		        $(that).show();
                var str = "";
                if (data.status == 1) {
                    $.each(data.data,function (key,value) {
                        str += '<li><p>'+value.type+'</p>';
                        str += '<p>'+value.num+'</p>';
                        str += '<p>'+value.now_integral+'</p>';
                        str += '<p>'+value.create_time+'</p></li>';
                    });
                    $(".list_content2").append(str);
                } else {
					$(that).html("<?php echo lang('没有更多记录了'); ?>...");
                }
            }
        })
    })

	// 数字滚动
	var decimal_places = 4;
	var decimal_factor = decimal_places === 0 ? 1 : decimal_places * 100;

	$('#target').animateNumber(
		{
		number: <?php echo htmlentities($countmoney); ?> * decimal_factor,
		numberStep: function(now, tween) {
			var floored_number = Math.floor(now) / decimal_factor,
				target = $(tween.elem);
			if (decimal_places > 0) {
			floored_number = floored_number.toFixed(decimal_places);
			}

			target.text(floored_number);
		}
		},
		2000
	)
</script>

</body>
</html>