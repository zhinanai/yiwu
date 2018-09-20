<?php /*a:2:{s:71:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/user/teamdets.html";i:1535609480;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    分享记录
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
    .zySearch .search-input{background: #fff;color: #000;}
    .share_ul{box-sizing: content-box;}
    .header_l{width: 15%;}
    .header_r{font-size: .24rem;line-height: 1rem;width: 34%;}
    .header_c{width: 51%;}
</style>
   
</head>
<body>

    <div class="header">
        <div class="header_l">
            <a href="javascript:history.go(-1)"><img src="/static/mobile/images/jiant.png" alt=""></a>
        </div>
        <div class="header_c"><h2><?php echo lang('分享记录'); ?></h2></div>
        <div class="header_r"><?php echo lang('团队总人数'); ?>:<?php echo htmlentities($team); ?></div>
    </div>

    <div class="big_width100 por">
    
        <form action="<?php echo url('/mobile/User/Teamdets'); ?>" method="post">
            <div class="zySearch">
                <input id="searchInput" name="uinfo" class="search-input" value="" type="text" placeholder="<?php echo lang('搜索UID/手机号码'); ?>">
                <button class="search-btn btn"><?php echo lang('搜索'); ?></button>
            </div>
        </form>
        <?php foreach($users as $user): ?>
        <div class="share_ul">
            <div class="share_ul_l">
                <img src="<?php echo htmlentities($user['head_img']); ?>" alt="">
                <div class="share_p">
                    <p><?php echo htmlentities($user['nickname']); ?></p>
                    <p>UID:<?php echo htmlentities($user['id']); ?></p>
                    <p><?php echo lang('电话'); ?>:<?php echo htmlentities($user['mobile']); ?></p>

                </div>
            </div>
            <?php if($user['user_grade']==0): ?><div class="dengjxias"><?php echo lang('普通会员'); ?>
            </div>
            <?php else: ?> <div class="dengjxias" style="background:red;">VIP
            </div>
            <?php endif; ?>
            
        </div>
         <?php endforeach; ?>
      
    </div>




   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>


</body>
</html>