<?php /*a:2:{s:73:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/index/turncords.html";i:1535541834;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    转出记录
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
</style>
   
</head>
<body>

    <div class="header">
	    <div class="header_l">
            <a href="<?php echo url('/mobile/Index/index'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
	    </div>
	    <div class="header_c"><h2><?php echo lang('转出记录'); ?></h2></div>
	    <div class="header_r"></div>
	</div>

    <div class="big_width100">
        <?php if($res==1): if(is_array($wallet) || $wallet instanceof \think\Collection || $wallet instanceof \think\Paginator): if( count($wallet)==0 ) : echo "" ;else: foreach($wallet as $key=>$row): ?>
        <div class="annal_ul">
            <div class="annal_ul_l">
                <img src="<?php echo htmlentities($row['head_img']); ?>" alt="">
                <div class="annal_p">
                    <p><?php echo htmlentities($row['name']); ?></p>
                    <p>UID:<?php echo htmlentities($row['second_people_id']); ?></p>
                </div>
            </div>
            <div class="annal_ul_r">
                <div class="annal_p">
                    <p class="zhuanrua">-<?php echo htmlentities($row['money']); ?></p>
                    <p><?php echo htmlentities($row['create_time']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; else: ?>
        <span style='color:#666;display: block;min-width:2rem;text-align:center;margin:1.5rem auto;'><?php echo lang('暂无转出记录'); ?></span>
        <?php endif; ?>
    </div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>


</body>
</html>