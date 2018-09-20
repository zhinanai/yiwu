<?php /*a:2:{s:72:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/growth/dofinsh.html";i:1535011708;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 已完成订单 </title>
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
    .pagination div span {
        padding: 0 0.3rem;
    }
</style>
   
</head>
<body>

<div class="header">
    <div class="header_l">
        <a href="<?php echo url('/mobile/Growth/buycenter'); ?>">
            <img src="/static/mobile/images/jiant.png" alt="">
        </a>
    </div>
    <div class="header_c">
        <h2><?php echo lang('已完成订单'); ?></h2>
    </div>
    <div class="header_r"></div>
</div>

<div class="demo">
    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
    <ul class="pagination">
        <div style="margin-top:1.2rem;text-align: center;color: #999">
            <span class="rows"><?php echo lang('没有相关记录'); ?></span>
        </div>
    </ul>
    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
    <div class="accordion">
        <div class="accordion-handle">
            <h4>
                <p class="accmrp"><?php echo lang('买入金额'); ?>：<?php echo htmlentities($v['money']); ?>RMB
                    <span class="acco_con_span"><?php echo lang('已完成'); ?></span>
                </p>
                <p><?php echo htmlentities($v['update_time']); ?>
                    <span><?php echo lang('收款人'); ?>：<?php echo htmlentities($v['users']['nickname']); ?></span>
                </p>
            </h4>
            <i></i>
        </div>
        <div class="accordion-content por">
            <div class="acco_con_up">
                <p><?php echo lang('收款人姓名'); ?>：
                    <span> <?php echo htmlentities($v['user_nickname']); ?></span>
                </p>
                <p><?php echo lang('手机号码'); ?>：
                    <span><?php echo htmlentities($v['user']['mobile']); ?></span>
                </p>
                <p><?php echo lang('开户银行'); ?>：
                    <span><?php echo htmlentities($v['bandcard_name']); ?></span>
                </p>
                <p><?php echo lang('银行卡号'); ?>：
                    <span><?php echo htmlentities($v['bandcard_cardnumber']); ?></span>
                </p>
                <p><?php echo lang('开户支行'); ?>：
                    <span><?php echo htmlentities($v['bandcard']['account_opening_branch']); ?></span>
                </p>
                <p><?php echo lang('交易金额'); ?>：
                    <span><?php echo htmlentities($v['money']); ?>RMB</span>
                </p>
                <p><?php echo lang('状态'); ?>：
                    <span class="acco_con_spana">
                        <?php echo lang('已完成'); ?> </span>
                </p>
            </div>
            <div class="acco_con_upa">
                <h3><?php echo lang('打款截图'); ?></h3>
                <div class="shangcjt">
                    <div class="containera">
                        <a href="/mobile/Growth/paidimg?id=<?php echo htmlentities($v['id']); ?>">
                            <img src="<?php echo htmlentities($v['pic']); ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>


    <!-- <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
        <span>暂无任何记录</span>
    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
            <div class="accordion-handle">
                <h4>
                    <p class="accmrp"><?php echo htmlentities($v['money']); ?>RMB<span class="acco_con_span"></span></p>
                    <p>交易时间<span><?php echo htmlentities($v['create_time']); ?></span></p>
                </h4>
                <i></i>
            </div>
            <div class="accordion-content por">
                <div class="acco_con_up">
                    <p>：<span> </span></p>
                    <p>：<span></span></p>
                    <p>：<span></span></p>
                    <p>：<span></span></p>
                    <p>：<span></span></p>
                    <p>：<?php echo htmlentities($v['money']); ?><span>RMB</span></p>
                    <p>：<span class="acco_con_span"></span></p>
                </div>
                <div class="acco_con_upa">
                    <h3></h3>
                    <div class="shangcjt">
                        <div class="containera">
                            <a href=""><img src=""  ></a>
                        </div>
                    </div>
                </div>
            </div>
    <?php endforeach; endif; else: echo "" ;endif; endif; ?> -->
    

   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

    <script type="text/javascript" src="/static/mobile/js/responsive.tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('.accordion').respTabs({
                model: 'accordions'
            });
        }); 
    </script> 
</body>
</html>