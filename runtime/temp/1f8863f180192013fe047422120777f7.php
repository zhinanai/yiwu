<?php /*a:2:{s:70:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/crowd/crowds.html";i:1535790610;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    众筹项目中心--预热中
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
<link rel="stylesheet" href="/static/mobile/js/layui/css/layui.css"/>
<style>
	.layui-progress-big, .layui-progress-big .layui-progress-bar{
		padding: 0 .05rem;
		border-radius: .4rem;
	}

</style>
   
</head>
<body>

	<div class="header">
	    <div class="header_l">
	    <a href="<?php echo url('/mobile/Digitalassets/index'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
	    </div>
	    <div class="header_c"><h2><?php echo lang('众筹项目中心'); ?></h2></div>
	    <div class="header_r"><a href="<?php echo url('/mobile/Crowd/crowds_records'); ?>"><?php echo lang('记录'); ?></a></div>
	</div>

       <div class="big_width100">
            <div class="big_crowds">
				<div class="zy_topul">           	
					<ul class="clear_wl">
						<li>
							<a href="<?php echo url('/mobile/Crowd/crowds'); ?>">
								<img src="/static/mobile/images/zc0-iocn.png" alt="">
								<p class="nop"><?php echo lang('预热中'); ?></p>
							</a>
							<div class="nj"></div>
						</li>
						<li>
							<a href="<?php echo url('/mobile/Crowd/crowds',array('step'=>1)); ?>">
								<img src="/static/mobile/images/zc1-iocn.png" alt="">
								<p><?php echo lang('进行中'); ?></p>
							</a>
							<div class="nj"></div>
						</li>
						<li>
							<a href="<?php echo url('/mobile/Crowd/crowds',array('step'=>2)); ?>">
								<img src="/static/mobile/images/zc2-iocn.png" alt="">
								<p><?php echo lang('已结束'); ?></p>
							</a>
							<div class="nj"></div>
						</li>
					</ul>
				</div>
				<?php if($page == 1): foreach($list as $key=>$vo): ?>
				<div class="zcweikais">
					<div class="zcweikais_top clear_wl">
						<img src="/static/mobile/images/zhongctub.png" class="zcimg">
						<div class="zcweikais_topwz">
							<h3><?php echo htmlentities($vo['name']); ?></h3>
							<p class="zcxwz"><span><?php echo lang('每个ID限购'); ?><?php echo htmlentities($vo['limit']); ?>枚</span><?php echo lang('释放比例'); ?>：100.00%</p>
							<p><?php echo lang('接收币种'); ?>：<span><?php echo lang('余额'); ?></span></p>
						</div>
						<div class="zcwksshij">
							<img src="/static/mobile/images/naozz.png"><?php echo date("Y-m-d",$vo["start_time"]) ?>
						</div>
					</div>
					<div class="zcweikais_mid clear_wl">
						<ul>
							<li class="zcweikais_mid_lia"><p><?php echo lang('众筹数量'); ?><br/><span><?php echo htmlentities($vo['nums']); ?></span></p></li>
							<li class="zcweikais_mid_lib"><p><?php echo lang('价格'); ?><br/><span>1 易物币=<?php echo htmlentities($vo['price']); ?>(<?php echo lang('余额'); ?>)</span></p></li>
							<li class="zcweikais_mid_lic"><p><?php echo lang('开启时间'); ?><br/><span class="hse"><?php echo date("Y-m-d",$vo["start_time"]) ?></span></p></li>
						</ul>
	
					</div>
					<div class="zcweikais_bottom clear_wl">
						<div class="zcweikais_bottom_jdzb">
							 <div class="layui-progress layui-progress-big " lay-showPercent="true">
							</div>
						</div>
						<a href="javascript:;" class="zcweikais_bottom_jdzb_a"><?php echo lang('暂未开启'); ?></a>
	
	
					</div>
				</div>
                <?php endforeach; else: ?>
				<span style='color:#666;display: block;min-width:3rem;text-align:center;margin:1rem auto;'><?php echo lang('没找到相关记录'); ?></span>
				<?php endif; ?>
			</div>
	   </div>
    

   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

	<script src="/static/mobile/js/layui/layui.js"></script>
	<script>
		//注意进度条依赖 element 模块，否则无法进行正常渲染和功能性操作
		layui.use('element', function(){
		  var element = layui.element;
		});

	</script>
    
</body>
</html>