<?php /*a:2:{s:73:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/trading/nofinsh.html";i:1537260651;s:62:"/www/wwwroot/yiwunqianbaonew/application/mobile/view/base.html";i:1535011708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 未完成订单 </title>
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
    .pgoumai {

        font-size: 14px;

        color: #ff2929;

        display: block;

        border-radius: 5px;

        border: 1px solid #ff2929;

        padding: 0 0.5vmin;

        text-align: center;

        width: 25%;

    }



    .pgoumai1 {

        font-size: 14px;

        color: #aaa;

        display: block;

        border-radius: 5px;

        padding: 0 0.5vmin;

        text-align: center;

        width: 25%;

    }



    .demo {

        margin: -.92rem auto 1rem;

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

        <h2><?php echo lang("未完成订单"); ?></h2>

    </div>

    <div class="header_r"></div>

</div>



<div class="big_width100">

    <div class="undone_order">

        <div class="undone_order_titel clear_wl">

            <a href="<?php echo url('/mobile/Trading/nofinsh'); ?>" <?php if($status == '1'): ?>class="undone_OT_l fl " <?php else: ?>class="undone_OT_l fl noe"
                <?php endif; ?>>

                <?php echo lang("未选择收款人"); ?></a>

            <a href="<?php echo url('/mobile/Trading/nofinsh/status/1'); ?>" <?php if($status == '1'): ?>class="undone_OT_l fr noe" <?php else: ?>class="undone_OT_l fr "
                <?php endif; ?>>

                <?php echo lang("已选择收款人"); ?></a>

        </div>

    </div>

</div>



<!--<div class="demo">

        <div class="accordion">

            <div class="big_width100">

                <div class="annalWa"><p >没找到相关记录</p></div>

            </div>

        </div>

    </div>-->



<div class="demo">

    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>

    <div class="accordion">

        <div class="big_width100">

            <div class="annalWa">
                <p><?php echo lang("没找到相关记录"); ?></p>
            </div>

        </div>

    </div>

    <?php else: ?>



    <div class="accordion">



        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>

        <div class="accordion-handle">

            <h4>

                <p class="accmrp"><?php echo lang("挂出金额"); ?>：<?php echo htmlentities($v['money']); ?>RMB

                    <span><?php echo !empty($v['sell_id']) ? lang("已选择收款人") : lang("未选择收款人"); ?></span>



                </p>

                <p><?php echo !empty($v['sell_id']) ? htmlentities($v['create_time']) : htmlentities($v['create_time']); ?>

                    <span><?php echo !empty($v['sell_id']) ? htmlentities($v['user']['nickname']) : ''; ?></span>

                </p>

            </h4>

            <i></i>

        </div>


        <?php if($v['pic'] == ''): ?>
        <div style="width: 100%;margin-bottom:1vmin;padding-left:2vmin;height:15vmin;background-color: white;">
            <h4>
                <p style="width: 100%;line-height: 160%;">
					<?php if($v['status'] == 0): ?>
                    <a class="pgoumai" onclick="quxiao(<?php echo htmlentities($v['id']); ?>)" href="###"><?php echo lang("取消订单"); ?></a>
					<?php endif; ?>
                </p>
            </h4>
        </div>
        <?php endif; ?>

        <div class="accordion-content por" style="margin-top:1vmin;">

            <div class="acco_con_up">

                <p><?php echo lang("打款人姓名"); ?>：

                    <span><?php echo !empty($v['buy_id']) ? htmlentities($v['user']['nickname']) : ''; ?></span>

                </p>

                <p><?php echo lang("手机号码"); ?>：

                    <span><?php echo !empty($v['buy_id']) ? htmlentities($v['user']['mobile']) : ''; ?></span>

                </p>

                <p><?php echo lang("交易金额"); ?>：

                    <span><?php echo !empty($v['buy_id']) ? htmlentities($v['tomoney']) : ''; ?></span>

                </p>

                <p><?php echo lang("状态"); ?>：
                    <span>
                        <?php echo !empty($v['sell_id']) ? lang("已选择打款人") : lang("未选择打款人"); ?></span>

                </p>

            </div>

        </div>

        <?php endforeach; endif; else: echo "" ;endif; ?>

        <ul class="pagination" style="color:#666;padding-left:2vmin;margin-top:3vmin">

            <!-- <div>

                <span class="rows">共 条记录</span>

            </div> -->

        </ul>

    </div>

    <?php endif; ?>

</div>



   

<script type="text/javascript" src="/static/common/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/mobile/js/rem.js"></script>
<script type="text/javascript" src="/static/mobile/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/mobile/js/index.js"></script>
<script type="text/javascript" src="/static/mobile/js/dist/dropload.min.js"></script>

<script type="text/javascript" src="/static/mobile/js/responsive.tabs.js"></script>
<script type="text/javascript" src="/static/mobile/js/trading/nofinsh.js"></script>

</body>
</html>