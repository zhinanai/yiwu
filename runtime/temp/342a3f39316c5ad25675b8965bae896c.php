<?php /*a:2:{s:77:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/digitalassets/index.html";i:1535790768;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
    数字资产
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


<!-- <div class="header">
    <div class="header_l">
        <a href="<?php echo url('/mobile/Index/index'); ?>"><img src="/static/mobile/images/jiant.png" alt=""></a>
    </div>
    <div class="header_c"><h2><?php echo lang('数字资产'); ?></h2></div>
    <div class="header_r"><a href="<?php echo url('/mobile/Digitalassets/trade_records'); ?>"><?php echo lang('交易记录'); ?></a></div>
</div> -->
<div class="big_width100" style="margin-top: 0;">
    <div class="big_bg">
        <div class="shuzbzonge">
            <!-- <img src="/static/mobile/images/toux-icon.png" class="icon">
            <p><?php echo lang('当前价格'); ?>：<span>￥<?php echo htmlentities($coindets['0']['coin_price']); ?></span></p> -->
            <style>
                .two_money{width: 100%;text-align: center;align-items: center;}
                .two_money li{width: 50%;color: #f1ad46;font-size: .32rem; margin: .5rem 0;}
                .two_money li p{margin-top: .2rem}
                .two_money li:nth-child(1){border-right: 1px solid #f1ad46}
                .copy {color:#f1ad46;width: 100%;display: flex;align-items: center;padding: .2rem;font-size: .26rem; }
                .copy button{color: #f1ad46}
                #content{width:60%;overflow: hidden;white-space:nowrap;text-overflow:ellipsis;}
            </style>
            <ul class="two_money flex">
                <li>
                    <span><?php echo !empty($myassets['c_nums']) ? htmlentities($myassets['c_nums']) : '0.0000'; ?></span>
                    <p><?php echo lang('资产'); ?></p>
                </li>
                <li>
                    <span><?php echo htmlentities($coindets['0']['coin_price']); ?></span>
                    <p><?php echo lang('当前价格'); ?></p>
                </li>
            </ul>
        <div class="wpaeyzic">
            
            <!-- <p  class="zichan"><?php echo lang('我的资产'); ?><span>￥<?php echo htmlentities($myassets['c_nums']); ?></span></p> -->
            <div class="copy">
                <p style="width: 20%"><?php echo lang('钱包地址'); ?>:</p>
                <p id="content"><?php echo htmlentities($wallet_add['wallet_add']); ?></p>
                <div style="width: 20%;"><button id="copyBT"><?php echo lang('复制地址'); ?></button></div>
            </div>

        </div>
        </div>
        <div class="wpzicicon">
            <ul class="clear_wl">
                <li>
                    <a href="<?php echo url('/mobile/Digitalassets/turnout'); ?>">
                        <!-- <img src="/static/mobile/images/out.png" alt=""> -->
                        <i class="iconfont icon-zhuanchu"></i>
                        <p><?php echo lang('转出'); ?></p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('/mobile/Crowd/crowds'); ?>">
                        <!-- <img src="/static/mobile/images/zhongchou.png" alt=""> -->
                        <i class="iconfont icon-zhongchou"></i>
                        <p><?php echo lang('众筹'); ?></p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('/mobile/Digitalassets/wallet'); ?>">
                        <!-- <img src="/static/mobile/images/qianbao.png" alt=""> -->
                        <i class="iconfont icon-qiabao"></i>
                        <p><?php echo lang('易宝'); ?></p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('/mobile/Transaction/balance_trade',['cid'=>1]); ?>">
                        <!-- <img src="/static/mobile/images/jiaoyi.png" alt=""> -->
                        <i class="iconfont icon-icon64"></i>
                        <p><?php echo lang('交易'); ?></p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="dis_biz">
           
                    <?php if(is_array($coindets) || $coindets instanceof \think\Collection || $coindets instanceof \think\Paginator): $i = 0; $__LIST__ = $coindets;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="dis_biz_wp">
                    <div class="Dbiz_titie">
                        <p><b class="wpae_stc0"></b><?php echo htmlentities($vo['coin_name']); ?></p>
                    </div>
                    <div class="dis_biz_cop clear_wl">
                        <div class="dis_biz_copa">
                            <p><?php echo $vo['coin_name']=='易物币' ? htmlentities($myassets['c_nums']) :  '0.0000'; ?></p>
                            
                            
                            <p><span><?php echo htmlentities($vo['coin_name']); ?></span></p>
                        </div>
                        <div class="dis_biz_copb">
                            <p><?php echo htmlentities($vo['coin_price']); ?></p>
                            <p><span><?php echo lang('当前价格'); ?></span></p>
                        </div>
                        <div class="dis_biz_copc">
                            <?php if($vo['coin_name']=='易物币'): ?>
                            <a href="<?php echo url('/mobile/Transaction/balance_trade',['cid'=>1,'coin_name'=>$vo['coin_name']]); ?>" class="yugejiaoy"><?php echo lang('余额交易'); ?></a>
                            <?php else: ?>
                            <a href="<?php echo url('/mobile/Transaction/balance_trade',['cid'=>$vo['cid'],'coin_name'=>$vo['coin_name']]); ?>" class="yugejiaoy"><?php echo lang('余额交易'); ?></a>
                            <?php endif; ?>
                            <a href="###"   class="xianzjiaoy"><?php echo lang('现金交易'); ?></a>                       
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            <div style="height: .92rem;"></div>
            <div class="footer-fan">
                <a href="<?php echo url('/mobile/index/index'); ?>">
                    <i class="iconfont icon-shouye"></i>
                    <p><?php echo lang('首页'); ?></p>
                </a>
                <a href="<?php echo url('/mobile/Digitalassets/index'); ?>"  class="active">
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
        </div>
    </div>
</div>



   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

  <script type="text/javascript">

    $(document).ready(function(){
        $(".xianzjiaoy").click(function(){
            msg_alert("<?php echo lang('暂时不支持现金交易'); ?>");
        });
    });

    function copyArticle(event) {
        const range = document.createRange();
        range.selectNode(document.getElementById('content'));

        const selection = window.getSelection();
        if (selection.rangeCount > 0) selection.removeAllRanges();
        selection.addRange(range);
        document.execCommand('copy');
        msg_alert("<?php echo lang('复制成功'); ?>！");
    }

    document.getElementById('copyBT').addEventListener('click', copyArticle, false);
</script>

</body>
</html>