<?php /*a:2:{s:67:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/user/news.html";i:1535420122;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>公告</title>
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
body{background: #f5f5f5;}
</style>
   
</head>
<body>

<div class="header">
    <div class="header_l">
        <a href="javascript:history.go(-1)"><img src="/static/mobile/images/jiant.png" alt=""></a>
    </div>
    <div class="header_c">
        <h2><?php echo lang('公告'); ?></h2>
    </div>
    <div class="header_r"></div>
</div>
<div class="big_width100">
    <ul class="genggao">
      <?php foreach($notices as $notice): ?>
        <li>
            <a href="<?php echo url('/mobile/User/newsdetail',['id'=>$notice['id']]); ?>" >
                <div class="gonggao_l">
                    <h2><strong style="width:100%; white-space: nowrap;overflow: hidden;text-overflow:ellipsis;"><?php echo htmlentities($notice['title']); ?></strong> <span></span></h2>
                    <p><?php echo htmlentities($notice['read']); ?></p>
                </div>
            </a>
        </li>
       <?php endforeach; ?>
    </ul>
</div>


   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>


</body>
</html>