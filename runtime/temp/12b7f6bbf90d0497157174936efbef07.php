<?php /*a:2:{s:73:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/user/newsdetail.html";i:1535420122;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
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
   
</head>
<body>

<div class="header">
    <div class="header_l">
        <a href="javascript:history.go(-1)"><img src="/static/mobile/images/jiant.png" alt=""></a>
    </div>
    <div class="header_c">
        <h2>公告</h2>
    </div>
    <div class="header_r"></div>
</div>
<div class="big_width100">
    <div class="AnnouncementDetails clear_wl">
        <h2 class="annDe_h2"><?php echo htmlentities($notice['title']); ?></h2>
        <div class="AnnouncementDetails_de">
            <p>  
			<?php echo $notice['content']; ?>
            </p>
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