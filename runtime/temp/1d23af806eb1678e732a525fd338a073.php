<?php /*a:2:{s:78:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/crowd/crowds_records.html";i:1535784228;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    众筹项目记录
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
<link rel="stylesheet" href="/static/mobile/css/meCen.css"/>
<link rel="stylesheet" href="/static/mobile/js/layui/css/layui.css"/>
   
</head>
<body>

	<div class="header">
	    <div class="header_l">
	    <a href="javascript:history.back(-1);"><img src="/static/mobile/images/jiant.png" alt=""></a>
	    </div>
	    <div class="header_c"><h2><?php echo lang('众筹项目记录'); ?></h2></div>
	    <div class="header_r"></div>
	</div>
       <div class="big_width100">
           <div class="big_crowds">
                    <div class="zwshj">
                        <div class="yugejil"  style="width: 100%;" >
                                <p style="width:20%;"><?php echo lang('名称'); ?></p>
                                <p style="width:20%;"><?php echo lang('数量'); ?></p>
                                <p style="width:20%;"><?php echo lang('总价'); ?></p>
                                <p style="width:40%;"><?php echo lang('时间'); ?></p>
                        </div>
                        <div id="wrapper1" style="width: 100%;" >
                            <?php foreach($list as $k=>$vo): ?>
                            <div class="scroller">
                                <ul>    
                                    <li>
                                        <p style="width:20%;"><?php echo htmlentities($vo['name']); ?></p>
                                        <p style="width:20%;"><?php echo htmlentities($vo['num']); ?></p>
                                        <p style="width:20%;"><?php echo htmlentities($vo['money']); ?></p>
                                        <p style="width:40%;"><?php echo htmlentities(date('Y-m-d H:i',!is_numeric($vo['create_time'])? strtotime($vo['create_time']) : $vo['create_time'])); ?></p>
                                    </li>
                                </ul>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
           </div>
	   </div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>


</body>
</html>