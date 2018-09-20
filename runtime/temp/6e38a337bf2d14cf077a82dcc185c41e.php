<?php /*a:2:{s:69:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/index/index.html";i:1536921499;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
	首页
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
	body{ text-align: left;background: #f5f5f5;}
   .big_width100{background: #f5f5f5;margin: 0;}
   .iconfont{font-size: 1rem;}
   .language{padding: .3rem;}
   #hide{position: relative;}
	.w_cunruyue{position: absolute;top: 0;width: 50%;left: 25%;text-align: center;font-size: .5rem;color: #d92d2d;line-height: .8rem;font-weight: 600;letter-spacing: 10px;}
	.record_list{background: #f5f5f5;}
	.record_list img{width: 100%;height: .9rem;}
	.cen_icon {width: 100%;margin-top: .25rem;overflow: hidden;background: #fff;}
	.cen_icon ul li {background: #fff;width: 33.333%;float: left;padding: .3rem 0;border-bottom: 1px solid #efefef;border-right: 1px solid #efefef;box-sizing: border-box;}
	.cen_icon ul li a {width: 100%;display: block;}
	.cen_icon ul li img {width: 30%;display: block;margin: 0 auto;}
	.cen_icon ul li p {color: #000;text-align: center;font-size: .32rem;margin-top: .1rem;}
</style>
   
</head>
<body>

<div class="big_width100">
    <div>
		<div class="wen-header">
			 <div class="language">
		       <div class="yuyan">
		        <select class='btn'>
		            <option value='cn' <?php if($lang=='zh-cn'): ?> selected="selected" <?php endif; ?>>中</option>
		            <option value='en' <?php if($lang=='en-us'): ?> selected="selected" <?php endif; ?>>ENG</option>
		            <option value='vi' <?php if($lang=='vi'): ?> selected="selected" <?php endif; ?>>Tiếng Việt</option>
		        </select>
		       </div>
		    </div>

			<div class="header-info">
				<a onclick="scan()" class="shaom">
					<i class="iconfont icon-saoyisao"></i>
					<p><?php echo lang('扫一扫'); ?></p>
				</a>
			</div>
			<ul class="header-money flex">
                <li>
					<a href="javascript:;">
						<p><?php echo lang('余额'); ?></p>
						<span><?php echo htmlentities($money['wallet_num']); ?></span>
					</a>
				</li>
				<li class="center">
					<a href="javascript:;">
						<p><?php echo htmlentities($user['nickname']); ?></p>
						<span>UID:<?php echo htmlentities($user['id']); ?></span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<p><?php echo lang('积分'); ?></p>
						<span><?php echo htmlentities($money['integral_num']); ?></span>
					</a>
				</li>
			</ul>
			<!-- <ul class="header-btn flex">
				<li>
					<a href="<?php echo url('/mobile/growth/intro'); ?>">
						<i class="iconfont icon-erweima"></i>
						<p><?php echo lang('收款码'); ?></p>
					</a>
				</li>
				<li>
					<a href="<?php echo url('/mobile/index/turnout'); ?>">
						<i class="iconfont icon-zhuanzhang"></i>
						<p><?php echo lang('转账'); ?></p>
					</a>
				</li>
				<li> -->
					<!-- <a href="<?php echo url('/mobile/Growth/buycenter'); ?>">
						<i class="iconfont icon-jiaoyi"></i>
						<p><?php echo lang('交易'); ?></p>
					</a> -->
					<!-- <a href="<?php echo url('/mobile/Growth/buycenter'); ?>">
						<i class="iconfont icon-jiaoyi"></i>
						<p><?php echo lang('买卖'); ?></p>
					</a>

				</li> -->
				<!-- <li>
				    <a onclick="BSL.Qcode('0','qrcodeCallback')" class="shaom">
					<i class="iconfont icon-saoyisao"></i>
					<p><?php echo lang('扫一扫'); ?></p>
				   </a> 
				    <a href="<?php echo url('/mobile/Trading/selldets'); ?>">
						<i class="iconfont icon-jiaoyi"></i>
						<p><?php echo lang('卖出'); ?></p>
					</a>
				</li> -->
			<!-- </ul> -->
			 
		</div>
	</div>
	<div class="swiper-container myimg">
		<div class="swiper-wrapper imgbox">
			<?php foreach($imgs as $img): ?>
			<div class="swiper-slide"><img src="<?php echo htmlentities($img['img']); ?>"></div>
			<?php endforeach; ?>
		</div>
		<div class="swiper-pagination"></div>
	</div> 
	<!-- <div>
		<div class="record_list flex">
			<img src="/static/mobile/images/redpaytime.png">
		</div>
		<div>
			<div class="content_box">
				<div class="list_content active"  style="padding-bottom: 1rem">
					<div class="list_thred flex">
						<p><?php echo lang('类型'); ?></p>
						<p><?php echo lang('签到'); ?></p>
						<p><?php echo lang('总金额'); ?></p>
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
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="cen_icon">
        <ul>
            <li>
                <a href="<?php echo url('/mobile/index/turnout'); ?>">
                    <img src="/static/mobile/images/cen01-iocn.png">
                    <p><?php echo lang('转出'); ?></p>
                </a>
            </li>
            <li>
                <a href="<?php echo url('/mobile/growth/intro'); ?>">
                    <img src="/static/mobile/images/cen02-iocn.png">
                    <p><?php echo lang('转入'); ?></p>
                </a>
            </li>
            <li>
                <a href="<?php echo url('/mobile/Growth/buycenter'); ?>">
                    <img src="/static/mobile/images/cen03-iocn.png">
                    <p><?php echo lang('买入'); ?></p>
                </a>
            </li>
          	<li>
                <a href="<?php echo url('/mobile/Trading/selldets'); ?>">
                    <img src="/static/mobile/images/cen04-iocn.png">
                    <p><?php echo lang('卖出'); ?></p>
                </a>
            </li>
          <!--
            <li class="notopen">
                <a href="<?php echo url('/mobile/Trading/selldets'); ?>">
                    <img src="/static/mobile/images/cen04-iocn.png">
                    <p><?php echo lang('卖出'); ?></p>
                </a>
            </li>
		-->
            <li>
                <a href="<?php echo url('/mobile/Digitalassets/index'); ?>">
                    <img src="/static/mobile/images/cen05-iocn.png">
                    <p><?php echo lang('数字资产'); ?></p>
                </a>
            </li>
            <li>
                <a href="<?php echo url('/mobile/shop/index'); ?>">
                    <img src="/static/mobile/images/cen07-iocn.png">
                    <p><?php echo lang('商城'); ?></p>
                </a>
            </li>
            <li>
                <a href="<?php echo url('/mobile/User/Sharecode'); ?>">
                    <img src="/static/mobile/images/cen12-iocn.png">
                    <p><?php echo lang('分享'); ?></p>
                </a>
            </li>

            <li>
                <a href="<?php echo url('/mobile/Index/exehange'); ?>">
                    <img src="/static/mobile/images/cen11-iocn.png">
                    <p><?php echo lang('积分兑换'); ?></p>
                </a>
            </li>
            <li>
                <a href="<?php echo url('/mobile/User/sellers'); ?>">
                    <img src="/static/mobile/images/cen10-iocn.png">
                    <p><?php echo lang('商家入驻'); ?></p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div style="height: .92rem;"></div>
<div class="footer-fan">
	<a href="<?php echo url('/mobile/index/index'); ?>" class="active">
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
	<a href="<?php echo url('/mobile/Shop/navigation'); ?>">
		<i class="iconfont icon-daohang"></i>
		<p><?php echo lang('导航'); ?></p>
	</a>
	<a href="<?php echo url('/mobile/user/index'); ?>">
		<i class="iconfont icon-jingjirenjinglikehuxianxingcopy"></i>
		<p><?php echo lang('我的'); ?></p>
	</a>
</div>
<div class="money-pag" style="display: none;">
	<div class="qindHB_bg"></div>

	<div class="qindHB">
		<div class="qindHB_nb">
			<img src="/static/mobile/images/hongbaoyem.png" class="qinb_imga">
			<a href="javascript:void(0);" id="hide">
				<img src="/static/mobile/images/cunryue.png">
			</a>
			<div class="qiandHB_wz">
				<h3><span class="getnums">0.15</span></h3>
				<!-- <p><?php echo lang('天天签到红包不断'); ?></p> -->
			</div>
		</div>
	</div>
</div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script type="text/javascript" src="/static/mobile/js/swiper.min.js"></script>
<script>
	$(".notopen").click(function(){
		msg_alert("<?php echo lang('该功能暂未开放，敬请期待'); ?>");
      return false;
	});
//语言
    $('.btn').change(function(){
        var data={'lang':$('.btn').val()}
        console.log(data);
        $.get("<?php echo url('mobile/Login/lang'); ?>",data,function(){
            location.reload();
        })
    })
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
	// 选项卡
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
            url: '/mobile/Index/redwallet',
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
</script>
<!--扫一扫调用-->
<script>
    function scan(){
		window.location.href="saoyisao://abcd";
	}
</script>

</body>
</html>